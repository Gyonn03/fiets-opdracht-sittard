<?php
    include("functions.php");
    $result = GetData("INSERT INTO vragenlijst (antwoord_een, antwoord_twee) VALUES ('". $_POST["woonplaats"] ."', '". $_POST["stad"] ."')");
    header("location: index.php");
    exit;
?>