<?php

namespace Controller;

require './database/connect.php';

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
        $get_board_query = $pdo->prepare("select boardid, title, customer.name, mtagid from board join customer on board.customerid = customer.customerid");
        $get_board_query->execute();

        return $get_board_query;
    }

    public function disp_tag($mtagid)
    {
        $pdo = conn();
        $get_tag_query = $pdo->prepare("select * from mtag join stag on mtag.stagid = stag.stagid where mtag.mtagid = :id");
        $get_tag_query->bindValue(":id", $mtagid);
        $get_tag_query->execute();

        return $get_tag_query;
    }
}
