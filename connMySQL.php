<?php

$db_host = 'localhost';
$db_userName = 'admin01';
$db_password = '123456'; //請輸入你自己的密碼
$db_name = 'Project';

$db_link = mysqli_connect($db_host, $db_userName, $db_password, $db_name);
if (!$db_link) {
    die('資料庫連結失敗！');
} else {
   echo '資料庫連結成功';
}

mysqli_query($db_link, "SET NAMES 'utf8'");  //設定資料庫編碼 中文

?>