<link href = "index.css?ver=2" rel = "stylesheet" />
<link href = "./pages/Board/board.css?ver=1" rel = "stylesheet" />

<?php include_once "./base/base_header.php"; ?>

<div class = "frame">
    <div class = "title">To Do List</div>
    <div class = "input">
        <form id = "list">
            <input id = "text" name = "content" type = "textArea" placeholder = "to do list" /> 
        </form>
        <div id = "addBtn">추가</div>
    </div>
    <?php include_once "./pages/Board/board.php"; ?>
</div>

<script src = "https://kit.fontawesome.com/6478f529f2.js" crossorigin = "anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src = "./apis/ajax.js"></script>
<script src = "./pages/Board/board.js"></script>
<script src = "./index.js"></script>

<?php include_once "./base/base_footer.php"; ?>