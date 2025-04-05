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
    $mydb = 'Mobile_DB';

    $conn = new mysqli($servername, $username, $password, $mydb);

    if ($conn->connect_error) {
        die('connect failed ' . $conn->connect_error);
    }

    $sql = 'CREATE TABLE Mobiles_info(
    ID INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    MobileName  VARCHAR(255) NULL,
    MobileCompany VARCHAR(255) NULL,
    Price_Of_Mobile BIGINT NULL
    )';

    if ($conn->query($sql) === TRUE) {
        echo 'Created Table Successfully';
    } else {
        echo 'error while creating table' . $conn->error;
    }

    $conn->close();

    ?>
</body>

</html>