<?php

echo "<h1>Client or User Log Data from contactus.html</h1>";
$txtName = $_POST['txtName'];
$inpBorn = $_POST['inpBorn'];
$txtEmail = $_POST['txtEmail'];
$txtTel = $_POST['txtTel'];
$txtObs = $_POST['txtObs'];
$ckNewslatter = $_POST['cbChannel'];
$optCar = $_POST['optCar'];

echo "<br>Name: $txtName";
echo "<br>Email: $txtEmail";
echo "<br>Tel: $txtTel";
echo "<br>Birthday: $inpBorn";

switch($optCar){

    case 'audi':
        echo "<br>Selected Car: Audi<br><img src='style/audi.jpg' style='max-width:40vw; max-height:30vh;'>";
        break;
    case 'fiat':
        echo "<br>Selected Car: Fiat<br><img src='style/fiat.jpg' style='max-width:40vw; max-height:30vh;'>";
        break;
    case 'tesla':
        echo "<br>Selected Car: Tesla<br><img src='style/tesla_model.jpg' style='max-width:40vw; max-height:30vh;'>";
        break;
}
echo "<br>";


/*Verify if the checkbox is set or non-default, by definition or non-default, when the option is not variable,
 set in reverse of the variables, and yes there is a mark of this option, which is not variable.*/
if (isset($ckNewslatter)){
    echo "<br>Newslatter confirmation: yes";
}else{
    echo "<br>Newslatter confirmation: not";
}

$channels = "";
foreach($_POST['cbChannel'] as $values){
    $channels.="\n".$values;
}

echo " ---> channels: $channels";



?>
