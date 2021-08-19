<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Form</title>
    <link rel="stylesheet" href="chethform.css">
</head>

<style>

    input[type=submit]{
    background-color: green;
    color: white;
    padding: 4px;
    cursor: pointer;
    border: none;
    padding: 8px   
    }
    input[type=submit]:hover{
    background-color:rgb(110, 212, 110);
    }

    input[type=Reset]{
    background-color:red;
    color: white;
    padding: 4px;
    cursor: pointer;
    border: none;
    padding: 8px    
    }
    input[type=Reset]:hover{
    background-color:rgb(206, 75, 75);
    }

    input[type=button]{
        background-color:rgb(6, 6, 110);
        color: white;
        padding: 4px;
        cursor: pointer;
        border: none; 
        padding: 8px;   
    }
    input[type=button]:hover{
        background-color: rgb(60, 60, 184);;
    }

</style>

<body>

<?php ?>


    <div class='container'>
        <div class="header" >
         <h3> EMPLOYEE DETAILS </h3>
        </div>
        <form method="post" target="_self" action="chethlist.php">
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" required size="40"><br>
                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" required size="40"><br>
                <label for="contact">Phone Contact:</label><br>
                <input type="text" id="contact" name="contact"  maxlength="11" required placeholder="09062534785" size="40"><br>
                <label for="email">Email Address:</label><br>
                <input type="email" id="email" name="email" placeholder="example@gmail.com" required size="40"><br>
                <label for="Homeaddress">Home Address:</label><br>
                <input type="text" id="homeaddress" name="homeaddress" required size="40"><br>
                <label for="Gender">Gender:</label><br>
                <input type="radio" id="male" name="gender" value="Male" ><label for="Male" size="40">Male</label><br>
                <input type="radio" id="female" name="gender" value="Female" ><label for="female" size="40">Female</label><br>
                <label for="deptname">Department Name:</label><br>
                <select name="department" id="department" required>
                    <option value="Select">Select</option>
                    <option value="Technical Team">Technical Team</option>
                    <option value="Graphics Design">Graphics Team</option>
                    <option value="Media">Media Team</option>
                    <option value="Marketing">Marketing Team</option>
                </select><br><br>
                
                <div class="buttoncontainer">
                    <input type="submit" value="Submit">
                    <input type="Reset" value="Cancel">
                    <a href="welcome.php">
                        <input type="button" value="Back">
                    </a> 
                </div>

         </form> 
        
    </div>

</body>
</html>