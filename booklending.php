<?php 
    include "dbconnection.php";

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
    <div class="Blend">
        Enter Book Details<br>
        Book ID:<input type="text" name="id" placeholder="Enter Book ID"><br>
        Book Name:<input type="text" name="bookname" placeholder="Enter Book Name"><br>
        User Name:<input type="text" name="username" placeholder="Enter bookname">
        Issued Date:<input type="text" name ="issuedate" placeholder="Enter Issued Date"><br>
        Returned Date:<input type="text" name="returndate" placeholder="Enter Return Date"><br>
        <input type="submit" name="submit" value="submit">

<?php
    if(isset($_POST['submit'])){
        $id= $_POST['id'];
        $bookname = $_POST['bookname'];
        $username = $_POST['username'];
        $issuedate = $_POST['issuedate'];
        $returndate = $_POST['returndate'];

        $sql = "INSERT INTO lend values('$id','$bookname', '$username','$issuedate', '$returndate'  )";
        $result = mysqli_query($conn, $sql);
        
        if($result == true){
            echo "<script>alert('success')</script>";
        }else{
            echo "<script>alert('not success')</script>";
        }

    }
?>       
    </div>
</body>
</html>