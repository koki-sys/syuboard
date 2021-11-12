<?php require './header.php'; ?>
<div class="container">
    <h1 style="color: #389B72;">通話中</h1>
    <p class="note">
        Change Room mode (before join in a room):
        <a href="#">mesh</a> / <a href="#sfu">sfu</a>
    </p>
    <div class="row">
        <div class="col-sm-6 col-md-4">
            <div class="embed-responsive embed-responsive-16by9">
                <video id="js-local-stream"></video>
            </div>
        </div>
        <div class="col-sm-6 col-md-4">
            <div class="remote-streams" id="js-remote-streams"></div>
        </div>
        <div class="row">
            <span id="js-room-mode"></span>:
            <input type="text" placeholder="部屋名の入力" id="js-room-id">
            <button id="js-join-trigger" class="btn btn-success">部屋に参加</button>
            <button id="js-leave-trigger" class="btn btn-danger">退出する</button>
        </div>

    </div>
    <div id="right-panel" class="row">
        <div class="col-12">
            <div class="bg-secondary rounded">
                <pre class="messages text-white" id="js-messages"></pre>
            </div>
        </div>
        <div class="col-12">
            <input type="text" id="js-local-text">
            <button id="js-send-trigger" class="btn btn-primary">送信</button>
        </div>
    </div>

    <script src="./phoneGroup.js"></script>
    <?php require './footer.php'; ?>