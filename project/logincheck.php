<?php
require './database/connect.php';

use Connection;

session_start();
unset($_SESSION['error']);
$pass = $_POST['password'];
// $hash = password_hash($pass, PASSWORD_DEFAULT);
$pdo = Connection\conn();

$nickname = $_POST["nickname"];

try {
    $sql = $pdo->prepare("select *,count(*) as cnt from customer where name = ?");
    $sql->execute([$nickname]);

    $j = true;
    foreach ($sql as $row) {
        //ログイン失敗時
        if ($row['cnt'] == 0) {
            $j = false;
            $_SESSION['error'] = 'error1';
            $_SESSION['q'] = '1';
            header('Location: login.php');
        } else {
            //ログイン成功時
            $db_pass = $row['password'];
            if (password_verify($hash, $db_pass)) {
                $_SESSION['user']['name'] = $row['name'];
                header('Location: Home.php');
                exit;
            } else {
                $_SESSION['error'] = 'error1';
                $_SESSION['q'] = $db_pass;
                $_SESSION['b'] = $hash;
                header('Location: login.php');
            }
        }
    }
} catch (PDOException $e) {
    $_SESSION['error'] = 'error2';
    header('Location: login.php');
}
?>
<?php
if ($j) :
else :
?>
    <script>
        location.href = "login.php";
        exit;
    </script>
<?php endif; ?>