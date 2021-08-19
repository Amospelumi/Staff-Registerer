<?php

include('dbconnection.php');

$id = null;

if(!empty($_GET['id'])){
    $id = $_REQUEST['id'];
}

if ( null == $id ){
    header('Location: login.php');
}



$sql_query = 'SELECT * FROM login WHERE id ='.$id;
$data = mysqli_query($con, $sql_query);
$row = mysqli_fetch_assoc($data);

$new_password_err = $confirm_password_err = null;
// $Firstname = $lastname = $Phonecontact = $Emailaddress = $Homeaddress = $Gender = $Deptname = null;  
$new_password = $row['First_Name'];
$confirm_password = $row['Last_Name'];


//Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //validate name
    if(empty($_POST['new_password'])){
        $new_password_err = "Please enter a New Password.";
    }else{
        $new_password= trim($_POST['new_password']);
    }

    //validate name
    if(empty($_POST['confrim_password'])){
        $lastnameError = "Please Confrim.";
    }else{
        $lastname = trim($_POST['lname']);
    }

    
    //checking input errors before inserting in database
    if( empty($new_password_err) && empty($confirm_password_err) ){
        //Prepare an insert statement
        $sql = "UPDATE login set password='".$new_password."'";
        $query = mysqli_query($con, $sql);
 
        if($query){
            header("Location: login.php");
        }
 
    }
}


?>

 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ 
            font: 14px sans-serif;
            background-image: url("cheth.jpg");
            background-repeat: no-repeat;
            background-size: cover;}
        .wrapper{ 
            width: 350px; 
            padding: 20px; 
            margin-top: 100px; 
            margin-left: 90px;
        }
        .card{
            background-color: rgba(211, 211, 211, 0.4);
            margin-top:150px;
            margin-left:400px;
            margin-right:360px;
            border-radius:15px;
        }
    </style>
</head>
<body>
<div class="card">
    <div class="wrapper">
        <h2>Reset Password</h2>
        <p>Please fill out this form to reset your password.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 
            <div class="form-group <?php echo (!empty($new_password_err)) ? 'has-error' : ''; ?>">
                <label>New Password</label>
                <input type="password" name="new_password" class="form-control" value="<?php echo $new_password; ?>">
                <span class="help-block"><?php echo $new_password_err; ?></span>
            </div>
            <div class="form-group <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>">
                <label>Confirm Password</label>
                <input type="password" name="confirm_password" class="form-control">
                <span class="help-block"><?php echo $confirm_password_err; ?></span>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
                <a class="btn btn-link" href="login.php">Cancel</a>
            </div>
        </form>
    </div>    
</div>
</body>
</html>