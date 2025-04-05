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
        die('Connect failed ' . $conn->connect_error);
    }

    $sql = "INSERT INTO Mobiles_info(ID,MobileName,MobileCompany,Price_Of_Mobile)
   VALUES (NULL,'Iphone 16 ProMax','Apple',160000),
   (NULL,'Iphone 16 Pro','Apple',130000),
   (NULL,'Iphone 16 Plus','Apple',100000),
   (NULL,'Iphone 16','Apple',80000),
   (NULL,'Iphone 15 ProMax','Apple',140000),
   (NULL,'Iphone 15 Pro','Apple',110000),
   (NULL,'Iphone 15 Plus','Apple',90000),
   (NULL,'Iphone 15','Apple',70000),
   (NULL,'Iphone 14 ProMax','Apple',120000),
   (NULL,'Iphone 14 Pro','Apple',90000),
   (NULL,'Iphone 14 Plus','Apple',70000),
   (NULL,'Iphone 14','Apple',55000)";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo 'Error ';
    }


    $conn->close();
    ?>
</body>

</html>