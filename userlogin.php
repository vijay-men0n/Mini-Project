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
    <link rel="stylesheet" href="userloginstyle.css">
</head>
<body>
<div class="container1">
        <form method="post" action="#">
            <h2>Name:<input type="text" name="username" placeholder="Enter your Username"><br>
                Password:<input type="password" name="password" placeholder="Enter your password"><br>
                <input type="submit" name="SUBMIT" value="LOGIN">
            </h2>
        </form>
       
    </div>  

    <?php
    if(isset($_POST['SUBMIT'])){
         $x= $_POST['username'];
         $y= $_POST['password'];

                if( empty($x) || empty($y) ){
                    echo '<script>alert("fill all fields")
                    </script>';
                }else{
                    $sql ="select * from userlogin where username= '$x' and password='$y' limit 1";
                    $result=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($result) == 1){
                        echo '<script>alert("login successfull")
                        </script>';
                        echo "<script>window.location = 'userpage.php';</script>;";
                        exit();
                    }else{
                        echo '<script>alert("login failed incorrect username or password");
                            </script>';
                            exit();
                         }
                }
     }
    ?>
</body>
</html>