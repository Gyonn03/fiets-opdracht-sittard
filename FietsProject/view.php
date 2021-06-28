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
    <!-- Klein menu voor alle knoppen -->
    <form method="post">
        <input type="submit" name="SubmitFilterFietsen" value="Filter fietsen" />
        <input type="submit" name="SubmitFilterVragen" value="Filter vragen" />
        <input type="submit" name="SubmitHoeveelFietsen" value="Hoeveel fietsen zjn er" />
    </form>

    <?php
    // Form voor de fietsen filter
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

    // Form voor de vragen filter
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

    // Deze laat zien hoeveel van elk in de database zit
    if (isset($_POST["SubmitHoeveelFietsen"])) {
        $result = GetData('SELECT COUNT(id), geteldplus FROM tellen GROUP BY geteldplus;');
        if ($result->num_rows > 0) {
            echo "<table>";
            echo "<tr><th>id</th><th>tellen</th></tr>";
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["COUNT(id)"] . " </td>";
                echo "<td>" . $row["geteldplus"] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
        } else {
            echo "0 results";
        }
        // Reken uit hoeveel fietsen er in totaal nu zijn
        $result1 = GetData("SELECT COUNT(id) AS plus FROM tellen WHERE geteldplus = 1;");
        $result2 = GetData("SELECT COUNT(id) AS min FROM tellen WHERE geteldplus = 0;");
        $row1 = $result1->fetch_array();
        $row2 = $result2->fetch_array();
        $totaal = $row1["plus"] - $row2["min"];
        echo "Er zijn nu " . $totaal . " fietsen in de parkeerplaats.";
    }

    // Deze filtert alle fietsen
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

    // Deze filtert alle vragen
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
    <br />
    <a href="index.php">Terug</a>
    </body>
</html>