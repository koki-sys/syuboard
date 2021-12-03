<?php

    require './database/connect.php';
    require 'loginkey.php';
    use Connection;

        $pass = $_POST['password'];

        $c_t = openssl_encrypt($pass, 'AES-128-ECB', $key);
        $pdo = Connection\conn();

            
            $sql = $pdo->prepare('insert into customer values(\'\',?,?,?,\'\')');
            $sql->execute([
                $_POST['nickname'],
                $_POST['email'],
                $c_t
            ]);

            
            $count = $sql->rowCount();
            if($count == 1){
                header('Location:Home.php');
            }
            else{?>
			<!DOCTYPE html>
            <html lang="ja">
                <head>
                <meta charset="UTF-8">
                <link rel="stylesheet" href="./css/style.css">
                <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

                <title>エラー</title>
                </head>
                <body>
                 <div class="container text-center">
                    	    <h2 style="margin-top: 20%;">エラーが発生しました。入力内容を確認してください。</h2>
                            <a href="newlogin.php"id="btn1" class="bt mt-3 text-white" style="background-color: #f08080;border-color:#f08080;">前のページに戻る</a>
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
                 </div>
            	</body>
            	</html>
            <?php }
?>