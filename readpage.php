<?php
 
require('dbconnection.php');
 
$id = null;
 
if(!empty($_GET['id'])){
    $id = $_REQUEST['id'];
}
 
if(null == $id){
    header("Location: chethlist.php");
}else{
    $sql = "SELECT * FROM employee_details WHERE id=".$id;
    $query = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($query);
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
    #data {
        border: 1px solid;
        padding: 10px;
        box-shadow: 5px 10px #888888;
        width: 500px;
    }
   
body{
    background-image: url("cheth.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}

</style>
<body>
<div class="container" style="margin-top:20px;">
    <h3>Read Data</h3>
    <a href="chethlist.php" class="btn btn-info pull-right">Back</a>
    <div id="data">
        <p>ID : <strong><?php echo $row['id']; ?></strong></p>
        <p>First Name : <strong><?php echo $row['First_Name']; ?></strong></p>
        <p>Last Name : <strong><?php echo $row['Last_Name']; ?></strong></p>
        <p>Phone Contact: <strong><?php echo $row['Phone_Contact']; ?></strong></p>
        <p>Email Address : <strong><?php echo $row['Email_Address']; ?></strong></p>
        <p>Home Address : <strong><?php echo $row['Home_Address']; ?></strong></p>
        <p>Gender: <strong><?php echo $row['Gender']; ?></strong></p>
        <p>Department: <strong><?php echo $row['Department_Name']; ?></strong></p>
    </div>
</div>
</body>
</html>