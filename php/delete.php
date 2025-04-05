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
    $mydb = 'Customers';

    $conn = new mysqli($servername, $username, $password, $mydb);

    if ($conn->connect_error) {
        die('connect failed' . $conn->connect_error);
    }

    $sql = 'DELETE FROM Users_info WHERE CustomerID=9';


    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();


    ?>
</body>

</html>