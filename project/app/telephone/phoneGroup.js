const Peer = window.Peer;

(async function main() {
    const localVideo = document.getElementById("js-local-stream");
    const joinTrigger = document.getElementById("js-join-trigger");
    const leaveTrigger = document.getElementById("js-leave-trigger");
    const remoteVideos = document.getElementById("js-remote-streams");
    const roomId = document.getElementById("js-room-id");
    const localText = document.getElementById("js-local-text");
    const messages = document.getElementById("js-messages");
    const camera = document.getElementById("camera");
    const mic = document.getElementById("mic");
    const share = document.getElementById("dispshare");

    const localStream = await navigator.mediaDevices
        .getUserMedia({
            audio: true,
            video: true,
        })
        .catch(console.error);

    // Render local stream
    localVideo.muted = true;
    localVideo.srcObject = localStream;
    localVideo.playsInline = true;
    await localVideo.play().catch(console.error);

    // eslint-disable-next-line require-atomic-updates
    const peer = (window.peer = new Peer({
        key: "eec72877-20c9-49ff-8d58-1a0fc598db2c",
        debug: 3,
    }));

    // Register join handler
    joinTrigger.addEventListener("click", () => {
        // Note that you need to ensure the peer has connected to signaling server
        // before using methods of peer instance.
        if (!peer.open) {
            return;
        }

        const room = peer.joinRoom(roomId.value, {
            mode: "mesh",
            stream: localStream,
        });

        room.once("open", () => {
            messages.textContent += "=== You joined ===\n";
        });
        room.on("peerJoin", (peerId) => {
            messages.textContent += `=== ${peerId} joined ===\n`;
        });

        // Render remote stream for new peer join in the room
        room.on("stream", async (stream) => {
            const flagment = document.createDocumentFragment();

            const colBox = document.createElement("div");
            colBox.classList.add("col-sm-6");
            colBox.classList.add("col-md-3");
            colBox.setAttribute("id", `col-${stream.peerId}`);

            const responsive = document.createElement("div");
            responsive.classList.add("embed-responsive");
            responsive.classList.add("embed-responsive-16by9");
            responsive.setAttribute("id", `resp-${stream.peerId}`);

            const newVideo = document.createElement("video");
            newVideo.srcObject = stream;
            newVideo.playsInline = true;
            // mark peerId to find it later at peerLeave event
            newVideo.setAttribute("data-peer-id", stream.peerId);

            responsive.append(newVideo);
            colBox.append(responsive);
            flagment.append(colBox);
            remoteVideos.append(flagment);

            await newVideo.play().catch(console.error);
        });

        room.on("data", ({ data, src }) => {
            // Show a message sent to the room and who sent
            const myContent = document.createElement("div");
            myContent.classList.add("float-right");
            myContent.style.width = "70%";

            const myMessage = document.createElement("div");
            myMessage.classList.add("rounded");
            myMessage.style.color = "#404040";
            myMessage.style.backgroundColor = "#DEF4C6";
            myMessage.style.padding = "1.7%";
            myMessage.textContent += `${data}`;

            const myName = document.createElement("small");
            myName.textContent += `${src}さん`;

            const br = document.createElement("br");

            myContent.append(myName);
            myContent.append(myMessage);
            messages.append(myContent);
            messages.append(br);
        });

        // for closing room members
        room.on("peerLeave", (peerId) => {
            const remoteVideo = remoteVideos.querySelector(
                `[data-peer-id="${peerId}"]`
            );
            remoteVideo.srcObject.getTracks().forEach((track) => track.stop());
            remoteVideo.srcObject = null;

            document.getElementById(`col-${peerId}`).remove();
            document.getElementById(`resp-${peerId}`).remove();
            remoteVideo.remove();

            messages.textContent += `=== ${peerId} left ===\n`;
        });

        // for closing myself
        room.once("close", () => {
            localText.removeEventListener("keypress", onClickSend);
            messages.textContent += "== You left ===\n";
            Array.from(remoteVideos.children).forEach((remoteVideo) => {
                remoteVideo.srcObject
                    .getTracks()
                    .forEach((track) => track.stop());
                remoteVideo.srcObject = null;
                remoteVideo.remove();
            });
        });

        localText.addEventListener("keypress", onClickSend);
        leaveTrigger.addEventListener("click", () => room.close(), {
            once: true,
        });

        function onClickSend(e) {
            if (e.key === "Enter" && localText.value != "") {
                // Send message to all of the peers in the room via websocket
                room.send(localText.value);

                const myContent = document.createElement("div");
                myContent.classList.add("float-left");
                myContent.style.width = "100%";

                const myMessage = document.createElement("div");
                myMessage.classList.add("rounded");
                myMessage.style.color = "#FCFCFC";
                myMessage.style.backgroundColor = "#389B72";
                myMessage.style.padding = "1.7%";
                myMessage.style.width = "70%";
                myMessage.textContent += `${localText.value}`;

                const myName = document.createElement("small");
                myName.textContent += `${peer.id}さん`;

                const br = document.createElement("br");

                myContent.append(myName);
                myContent.append(myMessage);
                messages.append(myContent);
                messages.append(br);
                localText.value = "";
            } else if (e.key === "Enter" && localText.value == "") {
                const br = document.createElement("br");
                messages.append(br);
            }
        }
    });

    peer.on("error", console.error);

    const switchCameraOnOff = () => {
        const videoState = localStream.getVideoTracks()[0];
        if (videoState.enabled) {
            videoState.enabled = false;
            // ビデオオフ
            camera.setAttribute("src", "../../images/telephone/cameraoff.png");
        } else {
            videoState.enabled = true;
            // ビデオオン
            camera.setAttribute("src", "../../images/telephone/camera.png");
        }
    };

    const switchMicOnOff = () => {
        const micState = localStream.getAudioTracks()[0];
        if (micState.enabled) {
            micState.enabled = false;
            mic.setAttribute("src", "../../images/telephone/micoff.png");
        } else {
            micState.enabled = true;
            mic.setAttribute("src", "../../images/telephone/mic.png");
        }
    };

    camera.addEventListener("click", switchCameraOnOff);
    mic.addEventListener("click", switchMicOnOff);
})();
