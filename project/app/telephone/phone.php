<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>SkyWayチュートリアル</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center">通話サンプル</h1>
        <div class="p2p-media row">
            <div class="remote-stream col-8">
                <video id="js-remote-stream" width="70%" autoplay></video>
            </div>
            <div class="local-stream col-4">
                <video id="js-local-stream" width="70%"></video>
                <p>Your ID: <span id="js-local-id"></span></p>
                <input type="text" placeholder="IDを入力して通話開始" id="js-remote-id">
                <button id="js-call-trigger" class="btn btn-primary">通話</button>
                <button id="js-close-trigger" class="btn btn-danger">退出</button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="//cdn.webrtc.ecl.ntt.com/skyway-4.4.1.js"></script>
    <script src="./phone.js"></script>
</body>
</html>