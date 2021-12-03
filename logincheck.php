+<?php
require './database/connect.php';
require 'loginkey.php';
use Connection;
session_start();
unset($_SESSION['error']);
        $pass = $_POST['password'];
        $pdo = Connection\conn();
        $c_t = openssl_encrypt($pass, 'AES-128-ECB', $key);
        $nickname = $_POST["nickname"];



    try {
        $sql = $pdo -> prepare("select *,count(*) as cnt from customer where name = ?");
        $sql-> execute([$nickname]);

        $j = true;
        foreach($sql as $row){
            //ログイン失敗時
            if($row['cnt'] == 0){
                $j = false;
                $_SESSION['error'] = 'error1';
                $_SESSION['q'] = '1';
                header('Location: login.php');
            }else{
                //ログイン成功時
                //$db_pass  = openssl_decrypt($row['password'], 'AES-128-ECB', $key);
                $db_pass  = $row['password'];
                if($c_t == $db_pass){
                    $_SESSION['user']['name'] = $row['name'];
                    $_SESSION['user']['email'] = $row['email'];
                    $_SESSION['user']['password'] = $row['password'];
                    header('Location: Home.php');
                    exit;
                }else{
                $_SESSION['error'] = 'error1';
                $_SESSION['q'] = $db_pass;
                $_SESSION['b'] = $c_t;
                header('Location: login.php');
                }

            }
        }
    }catch (PDOException $e) {
        $_SESSION['error'] = 'error2';
        header('Location: login.php');
    }			
?>
<?php 
    if($j):
    else:
?>
<script>
    location.href = "login.php";
    exit;
</script>
<?php endif; ?>