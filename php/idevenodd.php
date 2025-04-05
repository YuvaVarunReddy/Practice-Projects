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
        die('connect failed' . $conn->connect_error);
    }

    $sql = 'SELECT * FROM Products_Table';
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {

        foreach ($result as $list) {
            if ($list['ID'] % 2 === 0) {
                echo $list['ID'] . '<br>';
            } else {
                echo $list['ID'] . '(Odd)<br>';
            }
        }
    } else {
        echo 'Error';
    }


    $conn->close();

    ?>
</body>

</html>