<?php require './header.php' ?>
<?php
require_once('./app/controller/BoardController.php');
use Controller\BoardController;

$boards = new BoardController();
$board = $boards->index();
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
            <div class="col-md-6 mt-3" id="board-area">
                <?php foreach ($board as $result) : ?>
                <div class="board card shadow-sm mt-3"
                    id="board<?= $result["mtagid"] ?>"
                    style="z-index: 1;position: relative">
                    <div class="card-body">
                        <a href="#" class="board-user">
                            <!-- AWSのS3から取得 -->
                            <img src="./images/index/prof img.png" width="30" height="30">
                            <?= $result["title"]; ?>
                        </a>
                        <small class="float-right">・・・</small><br />
                        <span class="mt-4 float-right"><?= $result["name"] ?></span>
                    </div>
                    <div class="card-footer tag" id="tag"
                        onclick="dispBox(<?= $result['boardid'] ?>)">
                        タグの一覧表示
                    </div>
                </div>
                <?php $result["mtagid"] ?>
                <div class="d-none board-tag bg-white border p-2 pb-4"
                    id="<?= $result['boardid'] ?>">
                    <span class="rounded main-tag"><?= $result["mtagname"] ?></span><br />
                    <?php for ($count = 1; $count <= 5; $count++) : ?>
                    <?php if (!is_null($result["name${count}"])) : ?>
                    <span class="rounded sub-tag"><?= $result["name${count}"] ?></span>
                    <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <script type="text/javascript">
        const dispBox = (id) => {
            // tag click ivent
            const boxElmClass = document.getElementById(id).classList;

            if (boxElmClass.contains("d-none")) {
                boxElmClass.remove("d-none");
            } else {
                boxElmClass.add("d-none");
            }
        }
    </script>
</body>

</html>