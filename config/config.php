<?php


 //host
 define("HOSTNAME", "localhost");

 //DBNAME
 define("DBNAME", "PezaHome");


 //USER
 define("USER", "root");

 //Pass
 define("PASS", "");

 $conn = new PPD("mysql:host=".HOSTNAME.";dbname=".DBNAME.";", USER, PASS);

 if($conn == true) {
    echo "db connected"
 } else {
    echo "error"
 }