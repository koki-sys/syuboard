<!DOCTYPE html>
<html>
    <head>
    <meta http-equiv="refresh" content="3;URL=./index.php">
    </head>
<?php
    if (isset($_SESSION["user"])) {
        unset($_SESSION["user"]);
    }
?>
<body>
    <h3>ログアウトしました。トップページに遷移します...</h3>
</body>
</html>
