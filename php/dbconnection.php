<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "Varun12345";


    $conn = new mysqli($servername, $username, $password);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    // echo "Connected successfully";


    $Companyinfo = "CREATE DATABASE Office_info";
    if ($conn->query($Companyinfo) === TRUE) {
        echo "Database Created Successfully";
    } else {
        echo "Error Creating database:" . $conn->error;
    }

    $conn->close();



    ?>


</body>

</html>