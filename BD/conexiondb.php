<?php
$server= 'localhost';
$user='root';
$pass='';
$bd='bdejemplopdf';

$conexion= new mysqli($server,$user,$pass,$bd);
if(mysqli_connect_errno()){

    echo 'No se ha conectado',mysqli_connect_error();
    exit();

}/*else{
    echo'Conectado a la base de datos';
*/

?>