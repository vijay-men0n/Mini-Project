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
    <link rel="stylesheet" href="list.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
    <div class="table">
<div class="d-flex">  
    <table class="table table-striped table-bordered table-hover " >
      <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Author</th>
      <th scope="col">Review</th>
      </tr>
    </div>
    <?php
        $sql = "SELECT * FROM lbook order by id ASC";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_num_rows($result);

        if($row > 0){
            while($res = mysqli_fetch_array($result)):?>
                     <tr>
                     <td><?php echo $res['id']; ?></td>
                     <td><?php echo $res['bname']; ?></td>
                     <td><?php echo $res['author']; ?></td>
                     <td><?php echo $res['review']; ?></td>
                     </tr>
                 <?php endwhile; ?>
                 <?php }else{
                     echo "<tr><td colspan='9'>no records</td></tr>"; }?>
                   </table>
                
                 </div>
                 </div>       
</body>
</html>

