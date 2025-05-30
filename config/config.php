<?php
//host
define("HOSTNAME", "localhost");

//DBNAME
define("DBNAME", "PezaHome");

//USER
define("USER", "root");

//Pass
define("PASS", "");

// Use PDO instead of PPD
$conn = new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME.";", USER, PASS);

if($conn) {
    echo "db connected";
} else {
    echo "error";
}