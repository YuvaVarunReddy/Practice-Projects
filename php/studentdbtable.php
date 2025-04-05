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
    $mydb = 'Studentdb';


    $conn = new mysqli($servername, $username, $password, $mydb);

    if ($conn->connect_error) {
        die('connect error' . $conn->connect_error);
    }

    $sql = 'CREATE TABLE Student_info(
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAME VARCHAR(255) NULL,
    AGE INT NULL,
    BORN VARCHAR(255) NULL,
    QUALIFICATION VARCHAR(255)  NULL,
    ADDRESS VARCHAR(255) NULL,
    CITY VARCHAR(255) NULL,
    STATE VARCHAR(255) NULL
)';

    if ($conn->query($sql) === TRUE) {
        echo 'Create table successfully';
    } else {
        echo 'Error creating table:' . $conn->connect_error;
    }

    $conn->close();



    ?>
</body>

</html>