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
    $dbname = 'Orderinfo';

    $conn = new mysqli($servername, $username, $password, $dbname);

    // echo $conn;

    if ($conn->connect_error) {
        die('connect failed:' . $conn->connect_error);
    }

    $sql = 'CREATE TABLE Users_info(
        ID INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Firstname VARCHAR(255) NOT NULL,
        Lastname VARCHAR(255) NOT NULL,
        Email VARCHAR(50) 
        )';

    if ($conn->query($sql) === TRUE) {
        echo "Table Users_info created succcessfully";
    } else {
        echo "Error creating table:" . $conn->error;
    }

    $conn->close();
    ?>

</body>

</html>