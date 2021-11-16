</html><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>SYUBOARDプロフィール画面</title>
<link rel="stylesheet" href="./css/profile.css" type="text/css">
</head>
<?php require './header2.php'; ?>
<body>
  <div class="container-fluid">
    <h2 class="mx-l">プロフィール</h2>
    <div class="profile">
      <img src="./images/index/prof img.png" width="130" height="130">
      <input type="text" style="position: absolute; top: 190; left: 380; width: 400px; height: 55px;" placeholder="ニックネーム">
    </div>
    <div class="comment">
      <h3>コメント</h3>
      <input type="text" style="position: absolute; top: 400; left: 290; width: 600px; height: 200px;">
      <input type="button" placeholder="確定">
    </div>  
    
  </div>
</body>