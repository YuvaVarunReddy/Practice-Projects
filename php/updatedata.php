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

$Id = $_REQUEST['Id'];
$Names = $_REQUEST['Name'];
$Mobiles = $_REQUEST['Mobile'];
$Emails = $_REQUEST['Email'];
$Addresses = $_REQUEST['Address'];
$States = $_REQUEST['State'];
$Cites = $_REQUEST['City'];
$Pincodes = $_REQUEST['Pincode'];


if (!empty($Names) && !empty($Mobiles) && !empty($Addresses) && !empty($States) && !empty($Cites) && !empty($Pincodes)) {
    $sql = "UPDATE  GetData_byForm 
    SET Name = '$Names', Mobile ='$Mobiles' WHERE ID = $Id";
    $result = $conn->query($sql);

    echo 'Submitted Successfully';
} else {
    echo 'Error';
}
