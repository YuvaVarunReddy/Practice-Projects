<?php
$servername = 'localhost';
$username = 'root';
$password = 'Varun12345';
$mydb = 'Login_info';

$conn = new mysqli($servername, $username, $password, $mydb);

if ($conn->connect_error) {
    die('connect failed' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $Names = $_REQUEST['Name'];
    $Email = $_REQUEST['EmailID'];
    $Num = $_REQUEST['Phones'];

    if (!empty($Names) && !empty($Email) && !empty($Num)) {
        $sql = "INSERT INTO UX(Name,Email,Phone)
         VALUES('$Names','$Email','$Num')";
        $result = $conn->query($sql);

        echo 'Submitted Successfully';
    }
} else {
    echo 'Error';
}

