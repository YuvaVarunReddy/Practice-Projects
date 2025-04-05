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

    <form class="card container mt-4 bg-dark text-white " style="width: 400px;">

        <header class="text-center  bg-info mt-4 fs-3 mb-3 text-white rounded-pill">Login Form:</header>
        <!-- Details Start -->


        <div class="mb-3">
            <label class="form-label">Enter your Mobile Num</label>
            <input type="text" name="Numbers" class="form-control">

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

    if (!empty($_REQUEST['Numbers'])) {
        $mo = $_REQUEST['Numbers'];

        $sql = " DELETE  FROM GetData_byForm WHERE Mobile='$mo'";
        $result = $conn->query($sql);

        print_r($result); 
        
    } else {
        echo 'Error';
    }
    ?>
</body>

</html>