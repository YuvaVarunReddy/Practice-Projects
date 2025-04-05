<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .main_div {
        width: 100%;
        height: 100%;
    }

    .main_div1 {
        width: 90%;
        /* height: 800px; */
        /* background-color: rgba(158, 148, 148, 0.571); */
        margin: 5%;

    }

    .content {
        /* margin-top: 100px; */
        width: 100%;
        height: 100px;
        display: ruby;

    }

    .content1 {

        /* align-items: start; */
        /* justify-content: space-around; */
        /* display: flex; */
        margin: 0% 1% 0% 1%;
        width: 25%;
        height: 600px;
        border: 2px black solid;
        box-shadow: 0px 0px 10px 0px whitesmoke;
        border-radius: 20px;

    }

    img {
        padding: 15px 10px 15px 32px;
        /* margin-top: 15%;
        margin-left: 20%;
        margin-right: 20%; */
        width: 80%;
        height: 70%;


    }

    p {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: large;
        text-align: center;
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
        die('connect failed' . $conn->connect_error);
    }

    $sql = 'SELECT * FROM Products_Table';
    $result = $conn->query($sql);

    if (mysqli_num_rows($result) > 0) {
    ?>
        <div class="main_div">
            <div class="main_div1">
                <div class="content">

                    <?php

                    foreach ($result as $list) {
                    ?>

                        <div class="content1"><img src="
                        <?php
                        echo $list['Images']
                        ?>
                        ">
                            <p>
                                <?php
                                echo $list['Name'];
                                ?>
                            </p>

                            <p>
                                <?php
                                echo 'MRP RATE:' . $list['MRP_RATE'];
                                ?>
                            </p>
                            <p>
                                <?php
                                echo 'Sale_PRICE:' . $list['SALE_PRICE'];
                                ?>
                            </p>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>

        </div>
    <?php
    } else {
        echo 'error';
    }


    $conn->close();
    ?>



    <!-- <div class="main_div">
        <div class="main_div1">
            <div class="content">
                <div class="content1"><img src="./images/iphone14.webp">
                    <p>Iphone 14 Plus</p>
                </div>
            </div>
        </div>

    </div> -->

</body>

</html>