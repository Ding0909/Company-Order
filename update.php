

<?php
 include "connMySQL.php";

 $Emp_id = $_GET['Emp_id'];
 
 //因為 $Emp_id 本身是 varchar，所以要用加 ''！！
 $sql_getDataQuery = "SELECT * FROM Employee WHERE Emp_id = '$Emp_id'";

 $result = mysqli_query($db_link, $sql_getDataQuery);

 $row_result = mysqli_fetch_assoc($result);
 $Emp_id = $row_result['Emp_id'];
 $Emp_pass = $row_result['Emp_pass'];
 $Emp_name = $row_result['Emp_name'];
 $Emp_mail = $row_result['Emp_mail'];
?>


<html>

<head>
    <meta charset="UTF-8" />
    <title>修改員工資料</title>
</head>
    <body>

            <form action="" method="post" name="formAdd" id="formAdd">
     
                請輸入id：<input type="text" name="Emp_id" id="Emp_id" value=" <?php echo $Emp_id ?>"><br/>
                請輸入password：<input type="text" name="Emp_pass" id="Emp_pass" value="<?php echo $Emp_pass ?>"><br/>
                清輸入姓名：<input type="text" name="Emp_name" id="Emp_id" value="<?php echo $Emp_name ?>"><br/> 
                請輸入Email：<input type="text" name="Emp_mail" id="Emp_mail" value="<?php echo $Emp_mail ?>"><br/>
                <input type="hidden" name="action" value="update">
                <input type="submit" name="button" value="修改資料">
            </form>
    </body>
</html>

<?php
 if (isset($_POST["action"])) 
 {
     $newid = $_POST['Emp_id'];
     $newpass = $_POST['Emp_pass'];
     $newname = $_POST['Emp_name'];
     $newemail = $_POST['Emp_mail'];

     $sql_query = "UPDATE Employee SET Emp_id = '$newid', Emp_pass = '$newpass', Emp_name = '$newname', EMp_mail = '$newemail'  WHERE Emp_id = '$Emp_id' ";

     mysqli_query($db_link,$sql_query);
     $db_link->close();

     header('Location: index.php');
 }
 ?>