const Peer = window.Peer;
(async function main() {
    const localVideo = document.getElementById("js-local-stream");
    const joinTrigger = document.getElementById("js-join-trigger");
    const leaveTrigger = document.getElementById("js-leave-trigger");
    const remoteVideos = document.getElementById("js-remote-streams");
    const roomId = document.getElementById("js-room-id");
    const roomMode = document.getElementById("js-room-mode");
    const localText = document.getElementById("js-local-text");
    const sendTrigger = document.getElementById("js-send-trigger");
    const applyConstraintsTrigger = document.getElementById(
        "js-applyconstraints-trigger"
    );
    const messages = document.getElementById("js-messages");
    const meta = document.getElementById("js-meta");
    const sdkSrc = document.querySelector("script[src*=skyway]");
    meta.innerText = `
        UA: ${navigator.userAgent}
        SDK: ${sdkSrc ? sdkSrc.src : "unknown"}
        `.trim();
    const getRoomModeByHash = () => (location.hash === "#sfu" ? "sfu" : "mesh");
    roomMode.textContent = getRoomModeByHash();
    window.addEventListener(
        "hashchange",
        () => (roomMode.textContent = getRoomModeByHash())
    );

    let supported = navigator.mediaDevices.getSupportedConstraints();
    console.log(supported);
    const localStream = await navigator.mediaDevices
        .getUserMedia({
            audio: true,
            video: {
                frameRate: { ideal: 60 },
            },
        })
        .catch(console.error);
    localVideo.muted = true;
    localVideo.srcObject = localStream;
    localVideo.playsInline = true;
    await localVideo.play().catch(console.error);
    const peer = (window.peer = new Peer({
        key: "6a9872a4-ff6d-4553-8fc4-e86a384302e1",
        debug: 3,
    }));
    joinTrigger.addEventListener("click", () => {
        if (!peer.open) {
            return;
        }
        const room = peer.joinRoom(roomId.value, {
            mode: getRoomModeByHash(),
            stream: localStream,
        });
        room.once("open", () => {
            messages.textContent += "=== You joined ===\n";
        });
        room.on("peerJoin", (peerId) => {
            messages.textContent += `=== ${peerId} joined ===\n`;
        });
        room.on("stream", async (stream) => {
            const newVideo = document.createElement("video");
            newVideo.srcObject = stream;
            newVideo.playsInline = true;
            newVideo.setAttribute("data-peer-id", stream.peerId);
            remoteVideos.append(newVideo);
            await newVideo.play().catch(console.error);
        });
        room.on("data", ({ data, src }) => {
            messages.textContent += `${src}: ${data}\n`;
        });
        room.on("peerLeave", (peerId) => {
            const remoteVideo = remoteVideos.querySelector(
                `[data-peer-id="${peerId}"]`
            );
            remoteVideo.srcObject.getTracks().forEach((track) => track.stop());
            remoteVideo.srcObject = null;
            remoteVideo.remove();
            messages.textContent += `=== ${peerId} left ===\n`;
        });
        room.once("close", () => {
            sendTrigger.removeEventListener("click", onClickSend);
            messages.textContent += "== You left ===\n";
            Array.from(remoteVideos.children).forEach((remoteVideo) => {
                remoteVideo.srcObject
                    .getTracks()
                    .forEach((track) => track.stop());
                remoteVideo.srcObject = null;
                remoteVideo.remove();
            });
        });
        sendTrigger.addEventListener("click", onClickSend);
        leaveTrigger.addEventListener("click", () => room.close(), {
            once: true,
        });
        applyConstraintsTrigger.addEventListener("click", applyConstraints);

        function onClickSend() {
            room.send(localText.value);
            messages.textContent += `${peer.id}: ${localText.value}\n`;
            localText.value = "";
        }

        function applyConstraints() {
            let videoTrack = localStream.getVideoTracks()[0];
            let currentConstrains = videoTrack.getConstraints();
            console.log("変更前:", currentConstrains);
            videoTrack
                .applyConstraints({
                    frameRate: { ideal: 60 },
                })
                .then(() => {
                    currentConstrains = videoTrack.getConstraints();
                    console.log("変更後:", currentConstrains);
                })
                .catch((e) => {
                    console.log("制約を設定できません:", e);
                });
        }
    });
});
