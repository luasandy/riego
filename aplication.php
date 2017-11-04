<?php
$trama = $_GET["trama"];
echo "<br> Trama: ".$trama;

#--------Separar------------------------------------------------
echo "<br><br> Separar Trama";
$tramaInstruccion = substr($trama,0,2);
echo "<br> Trama Instruccion: ".$tramaInstruccion;
$tramaTime = substr($trama,2,8);
echo "<br> Trama Time: ".$tramaTime;
$tramaChecksum = substr($trama,10,8);
echo "<br> Trama Checksum: ".$tramaChecksum;

#--------------- binario a decimal
echo "<br><br> Binario a Decimal <br> ";
$instructionDec= bindec($tramaInstruccion);
$timeDec = bindec($tramaTime);
$checkDec = bindec($tramaChecksum);

echo "<br> Instruction: ".$instructionDec;
echo "<br> Time: ".$timeDec;
echo "<br> Checksum: ".$checkDec;

#Referencia --- http://wiringpi.com/pins/ ----
exec("gpio mode 0 out");  
        
if($instructionDec == 1) {
    exec("gpio write 0 1");// pin 0 in wiring pi is gpio 17
    echo "<br><br> Encender bomba ";
	    
} else {
    exec("gpio write 0 0");
    echo "<br><br> Apagar bomba ";
}                
        
?>
