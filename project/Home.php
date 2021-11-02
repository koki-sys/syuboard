<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>SYUBOARDホーム画面</title>
<link rel="stylesheet" href="../css/Home.css" type="text/css">
</head>
<!--nav 設定　-->
<?php require '../header.php'; ?>
<nav class="navbar navbar-expand-lg">
    <a class="logo d-block">
        <img src="../images/SYUBOARD.png" alt="logo" width="200" height="30">
    </a>
  <div class="collapse navbar-collapse" id="navbarsExample03">
    <ul class="navbar-nav">
      <li class="nav-item active" >
        <a href="shinki.php"><img src="../images/shinki.png" width="30" height="30"></a>
      </li>
      <li class="nav-item" >
        <a href="rogin.php"><img src="../images/rogin.png" width="30" height="30"></a>
      </li>
    </ul>
  </div>
</nav><br>
<div class="container-fluid">
    <div class="row-center">
      <from>
      <div class="form-row">
          <div class="form-group col">
          <h2>掲示板</h2>
          </div>
          <div class="form-group col">
          <input type="text" placeholder="ジャンル名で検索">
          </div>
        </div>
      </from>  
    </div>
</div>

</body>

</html>