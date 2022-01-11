<?php session_start(); ?>
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>syuboard</title>
</head>

<body>
    <?php if (isset($_SESSION['user'])) : ?>
    <nav class="navbar navbar-expand-lg sticky-top">
        <ul class="navbar-nav mr-auto">
            <a class="logo d-block" href="./index.php">
                <img src="./images/header/syuboard.png" alt="logo" width="200" height="auto">
            </a>
        </ul>
        <ul class="navbar-nav list-group list-group-horizontal">
            <li class="nav-item mr-2 ml-3">
                <a href="friend.php" class="text-center" style="color: #DEF4C6; font-size: xx-small">
                    <img src="./images/header/add_friend.png" class="d-block mx-auto" width="25" height="auto" />
                    <p style="color: #DEF4C6; font-size: xx-small" class="text-center m-0">フレンド</p>
                </a>
            </li>
            <li class="nav-item mr-2 ml-3">
                <a href="tellindex.php">
                    <img src="./images/header/call.png" class="d-block mx-auto" width="25" height="auto" />
                    <p style="color: #DEF4C6; font-size: xx-small" class="text-center m-0">通話</p>
                </a>
            </li>
            <li class="nav-item mr-2 ml-3">
                <a href="index.php" class="text-center" style="color: #DEF4C6; font-size: xx-small">
                    <img src="./images/header/chat.png" class="d-block mx-auto" width="25" height="auto" />
                    <p style="color: #DEF4C6; font-size: xx-small" class="text-center m-0">掲示板</p>
                </a>
            </li>
            <li class="nav-item mr-2 ml-3">
                <a href="#" class="text-center" style="color: #DEF4C6; font-size: xx-small">
                    <img src="./images/header/profile.png" class="d-block mx-auto" width="25" height="auto" />
                    <p style="color: #DEF4C6; font-size: xx-small" class="text-center m-0">プロフィール</p>
                </a>
            </li>
            <li class="nav-item mr-2 ml-3">
                <a href="logout.php" class="text-center" style="color: #DEF4C6; font-size: xx-small">
                    <img src="./images/header/login.png" class="d-block mx-auto" width="25" height="auto" />
                    <p style="color: #DEF4C6; font-size: xx-small" class="text-center m-0">ログアウト</p>
                </a>
            </li>
        </ul>
    </nav>
    <?php else : ?>
    <nav class="navbar navbar-expand-lg sticky-top">
        <ul class="navbar-nav mr-auto">
            <a class="logo d-block" href="./index.php">
                <img src="./images/header/syuboard.png" alt="logo" width="200" height="auto">
            </a>
        </ul>
        <ul class="navbar-nav list-group list-group-horizontal">
            <li class="nav-item mr-2 ml-3">
                <a href="login.php" class="text-center" style="color: #DEF4C6; font-size: xx-small">
                    <img src="./images/header/login.png" class="d-block mx-auto" width="25" height="auto" />
                    <p style="color: #DEF4C6; font-size: xx-small" class="text-center m-0">ログイン</p>
                </a>
            </li>
            <li class="nav-item mr-2 ml-3">
                <a href="newlogin.php">
                    <img src="./images/header/register.png" class="d-block mx-auto" width="25" height="auto" />
                    <p style="color: #B1CF5F; font-size: xx-small" class="text-center m-0">新規登録</p>
                </a>
            </li>
        </ul>
    </nav>

    <?php endif; ?>
