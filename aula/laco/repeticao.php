<?php
$x=0; $y= 0;
echo "Usando o for -----\n";
for($contador = 0; $contador <= 120;$contador++){
    echo "Nº $contador \n";
}
echo "Usando o while -----\n";
while($x<=120){
    echo "Nº $x \n";
    $x++;
}
echo "Usando o do while -----\n";
do{
    echo "Nº $y \n";
    $y++;
}while($y<=120);