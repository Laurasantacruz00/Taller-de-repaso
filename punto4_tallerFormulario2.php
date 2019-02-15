<?php
    /* var ruta="Nom="+Nombre+"&Ape="+Apellido+"&tele="+telefono+"&Ema="+Email+"&TypeC="+TypeC+"&numT="+numeroT+
    "&Titular="+TitularT+
    "&cvv2="+cvv2+"&date1="+MesExp+"&date2="+AñoExp+"&dire="+Direccion+"&ciu="+Ciudad+"&esta="+Estado+"&zip="+ZIP;*/ 
    $Nombre = $_POST['Nom'];
    $Apellido = $_POST['Ape'];
    $telefono = $_POST['tele'];
    $Email = $_POST['Ema'];
    $TypeC = $_POST['TypeC'];
    $numT = $_POST['numeroT'];

    $Titular = $_POST['TitularT'];
    $cvv2 = $_POST['cvv2'];
    $date1 = $_POST['MesExp'];
    $date2 = $_POST['AñoExp'];
    $dire = $_POST['Direccion'];
    $ciu = $_POST['Ciudad'];

    $esta = $_POST['Estado'];
    $zip = $_POST['ZIP'];
    
    echo "Hola ".$Nombre." ".$Apellido."Su registro ha sido exitoso";
    

?>