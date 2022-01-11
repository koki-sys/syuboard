<?php

require_once('./app/controller/TalkController.php');

use Controller\TalkController;

$talk = new TalkController;

$keyword = $_POST["search"];

// 実行するメソッドの追加
$result = $talk->search($keyword);