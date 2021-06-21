<?php
    session_start();

    // Check if the user is logged in, if not then redirect him to login page
    if  (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
        header("location: includes/login.php");
        exit;
    }
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="styles.css" type="text/css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
</head>
<body>
    <?php
    include("functions.php");
    ?>
    <div class="counter">
        <h1>Fiets Teller</h1>
        <form method="post" class="form">
            <input type="submit" name="plusSubmit" value="Fiets erbij" />
            <br />
            <br />
            <input type="submit" name="minSubmit" value="Fiets eraf" />
        </form>
        <br />
        <br />
        <a href="includes/logout.php" class="btn btn-danger ml-3">Uitloggen</a>
        <br />
        <br />
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