<?php 
    include 'dbconnection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="#">
        Enter Name :<input type="text" name="username" placeholder="Enter your Username" > <br>
        Enter College id : <input type="text" name="cid" placeholder="Enter your College id" > <br>
        Enter Department : <input type="text" name="dept" placeholder="Enter your Department" > <br>
        Enter Password:<input type="password" name="password" placeholder="Enter your password"><br>
        <input type="submit" name="submit" value="submit">
</form>
<?php
    if(isset($_POST['submit'])){
        $id = '';
        $username = $_POST['username'];
        $cid = $_POST['cid'];
        $dept = $_POST['dept'];
        $password = $_POST['password'];

        $sql = "INSERT INTO userlogin values('$id','$username', '$password','$cid', '$dept'  )";
        $result = mysqli_query($conn, $sql);

        if($result == true){
            echo "<script>alert('success')</script>";
        }else{
            echo "<script>alert('not success')</script>";
        }

    }
    ?>
</body>
</html>