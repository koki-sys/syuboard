<?php require './header.php'; ?>
<?php
require './app/controller/BoardController.php';

use Controller\BoardController;

$boards = new BoardController();
?>

<body>
    <div class="container-fluid">
        <div class="row mt-4 ml-4">
            <div class="col-md-1"></div>
            <div class="col-md-7">
                <h2 class="page-title">掲示板</h2>
            </div>
            <div class="col-md-3">
                <form action="#" method="post">
                    <input type="text" class="form-control" placeholder="ジャンル名で検索" />
                </form>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6 mt-3">
                <?php foreach ($boards->index() as $board) : ?>
                    <div class="board card shadow-sm mt-3">
                        <div class="card-body">
                            <a href="#" class="float-left">
                                <!-- AWSのS3から取得 -->
                                <img src="./images/index/prof img.png" width="30" height="30">
                                <?= $board["title"]; ?>
                            </a>
                            <small class="float-right">・・・</small><br />
                            <span class="mt-4 float-right"><?= $board["name"] ?></span>
                        </div>
                        <div class="card-footer tag" style="background-color: #389B72">タグの一覧表示</div>
                    </div>
                <?php endforeach; ?>
                <div class=" float-right"><img src="./images/index/Make thread.png" width="20" heifht="20"></div>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
</body>

</html>