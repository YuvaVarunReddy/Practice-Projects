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
    $mydb = 'Products_info';


    $conn = new mysqli($servername, $username, $password, $mydb);

    if ($conn->connect_error) {
        die('connect failed ' . $conn->connect_error);
    }

    $sql = "CREATE TABLE Products_Table(
ID INT  UNSIGNED AUTO_INCREMENT PRIMARY KEY,
Name VARCHAR(255) NULL,
Images VARCHAR(1000) NULL,
MRP_RATE BIGINT NULL,
SALE_PRICE BIGINT NULL
)";

    if ($conn->query($sql) === TRUE) {
        echo 'Created Table Successfully';
    } else {
        echo 'ERROR while creating table';
    }

    $conn->close();
    ?>
</body>

</html>