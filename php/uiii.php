<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body class="container">


    <form class="card container  mt-4 bg-dark text-white" action="getdatabyform.php" method='post' style="width: 400px;">

        <header class="text-center bg-info mt-4 fs-3 mb-3 text-white rounded-pill ">Login Form:</header>
        <!-- Details Start -->

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">NAME:</label>
            <input type="text" name='Name' class="form-control" placeholder="Enter your Name">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Mobile:</label>
            <input type="text" name='Mobile' class="form-control" placeholder="Mobile Number">

            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Email ID:</label>
            <input type="email" name='Email' class="form-control" placeholder="Email_ID">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Address:</label>
            <input type="text" name='Address' class="form-control" placeholder="Address">

        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">State:</label>
            <input type="text" name='State' class="form-control" placeholder="State">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">City:</label>
            <input type="text" name='City' class="form-control" placeholder="City">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Pincode:</label>
            <input type="text" name='Pincode' class="form-control" placeholder="Pincode">
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

</body>

</html>