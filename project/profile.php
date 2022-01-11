</html><!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>SYUBOARDプロフィール画面</title>
<link rel="stylesheet" href="./css/profile.css" type="text/css">
</head>
<?php require './header.php'; ?>
<body>
<h2 style="position: absolute; top: 100px; left: 140px;">プロフィール</h2>
  <div class="container">
    <div class="raw">
      <div class="col-md-1"></div>
        <div class="col-md-5">
          <div class="profile">
            <img src="./images/index/prof img.png" width="100" height="100">
            <input type="text" id="name" style="position: absolute; top: 135; left: 160; width: 80%; height: 55px;" placeholder="ニックネーム">
          </div>
        </div>
        <div class="col-md-6"></div>
    </div>
    <div class="raw">
      <form>
          <div class="comment">
            <div class="col-md-2"></div>
              <div class="col-md-9">
                <h4>コメント</h4>
                <input type="text" class="form-control" style="position: absolute; top: 320; left: 100; width: 100%; height: 230px;">
              </div>
            <div class="col-md-1"></div>
              <div class="col-md-1"></div>
              <div class="form-group col-md-10">
                <input type="submit" class="btn btn-primary" value="確定" style="position: absolute; top: 580; left: 99%; width: 140px; height: 50px">
              </div>
              <div class="col-md-1"></div>
          </div>
      </form>
    </div> 
    
  </div>
</body>
</html>