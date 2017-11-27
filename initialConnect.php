<?php
/**
 * Created by PhpStorm.
 * User: joshcollins
 * Date: 11/26/17
 * Time: 5:41 PM
 */

$servername = "PRIVATE";
$username = "PRIVATE";
$password = "PRIVATE"; 

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>


