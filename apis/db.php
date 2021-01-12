<?php
$con = mysqli_connect('localhost', 'bin', '1234', 'todolist');

function mq($query) {
    global $con;
    return mysqli_query($con, $query);
}

?>