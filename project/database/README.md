# connect.php について

connect.php は、データベースに接続する関数を提供します。

# 使用方法

`$pdo`を使うファイルに書き込んでください。

```php
    use Connection;

    $pdo = Connection\conn();
    $query = $pdo->prepare("insert into ........");
    $query->execute();
```