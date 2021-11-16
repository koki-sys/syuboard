<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous" />
    <script src="//cdn.webrtc.ecl.ntt.com/skyway-4.4.2.js"></script>
    <link rel="stylesheet" href="../../css/header.css" />
    <link rel="stylesheet" href="../../css/body.css" />
    <link rel="stylesheet" href="../../css/sidebar.css" />
    <script src="./dropmenu.js"></script>
    <link rel="icon" type="image/x-icon" href="favicon.ico">
    <title>syuboard</title>
</head>

<body>
    <nav class="navbar call-nav">
        <ul class="navbar-nav mr-auto">
            <span class="navbar-brand mb-0 h1 light-green-text">通話タイトル</span>
        </ul>
        <ul class="navbar-nav list-group list-group-horizontal">
            <li class="nav-item mr-2 ml-3">
                <span class="mb-0 h6 light-green-text align-middle" id="call-time-up"></span>
            </li>
            <li class="nav-item mr-2 ml-3">
                <img src="../../images/header/chat.svg" id="chat-btn"/>
            </li>
            <li class="nav-item mr-2 ml-3 dropdown">
                <span class="m-0 light-green-text align-middle dropdown__btn" id="dropdown__btn">・・・</span>
                <div class="dropdown__body" id="dropdown__body">
                    <ul class="dropdown__list">
                        <li class="dropdown__item"><a href="https://www.google.com/" class="dropdown__item-link">参加者リスト</a></li>
                        <li class="dropdown__item"><a href="https://www.yahoo.co.jp/" class="dropdown__item-link">タグ</a></li>
                        <li class="dropdown__item"><a href="https://www.yahoo.co.jp/" class="dropdown__item-link">オプション</a></li>
                    </ul>
                </div>
            </li>
        </ul>
    </nav>