<!-- types of error in php

1. compile time error
    ---fetal error :- invalid inputs or its occured due to function call with wrong name or wrong signature.
    ---warning :-code will run inspite of warning and its occured due to lack of resourses. [resourse is not available]
    ---notice :- lack of variable or container under file
    ---Parse or syntax error :- code will run inspite of parse error its occured due to invalid syntax
2. runtime error
    ---exception

-->
  <?php 
    // include "welcome.php";
    // $n=66;
    // $nn=$n+10;
    // echo "<br>";
    // echo $nn;
?> 
<?php
// $balance=10000;
// echo "current balance is : ".$balance;
// $wa=16000;
// try
// {
//     if ($balance<=$wa)
//     {
//         throw new exception("insufficiant balance!!");
//     }
//     else{
//         echo "transiction started!!"."<br";
//         $balance=$balance-$wa;
//         echo "transiction completed!!"."<br";

//     }

// }
// catch(exception $m)
// {
//     echo "<br>transiction not completed because : ".$m;

// }
// finally{
//     echo "<br>remaining balance is : ".$balance;
// }
?>




<!-- printing function
1. echo
2. print
3. print_r
4. var_dump -->




<!-- warning -->
<?php
// echo "application started!!!";
// include"welcome.php";
// print("<br> application ended!!");
?>





<!--notice  -->
<?php
// echo "application started!!<br>";
// $a=55;
// echo $b;


// print("<br>application ended!!<br>");
?>





<!-- parse error -->
<?php
// echo "application started!!<br>";
// $a=55;
// echo $a
// print("<br>application ended!!<br>");
?>





<!-- fetal error -->
<?php
// function addnum($a,$b)
// {
//     echo $a+$b;
// }
// echo"application started!!<br>";
// addnum1(5,7);
// print("<br>application ended!!!<br");
?>

