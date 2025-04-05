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
    $mydb = 'Products_info';

    $conn = new mysqli($servername, $username, $password, $mydb);

    if ($conn->connect_error) {
        die('Connect failed' . $conn->connect_error);
    }

    $sql = "INSERT INTO Products_Table(ID,Name,Images,MRP_RATE,SALE_PRICE)
    VALUES(NULL,'Iphone 16 ProMax','https://idestiny.in/wp-content/uploads/2024/10/iPhone_16_Pro_White_Titanium_PDP_Image_Position_1__en-IN.jpg',150000,130000),
    (NULL,'Iphone 15 ProMax','https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQw7NRRaQE7-GB5_Tqly4p6xJR_da958cRRFoeJBDX8Mn8YbYoJB_EHTw6xsvVvpdaCG6dLUHPawzlvnVlbKRj7Eda4dY58qkqKQSu9dbRvsrIJiqHDikfSrQ',120000,100000),
    (NULL,'Iphone 14 ProMax','https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcTZrh5aASUE1WN5iXux4TsqwhKRgqdNFxgFTd7_ibiIQ19gTS9UBRKoYDRKcd1rcehnIpzRHTCGSBUseOsRATxB9qosI1rmrZmvzRzXr_WF59u0QamRtqFVBFs',100000,80000),
    (NULL,'Iphone 13 ProMax','https://encrypted-tbn3.gstatic.com/shopping?q=tbn:ANd9GcSSvMV2QuKvRPxMWJylwBUzVQed0nT6vXOByaZVqaSBMUDCr9pCNmkYWC9wJyVby1zKuVrM2lIizag3acV4FLKolL__a5WN',80000,72000),
    (NULL,'Iphone 16 Pro','https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcQiKqwpnTqwU0ywwlGodG5g5M7hdZqduLHFtkX5ASiEWls5MuCI2Yq8FHwo5P3dB9UnwIdnKXZS9_UnG64s-UOfHt8lvki4b5lz1xLWviF9A8tzLtpu1SK-',130000,100000),
    (NULL,'Iphone 15 Pro','https://encrypted-tbn2.gstatic.com/shopping?q=tbn:ANd9GcQViek77buk9trTgsgdRwalPA3E1MynBePTjzLUn9FZmxQdboIvKe815DSZbpszYJ0nmsBaJsb73R82HIUnSdlPWk1SohXnhBHU3KYmuRWptRtB4Y7hNEbf',110000,90000),
    (NULL,'Iphone 14 Pro','https://encrypted-tbn0.gstatic.com/shopping?q=tbn:ANd9GcR1XYlc3wwGLe5jxVo2PnLLB8EVlhSrNbfaqM362nn4AH4f_VoSYccLmK5jvc3SDayY0uX453jZ1AOBSyoGbV2SV24tl0nrxRA60IhLZ03tGhMi0mfs58T_4eYw',80000,71000),
    (NULL,'Iphone 13 Pro','https://encrypted-tbn1.gstatic.com/shopping?q=tbn:ANd9GcRNu9TaeAfHBHzTQcJ0qheJ7g-b6jqtlmB7n2o-ABe9YKz24qmQYGo0TwE3XNU7HQNVhhrPxL4wbBNINUn5Dgsz-1FAkm0ghzvebdyudFjqNZD15SIOXq0ukQ',60000,52000),
    (NULL,'Iphone 16 Plus','images/iphone16plus.webp',90000,80000),
    (NULL,'Iphone 15 Plus','images/iphone15plus.webp',70000,62000),
    (NULL,'Iphone 14 Plus','images/iphone14plus.webp',50000,45000),
    (NULL,'Iphone 16','images/iphone16.webp',79000,70000),
    (NULL,'Iphone 15','images/iphone15.webp',70000,62000),
    (NULL,'Iphone 14','images/iphone14.webp',60900,50900),
    (NULL,'Iphone 13','images/iphone13.webp',50000,45000),
    (NULL,'Samsung 24Ultra','images/samsung24ultra.webp',150000,120000),
    (NULL,'Samsung 23Ultra','images/samsung23ultra.webp',130000,110000),
    (NULL,'Samsung 22Ultra','images/samsung22ultra.webp',100000,89000),
    (NULL,'MacBook M4 Pro','images/macbookPro.webp',200000,190000),
    (NULL,'MacBook M4','images/macbookm4.webp',180000,160000),
    (NULL,'MacBook M3 Pro','images/macbookm3pro.webp',170000,150000),
    (NULL,'MacBook M3','images/macbookm3.webp',140000,120000)
    ";

    if ($conn->query($sql)) {
        echo 'Inserted Values Successfully';
    } else {
        echo 'Error';
    }

    $conn->close();
    ?>

</body>

</html>