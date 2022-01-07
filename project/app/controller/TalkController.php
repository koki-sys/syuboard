<?php

namespace Controller;

require_once('./database/connect.php');

use function Connection\conn;

/**
 * 通話に関するコントローラ（処理）
 *
 * @author koki-sys
 */
class TalkController
{
    /**
     * 通話サイトにつなげるためのメソッド
     *
     * @author koki-sys
     */
    public function meeting()
    {
        $API_KEY = "mirotalk_default_secret";
        $SYUTALK_URL = "https://syutalk.lolipop.io/api/v1/meeting";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $SYUTALK_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = [
            'authorization:' . $API_KEY,
            'Content-Type: application/json'
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);

        curl_close($ch);

        $data = json_decode($response);
        header("Location: {$data->{'meeting'}}");
    }

    /**
     * 通話スレッドを一覧表示するための
     * メソッド
     *
     * @author koki-sys
     *
     * @return \PDOStatement
     */
    public function index()
    {
        $pdo = conn();
        $sql = "select * from telphone join customer ".
        "on telphone.customerid = customer.customerid join mtag on mtag.mtagid = telphone.mtagid ".
        "join stag on mtag.stagid = stag.stagid";
        $get_talk_query = $pdo->prepare($sql);
        $get_talk_query->execute();
        $talk_array = $get_talk_query->fetchAll();
        // var_dump($talk_array);

        return $talk_array;
    }

    /**
     * 通話スレッドを作成するメソッド
     * 
     * @author koki-sys
     */
    public function create() {
        
    }
}
