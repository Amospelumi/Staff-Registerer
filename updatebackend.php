<?php

include('dbconnection.php');

$id = null;

if(!empty($_GET['id'])){
    $id = $_REQUEST['id'];
}

if ( null == $id ){
    header('Location: chethlist.php');
}



$sql_query = 'SELECT * FROM employee_details WHERE id ='.$id;
$data = mysqli_query($con, $sql_query);
$row = mysqli_fetch_assoc($data);

$firstnameError = $lastnameError = $phonecontactError = $emailaddressError = $homeaddressError = $genderError = $departmentError = null;
// $Firstname = $lastname = $Phonecontact = $Emailaddress = $Homeaddress = $Gender = $Deptname = null;  
$Firstname = $row['First_Name'];
$lastname = $row['Last_Name'];
$Phonecontact = $row['Phone_Contact'];
$Emailaddress = $row['Email_Address'];
$Homeaddress = $row['Home_Address'];
$Gender = $row['Gender'];
$Departmentname = $row['Department_Name'];

//Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    //validate name
    if(empty($_POST['fname'])){
        $firstnameError = "Please enter your First Name.";
    }else{
        $Firstname= trim($_POST['fname']);
    }

    //validate name
    if(empty($_POST['lname'])){
        $lastnameError = "Please enter your Last Name.";
    }else{
        $lastname = trim($_POST['lname']);
    }

    //validate name
    if(empty($_POST['contact'])){
        $phonecontactError = "Please enter your Phone Contact.";
    }else{
        $Phonecontact = trim($_POST['contact']);
    }

    //validate name
    if(empty($_POST['email'])){
        $emailaddressError = "Please enter Your Email Address.";
    }else{
        $Emailaddress = trim($_POST['email']);
    }

    //validate name
    if(empty($_POST['homeaddress'])){
        $homeaddressError = "Please enter your Home Address.";
    }else{
        $Homeaddress = trim($_POST['homeaddress']);
    }

    //validate name
    if(empty($_POST['gender'])){
        $genderError = "Please enter your Gender.";
    }else{
        $Gender = trim($_POST['gender']);
    }

    //validate name
    if(empty($_POST['department'])){
        $departmentError = "Please enter your Department Name.";
    }else{
        $Departmentname = trim($_POST['department']);
    }

    //checking input errors before inserting in database
    if( empty($firstnameError) && empty($lastnameError) && empty($phonecontactError) && empty($emailaddressError) && empty($homeaddressError) && empty($genderError) && empty($departmentError) ){
        //Prepare an insert statement
        $sql = "UPDATE employee_details set First_Name='".$Firstname."', Last_Name='".$lastname."', Phone_Contact='".$Phonecontact."', Email_Address='".$Emailaddress."', Home_Address='".$Homeaddress."', Gender='".$Gender."', Department_Name='".$Departmentname."' WHERE id='".$id."' ";
        $query = mysqli_query($con, $sql);
 
        if($query){
            header("Location: chethlist.php");
        }
 
    }
}


?>