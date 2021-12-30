<?php
require_once('./app/controller/BoardController.php');
use Controller\BoardController;

$boards = new BoardController();
$board = $boards->index();

var_dump($board);
echo 'test';

?>