<h2>Login</h2>
<p>Modificacion git</p>
<form >
    <input type="text" name="user" placeholder="user">
    <br>
    <input type="password" name="pass" placeholder="password">
    <br>
    <input type="submit" value="Submit">
</form>
<?php
$usuaris=array(
    "Henry"=>"123",
    "Pepe" => "321"
);
if (isset($_GET["user"])) {
    echo "Usuari:".$_GET["user"]."<br>\n";
    echo "Password:".$_GET["pass"]."<br>\n";
    # code...
}
else {
    echo "Usuari:".$_GET["user"]."<br>\n";
}
echo $usuaris["Henry"];
