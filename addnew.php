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
    <div class="newB">
        <form method="post" action="#">
        
        Enter Book Name :<input type="text" name="bname" placeholder="Enter bookname"><br>
        Enter Author's Name:<input type="text" name="author" placeholder="Enter bookname"><br>
        Enter Review:<input type="text" name="review" placeholder="Enter bookname"><br>
        <input type="submit" name="submit" value="submit">

<?php
    if(isset($_POST['submit'])){
        $id = '';
        $bname = $_POST['bname'];
        $author = $_POST['author'];
        $review = $_POST['review'];

        $sql = "INSERT INTO lbook values('$id','$bname', '$author','$review')";
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