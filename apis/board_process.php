<?php
include_once "./db.php";
include_once "./query.php";

function process($method){
    if($method === 'get'){
        $value = $_GET['content'];
    }
    else if($method === 'post'){
        $value = $_POST['content'];
    }
    $query = insert('list', $value);
    mq($query);
};

$mode = $_SERVER['REQUEST_METHOD'];

if(isset($_POST['content'])){
    $mode = 'POST';
}
else if(isset($_GET['content'])){
    $mode = "GET";
}

switch ($mode) {
    case 'GET':
        process('get');
        break;
    case 'POST':
        process('post');
        break;
    case 'DELETE':
        break;
    case 'PUT':
        break;
    default:
        echo 'error';
        break;
}
echo $mode;

?>