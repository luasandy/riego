<?php
$instruction = $_GET["instruction"];
$time = $_GET["time"];

echo "<br> Instruction: ".$instruction;
echo "<br> Time: ".$time; 

$checksum = intval($instruction) ^ intval($time);
echo "<br> Checksum: ".$checksum;

#---Convertir a Binario -------------------------------
echo "<br><br> Convertir a Binario";
$instrucionForm = str_pad(decbin($instruction), 2, "0", STR_PAD_LEFT);
echo "<br> inst: ".$instrucionForm;

$timeForm = str_pad(decbin($time), 8, "0", STR_PAD_LEFT);
echo "<br> time: ".$timeForm;

$checkForm = str_pad(decbin($checksum), 8, "0", STR_PAD_LEFT);
echo "<br> checksum: ".$checkForm;
#----Create Trama----------------------------------------------
echo "<br><br> Crear Trama";
$trama = $instrucionForm.$timeForm.$checkForm;
echo "<br> Trama: ".$trama;

#----Send Trama----------------------------------------------
header("Location: aplication.php?trama=$trama");

?>
