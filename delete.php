<?php
// 載入db.php來連結資料庫
require_once 'connMySQL.php';
?>

<h3>sql刪除結果</h3>
<?php

$userId = $_GET['Emp_id'];
// sql語法存在變數中
$sql = "DELETE FROM Employee WHERE Emp_id = '$userId'";
// 用mysqli_query方法執行(sql語法)將結果存在變數中
$result = mysqli_query($db_link,$sql);

// 如果有更新到資料庫數量，
if (mysqli_affected_rows($db_link)>0) {
echo "資料已刪除";
}
elseif(mysqli_affected_rows($db_link)==0) {
    echo "無資料刪除";
}
else {
    echo "{$sql} 語法執行失敗，錯誤訊息: " . mysqli_error($db_link);
}
 mysqli_close($db_link); 

 header("Location: index.php");
 ?>

