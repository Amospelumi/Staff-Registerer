<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index page</title>
    <link rel="stylesheet" href="index.css">
  
</head>
<style>
    h4{
    margin-left: 30px;
    }
    input[type=button]{
        background-color:rgb(6, 6, 110);
        color: white;
        padding: 4px;
        cursor: pointer;
        border: none; 
        padding: 8px 8px;
        border-radius : 8px; 
        width: 6em;
        margin-left: 150px  
    }
    input[type=button]:hover{
        background-color: rgb(60, 60, 184);;
    }
</style>
<body>
    <?php
    include("dbconnection.php");
    ?>

<!-- <img src="img/chethlogo.png"> -->

<div class="container">
    <h1> Thank You for Submitting 😉 </h1>
    <h4> Your Name has been added to our Database 👍 </h4>
    <div class="buttoncontainer">
        <a href="chethform.php"><input type="button" value="Back"></a> 
    </div>
</div> 
</body>
</html>

