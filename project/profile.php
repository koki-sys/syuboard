</html><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>SYUBOARDプロフィール画面</title>
<link rel="stylesheet" href="./css/profile.css" type="text/css">
</head>
<?php require './header2.php'; ?>
<body>
  <div class="container">
    <h2 class="mx-l">プロフィール</h2>
    <div class="raw">
    <div class="col-md-1"></div>
      <div class="col-md-5">
        <div class="profile">
          <img src="./images/index/prof img.png" width="130" height="130">
          <input type="text" style="position: absolute; top: 190; left: 380; width: 100%; height: 55px;" placeholder="ニックネーム">
        </div>
      </div>
      <div class="col-md-6"></div>
    </div>
    <div class="raw">
      <div class="comment">
        <div class="col-md-2"></div>
        <div class="col-md-7">
          <h3>コメント</h3>
          <input type="text" class="form-control" style="position: absolute; top: 400; left: 290;  height: 200px;">
          <input type="button" placeholder="確定">
        </div>
        <div class="col-md-3"></div>
      </div>
</div>  
    
  </div>
</body>