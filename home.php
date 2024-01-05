<!-- encryption :- 
    1. md5()  [id and password encryption - max 32 bit encryption in hexa and 16 bit in binary]
    2. sha1() [id and password encyption - max 40 bit encryption in hexa and 20 bit in binary]
    3. convert_uuencode() [encrypt message]
    4. bin2hex() [text to hexa decimal conversion]
    5. hex2bin() [hexa decimal to text conversion] 

include & include one [include one php page into another][hosting time]
requere & requere one [debugging time]
-->
<?php
// $m="ram is a good boy";
// $em=bin2hex($m);
// echo "Encrypted Text : ".$em;
// $mm=hex2bin($em);
// echo "<br>Decrypted Text : ".$mm;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include_once "hd.php";
    ?>
    <center><h1>!!!!This is home page!!!!</h1></center>
    <?php
    require_once "ft.php";
    ?>
    
</body>
</html>