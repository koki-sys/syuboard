<?php

namespace Controller;

require_once('./database/connect.php');

use function Connection\conn;

class BoardController
{
    /**
     * 掲示板のタイトルなどを取得するメソッド（トップページ用）
     *
     * @author koki-sys
     *
     * @return \PDOStatement
     */
    public function index()
    {
        $pdo = conn();
        $get_board_query = $pdo->prepare("select * from board join customer on board.customerid = customer.customerid join mtag on board.mtagid = mtag.mtagid join stag on mtag.stagid = stag.stagid");
        $get_board_query->execute();
        $board_array = $get_board_query->fetchAll();

        return $board_array;
    }
}
