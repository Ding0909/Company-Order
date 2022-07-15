<html>

<head>
    <meta charset="UTF-8" />
    <title>新增員工資料</title>
</head>
    <body>
        <form action="" method="post" name="formAdd" id="formAdd">
                <center>
                請輸入id：<input type="text" name="Emp_id" id="Emp_id"><br/>
                請輸入密碼：<input type="password" name="Emp_pass" id="Emp_pass"><br/>
                請輸入姓名：<input type="text" name="Emp_name" id="Emp_name">
                請輸入Email：<input type="text" name="Emp_mail" id="Emp_mail"><br/>
                    <input type="hidden" name="action" value="add">
                    <input type="submit" name="button" value="新增資料">
                    <input type="reset" name="button2" value="重新填寫">
                </center>
        </form>
    </body>
</html>

<?php
// 檢查請求來源是否來自上面創建的 form
if (isset($_POST["action"])) {

    //引入檔，負責連結資料庫
    include("connMySQL.php");

    //取得請求過來的資料
    $id = $_POST["Emp_id"];
    $pass = $_POST['Emp_pass'];
    $name = $_POST['Emp_name'];
    $email= $_POST['Emp_mail'];

    $sql_query = "INSERT INTO employee (Emp_id, Emp_pass, Emp_name, Emp_mail) VALUES ('$id', '$pass','$name','$email')";

    mysqli_query($db_link,$sql_query);

    //導航回首頁
    header("Location: index.php");
}
?> 

