
<form action="" method="GET">
    <select name="elements" id="elements" >    
        <option value="foc">foc</option>
        <option value="aigua">Aigua</option>
        <option value="terra">Terra</option>
    </select>
    <input type="submit" value="Tramet la consulta" class="miinput">

</form>
<?php
$select=$_GET["elements"];
if ($select == "foc") {
    echo '<link rel="stylesheet" type="text/css" href="foc.css">';
} elseif ($select == "terra") {
    echo '<link rel="stylesheet" type="text/css" href="terra.css">';
} elseif ($select == "aigua") {
    echo '<link rel="stylesheet" type="text/css" href="aigua.css">';
}
echo $select;