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
        die('connect failed' . $conn->connect_error);
    }

    $sql = "UPDATE Student_info SET NAME ='MAA' WHERE ID=4";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
    ?>
</body>

</html>