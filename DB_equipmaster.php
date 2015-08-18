<?php
    #$host     = "localhost";
    #$user     = "root";
    ##$password = "38317liz";
    #$dbname   = "equipmaster";
    
    # Make the connection
    #$conn = mysqli_connect($host, $user, $password,$dbname);
    # Check connection    
    #if(!$conn){
    #    die("Connection failed: ". mysqli_connect_error());
    #}   


// Credentials
$dbhost = "localhost";
$dbname = "equipmaster";
$dbuser = "root";
$dbpass = "38317liz";

//	Connection
global $tutorial_db;

$tutorial_db = new mysqli();
$tutorial_db->connect($dbhost, $dbuser, $dbpass, $dbname);
$tutorial_db->set_charset("utf8");

//	Check Connection
if ($tutorial_db->connect_errno) {
    printf("Connect failed: %s\n", $tutorial_db->connect_error);
    exit();
}
?>