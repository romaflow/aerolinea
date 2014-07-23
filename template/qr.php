<?php
include '../lib/phpqrcode/qrlib.php';
include "../core/ConexionMySQL.php";
include "../core/Entidad.php";
include "../core/Recurso.php";
include "../recursos/Aeropuertos.php";
include "../recursos/Checkin.php";
include "../recursos/Pasajes.php";
include "../recursos/Vuelos.php";
include "../entidades/Aeropuerto.php";
include "../entidades/Checkin.php";
include "../entidades/Pasaje.php";
include "../entidades/Vuelo.php";
include "../entidades/Recorrido.php";
include "../Asiento.php";

$id = $_GET['id'];
$recurso = new Recurso_Pasajes();
$retorno = $recurso->obtenerPorId($id);

QRcode::png(json_encode($retorno));

?>