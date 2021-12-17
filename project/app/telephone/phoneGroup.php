<?php require './header.php'; ?>
<div class="container-fluid" cmanOMat="area">
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
    <div class="modal fade" id="chatModal" tabindex="-1" role="dialog" aria-labelledby="chatModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="chatModalLabel">チャット</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body messages" id="js-messages">
                </div>
                <div class="modal-footer">
                    <input type="text" id="js-local-text" class="form-control p-0">
                    <small>Enterでメッセージ送信</small>
                </div>
            </div>
        </div>
    </div>
    <div id="member" class="row member">
        <div class="col-12">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">テスト1</li>
                <li class="list-group-item">テスト2</li>
                <li class="list-group-item">テスト3</li>
            </ul>
        </div>
    </div>
    <div id="tagbar" class="row tagbar">
        <div class="col-12">
            タグ
        </div>
    </div>
    <footer class="fixed-bottom mb-4 dock">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-12 col-md-4 text-center">
                <div class="d-inline-block mx-auto dock-body rounded">
                    <img src="../../images/telephone/camera.png" class="pt-2 pb-2 pr-3 pl-3 rounded-left" id="camera" />
                    <img src="../../images/telephone/mic.png" class="pt-2 pb-2 pr-3 pl-3" id="mic" />
                    <img src="../../images/telephone/share.png" class="pt-2 pb-2 pr-3 pl-3" id="dispshare" />
                    <img src="../../images/telephone/callout.png" class="pt-2 pb-2 pr-3 pl-3 bg-danger rounded-right" />
                </div>
            </div>
            <div class="col-md-4"></div>
        </div>
    </footer>
    <script>
        $("#chatModal").draggable({
            cursor: "move"
        });
    </script>
    <script src="./phoneGroup.js"></script>
    <script src="./member.js"></script>
    <script src="./tagbar.js"></script>
    <?php require './footer.php'; ?>