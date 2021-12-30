<?php
require_once('./app/controller/BoardController.php');

use PHPUnit\Framework\TestCase;
use Controller\BoardController;

use function PHPUnit\Framework\assertIsArray;

class BoardControllerTest extends TestCase
{
    public function testIndex()
    {
        $boards = new BoardController();
        $board = $boards->index();

        assertIsArray($board);
    }
}