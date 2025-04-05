
    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'Varun12345';
    $mydb = 'Login_form';


    $conn = new mysqli($servername, $username, $password, $mydb);

    if ($conn->connect_error) {
        die('Connect Failed' . $conn->connect_error);
    }

    echo $_SERVER['REQUEST_METHOD'];

    $Names = $_REQUEST['Name'];
    $Emails = $_REQUEST['Email'];
    $Phones = $_REQUEST['Phone'];


    if (!empty($Names) && !empty($Emails) && !empty($Phones)) {

        $sql = "INSERT INTO Login_info2(Name,Email,Phone)
        VALUES('$Names','$Emails','$Phones')";
        $result = $conn->query($sql);
       
        echo 'Submitted Successfully';
    } else {
        echo 'Error';
    }






    ?>