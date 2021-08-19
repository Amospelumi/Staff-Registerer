
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
body{
    background-image: url("cheth.jpg");
    background-repeat: no-repeat;
    background-size: cover;
}
.container{
    margin-top: 100px;
    margin-left: 70px;
    margin-right: 300px;
}
</style>
<body>

<?php


include('updatebackend.php');

?>

<div class="container">
    <div class="row" style="margin-left: 200px;">
        <h3>Add new Person</h3>
    </div>
 
    <form action="update.php?id=<?php echo $id;?>" method="POST" class="form-horizontal">
        <div class="form-group <?php echo !empty($firstnameError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="fname" style="margin-left:100px;">First Name</label><br>
            <div class="col-sm-10">
                <input name="fname" class="form-control" type="text" placeholder="Name" value="<?php echo !empty($Firstname) ?$Firstname : ''; ?>"style="margin-left:190px;">
                <?php
                if(!empty($firstnameError)){
                    ?>
                    <span class="help-inline"><?php echo $firstnameError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="form-group <?php echo !empty($lastnameError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="lname">Last Name</label><br>
            <div class="col-sm-10">
                <input name="lname" class="form-control" type="text" placeholder="Name" value="<?php echo !empty($lastname) ? $lastname : ''; ?>">
                <?php
                if(!empty($lastnameError)){
                    ?>
                    <span class="help-inline"><?php echo $lastnameError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="form-group <?php echo !empty($phonecontactError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="contact">Phone Contact</label><br>
            <div class="col-sm-10">
                <input name="contact" class="form-control" type="text" placeholder="Name" value="<?php echo !empty($Phonecontact) ? $Phonecontact : ''; ?>">
                <?php
                if(!empty($phonecontactError)){
                    ?>
                    <span class="help-inline"><?php echo $phonecontactError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="form-group <?php echo !empty($emailaddressError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="email">Email Address</label><br>
            <div class="col-sm-10">
                <input name="email" class="form-control" type="text" placeholder="Name" value="<?php echo !empty($Emailaddress) ? $Emailaddress : ''; ?>">
                <?php
                if(!empty($emailaddressError)){
                    ?>
                    <span class="help-inline"><?php echo $emailaddressError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>
 
        <div class="form-group <?php echo !empty($homeaddressError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="homeaddress">Home Address</label><br>
            <div class="col-sm-10">
                <input name="homeaddress" class="form-control" type="text" placeholder="Email" value="<?php echo !empty($Homeaddress) ? $Homeaddress : ''; ?>">
                <?php
                if(!empty($homeaddressError)){
                    ?>
                    <span class="help-inline"><?php echo $homeaddressError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="form-group <?php echo !empty($genderError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="gender">Gender</label><br>
            <div class="col-sm-10">
                <input name="gender" class="form-control" type="text" placeholder="Mobile" value="<?php echo !empty($Gender) ? $Gender : ''; ?>">
                <?php
                if(!empty($genderError)){
                    ?>
                    <span class="help-inline"><?php echo $genderError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>

        <div class="form-group <?php echo !empty($departmentnameError)? 'error': ''; ?>">
            <label class="control-label col-sm-2" for="departmentname">Department Name</label><br>
            <div class="col-sm-10">
                <input name="department" class="form-control" type="text" placeholder="Address" value="<?php echo !empty($Departmentname) ? $Departmentname: ''; ?>">
                <?php
                if(!empty($departmentnameError)){
                    ?>
                    <span class="help-inline"><?php echo $departmentnameError; ?></span>
                    <?php
                }
                ?>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">Update</button>
                <a class="btn" class="btn btn-info" href="chethlist.php">Back</a>
            </div>
        </div>
 
    </form>
</div>
</body>
</html>