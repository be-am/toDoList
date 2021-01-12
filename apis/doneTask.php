<?php
include_once "./db.php";
include_once "./query.php";

$id = $_POST['id'];
$sql = update('list', 'donecheck= "1"', 'id', $id);
$result = mq($sql);

if ($result) {
    echo "1";
}
else{
    echo "0";
}
?>