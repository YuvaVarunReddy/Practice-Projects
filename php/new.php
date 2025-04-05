<?php

    $servername = 'localhost';
    $username = 'root';
    $password = 'Varun12345';

    $conn = new mysqli($servername, $username, $password);

    if ($conn->connect_error) {
        die('connect failed' . $conn->connect_error);
    }
    echo "Connect";
    ?>