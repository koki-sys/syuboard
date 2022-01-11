<?php

namespace Controller;

use PDOException;

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

        return $talk_array;
    }

    /**
     * 通話スレッドを検索するためのメソッド
     *
     * @author koki-sys
     *
     * @param string $keyword
     * @return array $search_array
     */
    public function search(string $keyword)
    {
        $pdo = conn();
        $sql = "select * from telphone join customer ".
        "on telphone.customerid = customer.customerid join mtag on mtag.mtagid = telphone.mtagid ".
        "join stag on mtag.stagid = stag.stagid where telphone.title LIKE ?";
        $search_query = $pdo->prepare($sql);
        $search_query->execute(["%".$keyword."%"]);
        $search_array = $search_query->fetchAll();

        return $search_array;
    }

    /**
     * 通話スレッドを作成するメソッド
     *
     * 通話スレッドの作成と、通話URLの保存
     *
     * @author koki-sys
     *
     * @param int $customer_id
     * @param string $title
     * @param string $mtag
     * @param array|null $stag
     */
    public function create(int $customer_id, string $title, string $mtag, ?array $stag)
    {
        $pdo = conn();
        
        try {
            // stag保存
            $query = $pdo->prepare("insert into stag values (null, ?, ?, ?, ?, ?)");
            $query->execute([$stag[0], $stag[1], $stag[2], $stag[3], $stag[4]]);
            $stag_id = $pdo->lastInsertId();

            // mtag保存
            $mtag_insert = $pdo->prepare("insert into mtag values (null, ?, ?)");
            $mtag_insert->execute([$mtag, $stag_id]);
            $mtag_id = $pdo->lastInsertId();

            // URL取得
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
            $syutalk_url = $data->{'meeting'};

            // 保存処理
            $sql = "insert into telphone values(null, ?, ?, ?, ?)";
            $insert_query = $pdo->prepare($sql);
            $insert_query->execute([$syutalk_url,  $title, $customer_id, $mtag_id]);
            print("完了");
        } catch (PDOException $e) {
            print($e);
        }
    }
}
