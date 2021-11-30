</html><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>SYUBOARDホーム画面</title>
<link rel="stylesheet" href="./css/index.css" type="text/css">
</head>
<?php require './header.php'; ?>
<body>
  <div class="container-fluid">
      <from>
        <div class="form-row text-center">
          <div class="form-group col-md-6">
            <h2>掲示板</h2>
          </div>
          <div class="form-group col-md-6">
            <input type="text" style="position: absolute; top: 30; right: 75px; width: 40%; height: 30px;" placeholder="ジャンル名で検索">
          </div>
        </div>
      </from> 
  </div> 
<!--スレッド　設定　-->
<script src="../js/shiritori_game.js"></script>
<div calss="container-fluid">
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <div class="keijiban">
        <div class="sured1">
          <a href="php"><img src="./images/index/sured.png" width="80%" height="120"></a>
          <div class="henshu1">
            <img src="./images/index/･･･.png" width="20" height="4">
          </div>
          <div class="prof1">
            <img src="./images/index/prof img.png" width="30" height="30">
          </div>
        <div class="tagu1">
          <img src="./images/index/taguitiran.png" width="80%" height="40" >
          <h4>タグの一覧表示</h4>
        </div>
        <div class="sured2">
          <a href="php"><img src="./images/index/sured.png" width="80%" height="120"></a>
          <div class="henshu2">
            <img src="./images/index/･･･.png" width="20" height="4">
          </div>
          <div class="prof2">
            <img src="./images/index/prof img.png" width="30" height="30">
          </div>
        </div>
        <div class="tagu2">
          <img src="./images/index/taguitiran.png" width="80%" height="40">
          <h4>タグの一覧表示</h4>
        </div>
        <div class="sured3">
          <a href="php"><img src="./images/index/sured.png" width="80%" height="120"></a>
          <div class="henshu3">
            <img src="./images/index/･･･.png" width="20" height="4">
          </div>
          <div class="prof3" >
            <img src="./images/index/prof img.png" width="30" height="30">
          </div>
        </div>
        <div class="tagu3">
          <img src="./images/index/taguitiran.png" width="80%" height="40">
          <h4>タグの一覧表示</h4>
        </div>
      </div>
    </div>
    </div>
    <div class="col-md-2"></div>
  </div>
</div>

</body>

</html>