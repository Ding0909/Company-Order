<?php
    include("connMySQL.php");
    $sql_query = "SELECT * FROM employee";
    $result = mysqli_query($db_link,$sql_query);
    $total_records = mysqli_num_rows($result);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>員工資料的 CRUD 練習</title>
</head>
<body>
    <h1 align = "center">員工資料總表</h1>
    <p align= "center">目前資料筆數：<?php echo $total_records;?>,<a href="create.php">新增資料</a></p>

        <table border="1" align = "center">
            <tr>
                <th>ID</th>
                <th>密碼</th>
                <th>姓名</th>
                <th>Email</th>
                <th>編輯</th>
            </tr>
                <?php

                    while($row_result = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$row_result['Emp_id']."</td>";
                        echo "<td>".$row_result['Emp_pass']."</td>";
                        echo "<td>".$row_result['Emp_name']."</td>";
                        echo "<td>".$row_result['Emp_mail']."</td>";
                        echo "<td><a href='update.php?Emp_id=".$row_result['Emp_id']."'>修改</a> ";
                        echo "<a href='delete.php?Emp_id=".$row_result['Emp_id']."'>刪除</a></td>";
                        echo "</tr>";
                        }
                ?>
        </table>
</body>
</html>