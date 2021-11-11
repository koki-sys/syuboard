<?php require '../../header.php'; ?>
<div class="container">
    <h1 class="heading">グループ通話サンプル</h1>
    <p class="note">
        Change Room mode (before join in a room):
        <a href="#">mesh</a> / <a href="#sfu">sfu</a>
    </p>
    <div class="room row">
        <div class="col-sm-6 col-md-4">
            <div class="embed-responsive embed-responsive-16by9">
                <video id="js-local-stream"></video>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="remote-streams" id="js-remote-streams" autoplay></div>
        </div>
        <div class="row">
            <span id="js-room-mode"></span>:
            <input type="text" placeholder="部屋名の入力" id="js-room-id">
            <button id="js-join-trigger" class="btn btn-success">部屋に参加</button>
            <button id="js-leave-trigger" class="btn btn-danger">退出する</button>
        </div>
        <div class="row">
            <h4>チャット</h4>
        </div>
        <div class="row">
            <div class="col-8 bg-secondary rounded">
                <pre class="messages text-white" id="js-messages"></pre>
            </div>
            <div class="col-4">
                <input type="text" id="js-local-text">
                <button id="js-send-trigger" class="btn btn-primary">送信</button>
            </div>
        </div>
        <p class="meta" id="js-meta"></p>
    </div>
    <script src="//cdn.webrtc.ecl.ntt.com/skyway-4.4.2.js"></script>
    <script src="./phoneGroupSample.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>

    </html>