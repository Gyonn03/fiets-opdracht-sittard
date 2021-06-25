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
    </head>
    <body>
    <?php
    include("functions.php");
    ?>
    <form method="post">
        <input type="submit" name="SubmitFilterFietsen" value="Filter fietsen" />
        <input type="submit" name="SubmitFilterVragen" value="Filter vragen" />
    </form>

    <?php
    if (isset($_POST["SubmitFilterFietsen"])) {
        ?>
        <form method="post">
            <br />
            <input type="datetime-local" name="Firstdate" /><br /><br />
            <input type="datetime-local" name="Seconddate" /><br /><br />
            <input type="submit" name="SubmitFietsenFilter" />
        </form>
        <?php
    }

    if (isset($_POST["SubmitFilterVragen"])) {
        ?>
        <form method="post">
            <br />
            <input type="datetime-local" name="Firstdate" /><br /><br />
            <input type="datetime-local" name="Seconddate" /><br /><br />
            <input type="submit" name="SubmitVragenFilter" />
        </form>
        <?php
    }

    if (isset($_POST["SubmitFietsenFilter"])) {
        $eerstedatum = $_POST["Firstdate"];
        $tweededatum = $_POST["Seconddate"];
        $result = GetData("SELECT Geteldplus, Geteldmin, DateTime FROM tellen WHERE DateTime BETWEEN '" . $eerstedatum . "' AND '" . $tweededatum . "';");
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Erbij</th><th>Eraf</th><th>Datum</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<form method='post'>";
                echo "<tr>";
                echo "<td>" . $row["Geteldplus"] . "</td>";
                echo "<td>" . $row["Geteldmin"] . "</td>";
                echo "<td>" . $row["DateTime"] . "</td>";
                echo "</tr>";
                echo "</form>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }

    if (isset($_POST["SubmitVragenFilter"])) {
        $eerstedatum = $_POST["Firstdate"];
        $tweededatum = $_POST["Seconddate"];
        $result = GetData("SELECT vraag_een, vraag_twee, datum FROM vragenlijst WHERE datum BETWEEN '" . $eerstedatum . "' AND '" . $tweededatum . "';");
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>Waar woon je?</th><th>Waarom ben je vandaag in de stad?</th><th>Datum</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<form method='post'>";
                echo "<tr>";
                echo "<td>" . $row["vraag_een"] . "</td>";
                echo "<td>" . $row["vraag_twee"] . "</td>";
                echo "<td>" . $row["datum"] . "</td>";
                echo "</tr>";
                echo "</form>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
    }
    ?>
    <a href="index.php">Terug</a>
    </body>
</html>