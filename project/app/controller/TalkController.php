<?php
namespace Controller;

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
        // $MIROTALK_URL = "http://localhost:3000/api/v1/meeting";
        // $MIROTALK_URL = "https://mirotalk.herokuapp.com/api/v1/meeting";
        $MIROTALK_URL = "https://syutalk.lolipop.io/api/v1/meeting";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $MIROTALK_URL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);

        $headers = [
            'authorization:' . $API_KEY,
            'Content-Type: application/json'
        ];

        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        $response = curl_exec($ch);
        $httpcode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        $data = json_decode($response);
        header("Location: {$data->{'meeting'}}");
    }
}
