<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>SkyWaytest</title>

<body>
    <div class="container">
        <h1 class="heading">Room example</h1>
        <p class="note">
            Change Room mode (before join in a room):
            <a href="#">mesh</a> / <a href="#sfu">sfu</a>
        </p>
        <div class="room">
            <div>
                <video id="js-local-stream"></video>
                <span id="js-room-mode"></span>:
                <input type="text" placeholder="Room Name" id="js-room-id">
                <button id="js-join-trigger">Join</button>
                <button id="js-leave-trigger">Leave</button>
                <BR>
                <!-- ボタンの関連操作を変更する -->
                <button id="js-applyconstraints-trigger">applyconstraints</button>
            </div>
            <div class="remote-streams" id="js-remote-streams"></div>
            <div>
                <pre class="messages" id="js-messages"></pre>
                <input type="text" id="js-local-text">
                <button id="js-send-trigger">Send</button>
            </div>
        </div>
        <p class="meta" id="js-meta"></p>
    </div>
    <script src="//cdn.webrtc.ecl.ntt.com/skyway-latest.js"></script>
    <script src="./phoneHD.js"></script>
</body>

</html>