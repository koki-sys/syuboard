<?php
require '../controller/TalkController.php';

use Controller\TalkController;

$talk = new TalkController();

$talk->meeting();
?>