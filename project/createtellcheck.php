<?php
require_once('./app/controller/TalkController.php');
require_once('./app/module/FormCheck.php');

use Controller\TalkController;
use Module\FormCheck;

session_start();

$form_check = new FormCheck;

/**
 * ユーザがログインしているかで処理を変える
 * 
 * @author koki-sys
 */
if (isset($_SESSION['user'])) {
    $customerid = $_SESSION['user']['id'];
    $title = ($form_check->titleExists($_POST["title"])) ? $_POST["title"] : null;
    $mtag = ($form_check->titleExists($_POST["mtag"])) ? $_POST["mtag"] : null;
    $stag = explode(",", $_POST['stag']);
    
    $talks = new TalkController;
    $talks->create($customerid, $title, $mtag, $stag);
} else {
    header("Location: createtell.php");
}

function redirect()
{
    header("Location: tellindex.php", true, 303);
    exit;
}

//redirect();
