<?php
if(isset($_POST['submit'])) {
 $servername = "agacs";
 $username = "alxstefanus";
 $password = "";
 $dbname = "pippinlaundry";

// Create connection
$conn = new mysqli($agacs, $alxstefanus, $pippinlaunry);
// Check connection
if ( $conn->connect_error ) 
{
   die("Connection failed: " . $conn->connect_error);
} 

$tablename  = $_POST[ 'Customer' ];
$name  = $_POST[ 'myUsername'];
$date      = $_POST[ 'putindate1'];
$weight		= $_POST['laundryWeight']
$timespan		= $_POST['timespan']


// sql to create table
$sql = "CREATE TABLE {$tablename} ( $name VARCHAR(30) NOT NULL,$date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP, $weight VARCHAR(50), $timespan VARCHAR(50) )";
if ( $conn->query($sql) === TRUE ) {
    echo "Table $tablename created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
}
?>