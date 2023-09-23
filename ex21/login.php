<h2>Login</h2>
<form method="POST" action="login.php" >
    <input type="text" name="user" placeholder="user">
    <br>
    <input type="password" name="pass" placeholder="password">
    <br>
    <input type="submit" value="Submit">
</form>
<?php
$logs = array(
    "Henry" => "123",
    "Pepe" => "321",

);
$usuario=$_POST["user"];
$pass=$_POST["pass"];
$encontrado=false;
$passmal=false;
$usermal=false;

foreach ($logs as $clave => $valor) {
    if ($usuario==$clave&&$pass==$valor) {
        $encontrado=true;

        break;
    }
}
if($encontrado){
    echo "Log in Correcto!";
}
else echo "Log in Incorrecto!";


