<?php

//incluimos la clase
include('class.spotify.php');
$spotify = new spotify();
echo "\033[01;36m===========[API > Dr.Wean]===========\033[0m\n";
echo "\033[01;32m
   ____          __  _ _______   __
  / __/__  ___  / /_(_) ___/ /  / /__
 _\ \/ _ \/ _ \/ __/ / /__/ _ \/  '_/
/___/ .__/\___/\__/_/\___/_//_/_/\_\
   /_/  
  \033[0m\n";
echo "\033[01;36m===[Checker > Junior Hilario Jara]===\033[0m\n";
$carpeta = readline("Ruta del combo: ");
echo "\033[01;36m======================================\033[0m\n";
echo "\033[01;33mSi no ve nada abajo, no se preocupe aún
no hay cuentas que sirvan\033[0m\n";
echo "\033[01;36m======================================\033[0m\n";
$cardelimitador = ':';
$oa = fopen($carpeta, 'r');
                                                            $c = 0;
while($a = fgetcsv($oa, 1000, $cardelimitador)){
             echo $spotify->check($a[0],$a[1]);
	     $c++;
}
fclose($oa);
