<?php
  function GetData($query)
  {
      $servername = "localhost";
      $username = "fiets";
      $password = "project";
      $dbname = "fietsproject";

      // Connect to database
      $conn = new mysqli($servername, $username, $password, $dbname);

      // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

      $result = $conn->query($query);
      
      return($result);
    $conn->close();
  }