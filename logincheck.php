+<?php
$nickname = $_POST["nickname"];
$password = $_POST["password"];

$dsn = '';
$user = '';
$password = '';

    try {
        $pdo = new PDO($dsn, $user, $password);
        $sql = $pdo -> prepare("select *,count(*) as cnt from user where name = ?");
        $sql-> execute([$nickname]);

        $j = true;
        foreach($sql as $row){
            if($row["cnt"] == 0){
                $j = false;
                
            }else{
                $db_pass = $row["password"];
                if(password_verify($password,$db_pass)){
                    session_start();
                    $_SESSION[''][''] = $row[''];
                    header('Location: Home.php');
                    exit;
                }else{
                    $j = false;
                }

            }
        }
    }catch (PDOException $e) {
        echo '接続に失敗しました: ' . $e->getMessage();
    }			
?>
<?php 
    if($j):
    else:
?>
<script>
    location.href = "Home.php";
    exit;
</script>
<?php endif; ?>