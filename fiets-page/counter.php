<?php
 $file = "data.txt"; // Giving a name to our text file which will store numbers of counts
 if(!file_exists($file)){// Checking wether file data.txt exists or not
  $fo = fopen($file, "w"); //If data.txt file dosen't exists then to create a new
  fwrite($fo, "0"); // Start to count from zero
  fclose($fo); // closing file
 }
 @$click = $_POST["count"]; //Getting button value with POST method
 if(isset($click)){ // Checking is set of not, it's a technique to get click
  c1(); //calling our function c1()
 }
 function c1(){
  global $file; //making our file varail which contains file name global
  $clicks = file($file); //reading our data.txt file
  $clicks["0"]++; // incrementing 1, for example if value is 1 then to add 1
  $fo = fopen($file, "w"); //opening our file
  fwrite($fo, $clicks["0"]);//writing our incremented value
  fclose($fo); // closing file
  echo $clicks["0"]; // printing total numbers of clicks
 }
 @$click = $_POST["count2"]; //Getting button value with POST method
 if(isset($click)){ // Checking is set of not, it's a technique to get click
  c2(); //calling our function c2() 
 }
 function c2(){
  global $file; //making our file varail which contains file name global
  $clicks = file($file); //reading our data.txt file
  $clicks["0"]--; // incrementing 1, for example if value is 1 then to add 1
  $fo = fopen($file, "w"); //opening our file
  fwrite($fo, $clicks["0"]);//writing our incremented value
  fclose($fo); // closing file
  echo $clicks["0"]; // printing total numbers of clicks
 }
?>