<?php require 'header.php'; ?>
<?php
require_once('./app/controller/TalkController.php');
use Controller\TalkController;

$talks = new TalkController();
$talk = $talks->index();
?>

<body>
    <div class="container-fluid">
        <div class="row mt-4 ml-4">
            <div class="col-md-1"></div>
            <div class="col-md-5">
                <h2 class="page-title">通話一覧</h2>
            </div>
            <div class="col-md-4">
                <form action="./tellsearch.php" method="post">
                    <input type="text" name="search" class="form-control" placeholder="タイトルで検索" />
                </form>

            </div>
            <div class="col-md-2 mt-2"><a class="submit-btn rounded" href="./createtell.php">通話を作成</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-6 mt-3" id="board-area">
                <?php foreach ($talk as $result) : ?>
                <div class="board card shadow-sm mt-3"
                    id="talk<?= $result["mtagid"] ?>"
                    style="z-index: 1;position: relative">
                    <div class="card-body">
                        <div class="row">
                            <p href="#" class="board-user">
                                <!-- AWSのS3から取得 -->
                                <img src="./images/index/prof img.png" width="30" height="30">
                                <?= $result["title"]; ?>
                            </p>
                        </div>
                        <div class="row mt-3">
                            <div class="col-3">
                                <div class="tell-main-tag"><img src="./images/index/maintag.png" width="25"
                                        class="mr-2"><?= $result["mtagname"] ?>
                                </div>
                            </div>
                            <div class="col-4"><span>主：<?= $result["name"] ?></span>
                            </div>
                            <div class="col-5"><a class="btn float-right submit-btn"
                                    href='<?= $result["url"] ?>'>通話開始</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer tag" id="tag"
                        onclick="dispBox(<?= $result['groupid'] ?>)">
                        タグの一覧表示
                    </div>
                </div>
                <?php $result["mtagid"] ?>
                <div class="d-none board-tag bg-white border p-2 pb-4"
                    id="<?= $result['groupid'] ?>">
                    <span class="rounded main-tag"><?= $result["mtagname"] ?></span><br />
                    <?php for ($count = 1; $count <= 5; $count++) : ?>
                    <?php if (!is_null($result["name${count}"])) : ?>
                    <span class="rounded sub-tag"><?= $result["name${count}"] ?></span>
                    <?php endif; ?>
                    <?php endfor; ?>
                </div>
                <?php endforeach; ?>
            </div>
            <div class="col-md-4">
                <div class="float-right mr-3">

                </div>
            </div>
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
    <?php require 'footer.php';
