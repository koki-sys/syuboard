</html><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>SYUBOARDホーム画面</title>
<link rel="stylesheet" href="../css/index.css" type="text/css">
</head>
<?php require './header.php'; ?>
<body>
      <from>
        <div class="form-row text-center">
          <div class="form-group col">
            <h2>掲示板</h2>
          </div>
          <div class="form-group col">
            <input type="text" style="position: absolute; top: 30; right: 75px;" size="35" placeholder="ジャンル名で検索">
          </div>
        </div>
      </from>  
<!--スレッド　設定　-->
<script src="../js/shiritori_game.js"></script>
<div calss="container-fluid">
  <div class="row">
    <div class="col-mx">
      <div class="keijiban">
        <div class="sured1">
          <a href="php"><img src="./images/index/sured.png" width="800" height="120"></a>
          <div class="henshu1">
            <div aria-expnaded="false" aria-haspopup="menu" aria-label="もっと見る" role="button" tabindex="0">
                <div dir="ltr" class="">
                  <img src="./images/index/･･･.png" type="select" onclick="dorp1()">
              </div>
            </div>
          </div>
          <div class="prof1">
            <img src="./images/index/prof img.png" width="30" height="30">
          </div>
        <div class="tagu1">
          <img src="./images/index/taguitiran.png" width="800" height="40" >
          <h4>タグの一覧表示</h4>
        </div>
        <div class="sured2">
          <a href="php"><img src="./images/index/sured.png" width="800" height="120"></a>
          <div class="henshu2">
            <img src="./images/index/･･･.png">
          </div>
          <div class="prof2">
            <img src="./images/index/prof img.png" width="30" height="30">
          </div>
        </div>
        <div class="tagu2">
          <img src="./images/index/taguitiran.png" width="800" height="40">
          <h4>タグの一覧表示</h4>
        </div>
        <div class="sured3">
          <a href="php"><img src="./images/index/sured.png" width="800" height="120"></a>
          <div class="henshu3">
            <img src="./images/index/･･･.png">
          </div>
          <div class="prof3" >
            <img src="./images/index/prof img.png" width="30" height="30">
          </div>
        </div>
        <div class="tagu3">
          <img src="./images/index/taguitiran.png" width="800" height="40">
          <h4>タグの一覧表示</h4>
        </div>
      </div>
    </div>
    <div class="col-mx"></div>
  </div>
</div>

</body>

</html>