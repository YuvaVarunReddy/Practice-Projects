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
        die('Connected failed' . $conn->connect_error);
    }

    $sql = "INSERT INTO Student_info(ID,NAME,AGE,BORN,QUALIFICATION,ADDRESS,CITY,STATE)
          VALUES  (NULL,'Yuva',20,'Sep 02 2005','Diploma Completed','Thummalla Penta','Kurnool','Andhra Pradesh'),
          (NULL,'Indu',20,'Nov 18 2005','Btech 1st Year','Yeragudi','Kurnool','Andhra Pradesh'),
          (NULL,'Mahi',10,'July 09 2015','3rd Class','Thummalla Penta','Kurnool','Andhra Pradesh'),    
          (NULL,'Puneeth',5,'Jan 05 2020','LKG','Thummalla Penta','Kurnool','Andhra Pradesh')";


    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
    ?>

</body>

</html>