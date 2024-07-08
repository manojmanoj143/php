<?php

require '../mongo/vendor/autoload.php'; // Include Composer's autoloader

// MongoDB connection string and database name
$mongoUri = 'mongodb://localhost:27017';
$database = 'myDB';

// Create a MongoDB client
$client = new MongoDB\Client("mongodb://localhost:27017");

// Select a database
$db = $client->$database;

// Select a collection
$collection = $db->users; // Change 'users' to your collection name



$host="localhost";
$user="root";
$pass="";
$db="login";
$conn=new mysqli($host,$user,$pass,$db);
if($conn->connect_error){
    echo "Failed to connect DB".$conn->connect_error;
}



?>