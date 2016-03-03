# Minecraft
# Uuidresolver.php
Nutzung

(Außerhalb auf anderen .php Scripten z.B.: index,php) 
<?php
include_once 'uuidresolver.php';  
$resolver=new resolver();   
$uuid=$resolver->resolveuuidlong("AlpixYT");  
echo $uuid;   
$uuid=$resolver->resolveuuidshort("AlpixYT");  
echo $uuid;   

Soltest du vergessen einen Nutzernamen anzugeben, wird automatisch Alpix genutzt, um Fehler zu vermeiden :]  
?>
