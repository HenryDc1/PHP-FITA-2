<?php
$quantitat=$_POST["quantitat"];
for ($i=0; $i <=$quantitat ; $i++) { 
    echo "<a href='ex22pg3.php?id=$i'>Comanda $i</a><br>";

}