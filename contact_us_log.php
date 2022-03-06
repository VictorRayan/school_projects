<?php
echo "<h1>Client or User Log Data from contactus.html</h1>";
$txtName = $_POST['txtName'];
$inpBorn = $_POST['inpBorn'];
$txtEmail = $_POST['txtEmail'];
$txtTel = $_POST['txtTel'];
$txtObs = $_POST['txtObs'];
$ckNewslatter = $_POST['ckNewslatter'];

echo "<br>Name: $txtName";
echo "<br>Email: $txtEmail";
echo "<br>Tel: $txtTel";
echo "<br>Birthday: $inpBorn";

/*Verify if the checkbox is set or non-default, by definition or non-default, when the option is not variable,
 set in reverse of the variables, and yes there is a mark of this option, which is not variable.*/
if (isset($ckNewslatter)){
    echo "<br>Newslatter confirmation: yes";
}else{
    echo "<br>Newslatter confirmation: not";
}



?>