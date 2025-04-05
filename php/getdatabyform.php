<?php

$servername = 'localhost';
$username = 'root';
$password = 'Varun12345';
$mydb = 'Login_info';

$conn = new mysqli($servername, $username, $password, $mydb);

if ($conn->connect_error) {
    die('connect failed' . $conn->connect_error);
}

echo $_SERVER['REQUEST_METHOD'];


$Names = $_REQUEST['Name'];
$Mobiles = $_REQUEST['Mobile'];
$Emails = $_REQUEST['Email'];
$Addresses = $_REQUEST['Address'];
$States = $_REQUEST['State'];
$Cites = $_REQUEST['City'];
$Pincodes = $_REQUEST['Pincode'];


if (!empty($Names) && !empty($Mobiles) && !empty($Addresses) && !empty($States) && !empty($Cites) && !empty($Pincodes)) {
    $sql = "INSERT INTO GetData_byForm(ID,Name,Mobile,Email,Address,State,City,Pincode)
VALUES(Null,'$Names','$Mobiles','$Emails','$Addresses','$States','$Cites','$Pincodes')";
    $result = $conn->query($sql);

    echo 'Submitted Successfully';
} else {
    echo 'Error';
}
