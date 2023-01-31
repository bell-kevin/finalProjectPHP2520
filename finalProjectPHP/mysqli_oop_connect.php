<?php # 
// This file contains the database access information.
// This file also establishes a connection to MySQL,
// selects the database, and sets the encoding.
// The MySQL interactions use OOP!

// Set the database access information as constants:
define('DB_USER', 'root');
define('DB_PASSWORD', 'password');
define('DB_HOST', 'localhost');
define('DB_NAME', 'ecommerce');

// Make the connection:
$con = new MySQLi(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

// Verify the connection:
if ($con->connect_error) {
    echo $con->connect_error;
    unset($con);
} else { // Establish the encoding.
    $con->set_charset('utf8');
}