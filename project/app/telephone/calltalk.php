<?php
require '../controller/TalkController.php';

use Controller\TalkController;

$talk = new TalkController();
?>

<h1>別のサイトに移動します...</h1>
<?php
$talk->meeting();
?>