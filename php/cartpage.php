<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .viewpage {
        width: 90%;
        height: 700px;
        margin: 5%;
        display: flex;
        background-color: whitesmoke;

    }

    .div {
        width: 50%;
        height: 100vh;
    }

    img {
        width: 100%;
        height: 600px;
    }
</style>

<body>
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'Varun12345';
    $mydb = 'Products_info';

    $conn = new mysqli($servername, $username, $password, $mydb);

    if ($conn->connect_error) {
        die('Connect failed' . $conn->connect_error);
    }

    if (!empty($_REQUEST['prodId'])) {
        $ID = $_REQUEST['prodId'];
        $Name = $_REQUEST['prodName'];
        $Quan = $_REQUEST['quan'];
        echo $Name;

        $sql = "INSERT INTO Cart_Page(ID,Product_ID,Product_Name,Quantity)
        VALUES(NULL,$ID,'$Name','$Quan')";
        $Result = $conn->query($sql);
    }
    ?>





</body>

</html>