<?php
$servername = 'localhost';
$username = 'root';
$password = 'Varun12345';
$mydb = 'Login_info';

$conn = new mysqli($servername, $username, $password, $mydb);

if ($conn->connect_error) {
    die('Connect failed' . $conn->connect_error);
}

echo $_SERVER['REQUEST_METHOD'];

$Name = $_REQUEST['Name'];
$Address = $_REQUEST['Address'];
$Qualification = $_REQUEST['Qualification'];

if (!empty($Name) && !empty($Address) && !empty($Qualification)) {
    $sql = "INSERT INTO User_Bio(Name,Qualification,Address)
   VALUES('$Name','$Address','$Qualification')";
    $result = $conn->query($sql);

    
    echo 'Submitted Successfully';
} else {
    echo 'Enter your Details';
}
