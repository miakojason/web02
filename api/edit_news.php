<?php
include_once "./db.php";
if (isset($_POST['id'])) {
    foreach ($_POST['id'] as $id) {
        if (isset($_POST['del']) && in_array($id, $_POST['del'])) {
            $News->del($id);
        } else {
            $news = $News->find($id);           //$id存在post['sh']陣列裡，$news['sh']=1，沒有就0
            $news['sh'] = (isset($_POST['sh']) && in_array($id, $_POST['sh'])) ? 1 : 0;
            $News->save($news);
        }
    }
}
to("../back.php?do=news");
