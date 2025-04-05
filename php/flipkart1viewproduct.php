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
        die('Connect Failed' . $conn->connect_error);
    }
    if (!empty($_REQUEST['id'])) {
        $id = $_REQUEST['id'];

        $sql = "SELECT * FROM Products_Table WHERE ID = $id";
        $result = $conn->query($sql);
        $data = $result->fetch_assoc();

        // print_r($data);
    } else {
    }

    ?>

    <div class="viewpage">
        <div class="div">
            <div>
                <img src="
                <?php
                echo $data['Images'];
                ?> ">
            </div>
            <div>
                <form action="cartpage.php" method="GET">
                    <input type="hidden" name="prodId" value="
                    <?php
                echo $data['ID'];
                ?> 
                    ">
                    <input type="hidden" name="prodName" value="<?php echo $data['Name']; ?>">
                    <input type="number" name="quan" value="
                    ">

                    <button >ADD TO CART</button>
                </form>
            </div>
        </div>
        <div class="div">
            <div>
                <?php
                echo $data['MRP_RATE'];
                ?>
            </div>
        </div>

</body>

</html>