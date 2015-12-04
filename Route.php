<?php

//Route

$username = "u307730325_pkmup";
$password ="autoamigo";
$dbname="u307730325_pkmup";
$host ="mysql.hostinger.mx"

$con=mysql_connect($host,$username,$password) or die ("Problemas al conectar al servidor");

mysql_select_db($dbname,$con) or die ("Error al conectar a la Base de Datos");


$option =$_GET['option']; //la opcion un string que diga Escribir para escribir a la BD y Leer para leer a la bd


if($option == "Escribir"){
    
    $latlng = $_GET['LatLng']; //LatLng el id de la variable en android
    
    $sql="INSERT INTO Route (LatLng) VALUES ('$latlng')";
    if (mysql_query($con,$sql))
    {
       echo "Values have been inserted successfully";
    }

}
 
if($option == "Leer"){
    $idroute = $_GET['ID_Route']; //el id ruta que esta en la tabla de viaje
    $sql="SELECT LatLng FROM Route where ID='$idroute'";
    
    $result = mysql_query($con,$sql);
    $row = mysql_fetch_array($result);
    $data = $row[0];
}

mysql_close($con);

?>