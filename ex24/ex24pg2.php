<?php
$pass1=$_POST["pass1"];
$pass2=$_POST["pass2"];
if (preg_match('/\d/', $pass1)) {
    if ($pass1==$pass2) {
        echo "Contraseña correcta!";
    }
    else echo "Las contraseñas no coinciden!";
} else {
    echo "La contraseña tiene que contener un numero.";
}