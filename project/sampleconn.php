<?php
require './database/connect.php';

use Connection;

$pdo = Connection\conn();

foreach ($pdo->query('select * from customer') as $row) {
    echo '<p>';
    echo $row['customerid'];
    echo '</p>';
}
