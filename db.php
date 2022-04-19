<?php 
    header('Content-Type: text/html; charset=utf-8'); // utf-8인코딩

    // localhost = DB 주소, root = DB 계정 아이디, "" = DB 계정 비밀번호, bbs = "DB이름"
    $db = new mysqli("localhost", "root", "", "bbs");
    $db -> set_charset("utf8");

    function mq($sql)
    {
        global $db;
        return $db -> query($sql);
    }

?>