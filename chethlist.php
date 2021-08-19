<!DOCTYPE html>
<html lang="en">
<head>
    <title>Crud Demo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    
    <style>
    body{
    background-image: url("cheth.jpg");
    background-repeat: no-repeat;
    background-size: cover;
    
}

</style>   
</head>
<body>
<div class="container">
    <div class="row">
        <h3 style="font-family:Sans-serif; color:Red; text-shadow: 2px 2px 5px black;">CHETH STAFF</h3>
    </div>
 
    <div class="row">
        <p>
            <a href="chethform.php" class="btn btn-success">ADD NEW EMPLOYEE</a>
        </p>
        <table class="table table-bordered table-stripped">
        <thead>
            <tr>
                <td>Id</td>
                <td>First_Name</td>
                <td>Last_Name</td>
                <td>Phone_Contact</td>
                <td>Email_Address</td>
                <td>Home_Address</td>
                <td> Gender</td>
                <td>Department_Name</td>
                <td>Action</td>
            </tr>
        </thead>
           
        <tbody>
        <?php
        include("dbconnection.php");
        $sql_query = "SELECT * FROM employee_details ORDER BY id ";
        $query = mysqli_query ($con, $sql_query);
        while ($row = mysqli_fetch_assoc($query)){
            echo '<tr>';
                echo '<td>'.$row['id'].'</td>';
                echo '<td>'.$row['First_Name'].'</td>';
                echo '<td>'.$row['Last_Name'].'</td>';
                echo '<td>'.$row['Phone_Contact'].'</td>';
                echo '<td>'.$row['Email_Address'].'</td>';
                echo '<td>'.$row['Home_Address'].'</td>';
                echo '<td>'.$row['Gender'].'</td>';
                echo '<td>'.$row['Department_Name'].'</td>';
                echo '<td>
                                <a href="readpage.php?id='.$row['id'].'" class="btn btn-default">Read</a>
                                <a href="update.php?id='.$row['id'].'" class="btn btn-success">Update</a>
                                <a href="deletepage.php?id='.$row['id'].'" class="btn btn-danger">Delete</a>
                        </td>';
                echo '</tr>';
            }
            // mysqli_close($con);
            ?>
            </tbody>       
        </table>
    </div>
</div>
 
</body>
</html>