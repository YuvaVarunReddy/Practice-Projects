<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .Main {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .form {

        display: grid;

        width: 50%;
        height: 100vh;
        background-color: whitesmoke;

    }

    .div {
        /* display: flex; */
        justify-content: center;
        align-items: center;
        flex-direction: column;
        /* grid-template-rows: 2fr; */
    }

    input {
        width: 200px;
        height: 40px;
    }

    .div1 {
        margin-top: -500px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
</style>

<body>

    <div class="Main">
        <form class="form" action="inputform.php" method="post">
            <div class="div">
                <!-- <label>ID:</label>
                <input placeholder="ID"> -->
                <label>Name:</label>
                <input placeholder="Name" name="Name" type="text"> <br>
                <label>Email:</label>
                <input placeholder="Email" name="Email" type="text"> <br>
                <label>Phone</label>
                <input placeholder="Phone" name="Phone" type="tel"> <br>
            </div>

            <div class="div1"><button type="submit">Submit</button></div>

        </form>
    </div>


</body>

</html>