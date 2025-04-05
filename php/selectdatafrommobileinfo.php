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
        die('connect failed' . $conn->connect_error);
    }

    $sql = "SELECT * FROM Mobiles_info";
    $result = $conn->query($sql);


    if ($result->num_rows > 0) {
        foreach ($result as $list) {
            echo $list['ID'] . '.' . $list['MobileName'] . '<br><br>';
        }
    } else {
        echo 'error';
    }

    $conn->close();


    ?>
</body>

</html>