<?php
    include("functions.php");

    $result = GetData("INSERT INTO vragenlijst (vraag_een, vraag_twee) VALUES ('". $_POST["woonplaats"] ."', '". $_POST["stad"] ."')");

    header("location: index.php");
    exit;