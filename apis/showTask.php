<?php
include_once "db.php";
include_once "query.php";

$sql = selectDo('list');
$result = mq($sql);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_array($result)){
?>

<li>
    <span class = "text"><?php echo $row['content'];?></span>
    <i data-id = "<?php echo $row['id'];?>" id = "doneBtn" class = "fas fa-times" ></i>
</li>

<?php
    }
} else {
    echo "없습니다";
}
?>
