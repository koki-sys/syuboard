<?php
namespace Controller;

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
}
