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
        die('connect failed' . $conn->connect_error);
    }

    $sql = 'CREATE DATABASE Mobile_DB';

    if ($conn->query($sql) === TRUE) {
        echo 'Created Database Successfully';
    } else {
        echo 'Error While creating database';
    }

    $conn->close();
    ?>

</body>

</html>