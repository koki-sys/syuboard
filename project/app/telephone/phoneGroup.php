<?php require './header.php'; ?>
<div class="container-fluid">
    <h1 style="color: #389B72;">通話中</h1>
    <div class="row">
        部屋名:
        <input type="text" placeholder="部屋名の入力" id="js-room-id">
        <button id="js-join-trigger" class="btn btn-success">部屋に参加</button>
        <button id="js-leave-trigger" class="btn btn-danger">退出する</button>
    </div>
    <div class="row remote-streams" id="js-remote-streams">
        <div class="col-sm-6 col-md-3">
            <div class="embed-responsive embed-responsive-16by9">
                <video id="js-local-stream"></video>
            </div>
        </div>
    </div>
    <div id="chatbar" class="row chatbar">
        <div class="col-12">
            <div class="bg-secondary rounded">
                <pre class="messages text-white" id="js-messages"></pre>
            </div>
        </div>
        <div class="send-text">
            <input type="text" id="js-local-text" class="form-control p-0">
            <small>Enterでメッセージ送信</small>
        </div>
    </div>
    <script src="./phoneGroup.js"></script>
    <script src="./chatbar.js"></script>
    <?php require './footer.php'; ?>