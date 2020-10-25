<?php

$host = 'localhost';
$user = 'jschoonveld';
$password = 'G634415W';
$dbname = 'acme';

//Set DSN

$dsn = 'mysql:host=' . $host . ';dbname=' . $dbname;


function showLocation($dsn, $user, $password){

//Create a PDO instance

    $pdo = new PDO($dsn, $user, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $user = $_GET['location'] ?? 0;

// Positional Params
    $sql = 'SELECT * FROM users WHERE location = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);
    $location = $stmt->fetchAll();

    foreach ($location as $value){
        echo $value->first_name . '<br>';
    }
}

//function insertIntoDB(){
//    $servername = "localhost";
//    $username = "jschoonveld";
//    $password = "G634415W";
//    $dbname = "acme";
//
//// Create connection
//    $conn = new mysqli($servername, $username, $password, $dbname);
//
//// Check connection
//    if ($conn->connect_error) {
//        die("Connection failed: " . $conn->connect_error);
//    }
//
//// prepare and bind
//
//    $stmt = $conn->prepare("INSERT INTO users (first_name, last_name, email) VALUES (?, ?, ?)");
//    $stmt->bind_param("sss", $firstname, $lastname, $location);
//
//// set parameters and execute
//    $firstName = $_GET['firstname'] ?? null;
//    $lastName = $_GET['lastname'] ?? null;
//    $location = $_GET['location'] ?? null;
//
//    if($firstName != null){
//        $stmt->execute();
//        echo "New records created successfully";
//    }
//
//    $stmt->close();
//    $conn->close();
//}
//

// prepare and bind


//$pdo = new PDO($dsn, $user, $password);
//$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
//
//$firstName = $_GET['firstname'] ?? 0;
//$lastName = $_GET['lastname'] ?? 0;
//$location = $_GET['location'] ?? 0;
//
//$sql = "INSERT INTO users (first_name, lastname, location) VALUES (:firstname,:lastname,:location)";
//$stmt = $pdo->prepare($sql);
//$stmt->execute(['firstname' => $firstName, 'lastname' => $lastName, 'location' => $location]);
//echo 'User added';
