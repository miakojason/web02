<?php include_once "./db.php";
$news = $News->find($_GET['id']);
echo nl2br($news['news']);
// nl2br自動新增段行的函式
