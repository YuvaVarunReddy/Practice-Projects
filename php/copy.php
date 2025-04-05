<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form class="card container mt-4" style="width: 400px;">

        <header class="text-center ">Login Form:</header>
        <!-- Details Start -->


        <div class="mb-3">
            <label class="form-label">Enter your Mobile Num</label>
            <input type="text" name="Number" class="form-control">

        </div>

        <!-- Details End -->



        <div class="m-3">
            <button type="submit" class="btn btn-primary ">Submit</button>
        </div>


    </form>

    <?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'Varun12345';
    $mydb = 'Login_info';

    $conn = new mysqli($servername, $username, $password, $mydb);

    if ($conn->connect_error) {
        die('connect failed' . $conn->connect_error);
    }

    if (!empty($_REQUEST['Number'])) {
        $mob = $_REQUEST['Number'];


        $sql = "SELECT * FROM GetData_byForm WHERE Mobile='$mob'";
        $result = $conn->query($sql);
        $row =  $result->fetch_assoc();

        // print_r($row);

        if (!empty($row)) {
            $Names = $row['Name'];
            $Mobiles = $row['Mobile'];
            $Emails = $row['Email'];
            $Addresses = $row['Address'];
            $States = $row['State'];
            $Cites = $row['City'];
            $Pincodes = $row['Pincode'];
            $Id = $row['ID'];
        } else {
            $Names = '';
            $Mobiles = '';
            $Emails = '';
            $Addresses = '';
            $States = '';
            $Cites = '';
            $Pincodes = '';
            $Id = '';
        }

    ?>
        <?php
        if (!empty($Id)) {


        ?>
        
            <form class="card container mt-4" action="updatedata.php" method='post' style="width: 400px;">

                <header class="text-center ">Login Form:</header>
                <!-- Details Start -->
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NAME:</label>
                    <input type="text" name='Name' value="<?php echo "$Names" ?>"

                        class="form-control">
                    <input type="hidden" name="Id" value="<?php echo "$Id" ?>" required>
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Mobile:</label>
                    <input type="text" name='Mobile' value="<?php echo " $Mobiles " ?>" class="form-control">

                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Email ID:</label>
                    <input type="email" name='Email' value="<?php echo " $Emails " ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Address:</label>
                    <input type="text" name='Address' value="<?php echo "  $Addresses " ?>" class="form-control">

                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">State:</label>
                    <input type="text" name='State' value="<?php echo "  $States " ?>" class="form-control">
                    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">City:</label>
                    <input type="text" name='City' value="<?php echo " $Cites " ?>" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Pincode:</label>
                    <input type="text" name='Pincode' value="<?php echo " $Pincodes " ?>" class="form-control">
                </div>

                <!-- Details End -->


                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <div class="m-3">
                    <button type="submit" class="btn btn-primary ">Submit</button>
                </div>
            </form>
    <?php
        }
    }
    ?>
</body>

</html>