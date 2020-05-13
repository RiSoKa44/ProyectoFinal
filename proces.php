<?php
    $Nombre= $_POST['Nombre'];
    $Contraseña= $_POST['Contraseña'];

    $Nombre=stripcslashes($Nombre);
    $Contraseña=stripcslashes($Contraseña);
    $Nombre=mysql_real_escape_string($Nombre);
    $Contraseña=mysql_real_escape_string($Contraseña);

    mysql_connect("localhost", "admin", "admin");
    mysql_select_db("ddb148915");

    $result=mysql_query("select * from usuario where Nombre='$Nombre' and Contraseña='$Contraseña'")
            or die("Incorrecte la connexió ".mysql_error());
    $row=mysql_fetch_array($result);
    if ($row['Nombre']==$Nombre && $row['Contraseña']==$Contraseña){
        echo "Login correcte! Bnevingut ".$row['Nombre'];
    }else {
        echo "Incorrecte login";
    }

?>