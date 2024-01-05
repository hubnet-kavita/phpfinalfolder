<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>hello kiavita singh</h1>
    <form action="" method="POST">
        USERID : <input type="text" name="uid">
        PASSWORD : <input type="password" name="pas">
        <input type="submit" value="login" name="save">
    </form>
    
</body>
<?php
if(isset($_POST['save']))
{
    $conn=mysqli_connect('localhost','root','abc@123','hubdb') ;
    $u=$_POST['uid'];
    $p=$_POST['pas'];
    $pp=md5($p);                         //false
    $q="select * from student where userid='{$u}'";
    $data=mysqli_query($conn,$q);
    $rec=mysqli_fetch_assoc($data);
    $u3=$rec['userid'];
    $p3=$rec['password'];
    echo "userid : ".$u3;
    echo"<br>password : ".$p3;
    if($u==$u3 and $pp==$p3)
    {
        echo"<br>Login!!";
        header("Location: http:\\phpfinalfolder\student.php");
    }
    else{
        echo "<br>Login fali!!!";
    }
    
    
}

?>
</html>
