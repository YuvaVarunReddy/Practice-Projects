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
        die('Connect failed' . $conn->connect_error);
    }

    $sql = 'CREATE DATABASE Products_info';

    if ($conn->query($sql) === TRUE) {
        echo 'Created Table Successfully';
    } else {
        echo 'Error while creating table';
    }

    $conn->close();
    ?>
</body>

</html>