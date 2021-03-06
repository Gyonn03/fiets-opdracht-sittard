<?php
    // Gebruiker: Fiets
    // Wachtwoord: Parkeerplaats

    //session_start();
    // Check if the user is logged in, if not then redirect him to login page
   // if  (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
   //    header("location: includes/login.php");
   //     exit;
    //}
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="images/icon.ico" type="image/gif" sizes="16x16">
    <title>Teller</title> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <link rel="stylesheet" href="assets/styles.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
    <?php
    include("functions.php");
    ?>
    <div class="counter">
        <h1>Fiets Teller</h1>
        <div class=buttonindex>
        <form method="post" class="form">
        <input type="submit" name="plusSubmit" class="myButton" value="Fiets erbij"></input>
        <br/>
		<input type="submit" name="minSubmit" class="myButton" value="Fiets eraf"></input>
        </form>
        <br />
        <br />
        <a href="includes/logout.php" class="btn btn-danger ml-3">Uitloggen</a>
        <br />
        <br />
        <a href="view.php" class="btn btn-info ml-3">Filter</a>
            <br />
            <br />
        </div>
    </div>
    <?php
    if(isset($_POST["plusSubmit"])) {
        $result = GetData("INSERT INTO tellen (geteldplus, geteldmin)
        VALUES ('1', '0');");
    }
    if(isset($_POST["minSubmit"])) {
        $result = GetData("INSERT INTO tellen (geteldmin, geteldplus)
        VALUES ('1', '0');");
    }
    ?>
</body>
</html>