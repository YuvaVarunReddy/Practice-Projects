<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'Varun12345';


    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die('connect Failed' . $conn->connect_error);
    }

    $sql = 'CREATE DATABASE Studentdb';

    if ($conn->query($sql) === TRUE) {
        echo 'created database successfully';
    } else {
        echo 'Error creating database' . $conn->connect_error;
    }


    ?>
</body>

</html>