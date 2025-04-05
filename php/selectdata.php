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

    $sql = 'SELECT ID,NAME,AGE,BORN,QUALIFICATION,ADDRESS,CITY,STATE FROM Student_info';
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {

        foreach ($result as $list) {
            echo $list["ID"] . "." . $list['NAME'] . " " . $list['AGE'] . " " . $list['BORN'] . " " . $list['QUALIFICATION'] . " " . $list['ADDRESS'] . " " . $list['CITY'] . " " . $list['STATE'] . "<br>";
        }
    } else {
        echo "0 results";
    }

    ?>

</body>

</html>