<?php
include_once "./db.php";
include_once "./query.php";

$task = "'";
$task .= $_POST['content'];
$task .= "'";

$sql = insert('list(`content`)', $task);
$result = mq($sql);


if ($result) {
    echo "1";
}
else{
    echo "0";
}


?>

