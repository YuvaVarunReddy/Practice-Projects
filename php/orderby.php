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


    $conn  = new mysqli($servername, $username, $password, $mydb);

    if ($conn->connect_error) {
        die('Connected failed' . $conn->connect_error);
    }

    $sql = 'SELECT ID,NAME,AGE,BORN,QUALIFICATION,ADDRESS,CITY,STATE FROM Student_info ORDER BY NAME DESC';
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        foreach ($result as $list) {
            echo $list['NAME'];
        }
    } else {
        echo "Error creating table: " . $conn->error;
    }

    $conn->close();


    ?>

</body>

</html>