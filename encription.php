<!-- ENCRYPTION:-
    WHAT :- encryption :- process to convert the plain/readable text into cipher text/unread text.
    WHY :- to secure the contain from unautherised access.
    HOW :- perticular format of data[MD5 or SHA] & massage[convert_uuencode] 
ENCRYPTION IN PHP USING MD5:-
<?php
// $a="hubnet";
//echo $a."<br>";
//$ea=md5($a,True);
//echo $ea."<br>";     //hubnet will print in binary format of 16 digits
//$eea=md5($a,false)  ;
//echo $eea."<br>";      //hubnet will print in hexa format of 32 digits.
?>




ENCRYPTION IN PHP USING SHA:-
 $a="hubnet";
 echo $a;
 $ea=sha1($a,True);
 echo $ea;     //hubnet will print in binary format of 20 digits
 $eea=sha1($a,false)  
 echo $eea;  //hubnet will print in hexa format of 40 digits.


-->

<?php
echo "encryption using sh1 algorithem <br>";
$m="hubnet";
echo"normal text : ".$m."<br>";
$em=sh1($m,True);
echo "encrypted text in binary using sha1 :".$em."<br>";
$eem=sha1($m,False);
echo "encrypted form in hexade using sha1 : ".$eem."<br>";
echo"<br>";
echo"encrypt message using uuencode...... <br>";
$mm="hello hubnet";
echo "plain text massage : ".$mm."<br>";
$emm=convert_uudecode($mm);
echo "encrypted text massage : ".$emm."<br>";

echo"<br>";
echo"decrypted massage using uudecode...<br>";
$dmm=convert_uudecode($emm);
echo "decrypted text message : $dmm.<br>"

?>





