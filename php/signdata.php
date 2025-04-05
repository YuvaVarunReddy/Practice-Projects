<?php
$servername = 'localhost';
$username = 'root';
$password = 'Varun12345';
$mydb = 'Login_form';

$conn = new mysqli($servername, $username, $password, $mydb);

if ($conn->connect_error) {
    die('connect failed' . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $NUM = $_REQUEST['Phone'];
    $Email = $_REQUEST['EmailID'];
    $Passwords = $_REQUEST['Password'];

    if (!empty($NUM) && !empty($Email) && !empty($Passwords)) {

        $sql = "INSERT INTO Sign_data(Phone,Email,Passwords)
        VALUES('$NUM','$Email','$Passwords')";
        $result = $conn->query($sql);

        echo 'Submitted Successfully';
    } else {
        echo 'Error';
    }
} else {
    echo 'NOT POST METHOD';
} 

$conn->close();
?>