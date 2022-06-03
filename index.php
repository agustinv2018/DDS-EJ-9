<?php

require_once 'modelo/datosPersona.php';

$dp = new DatosPersona();
$dp->Nombre = 'Agustin';
$dp->Apellido = 'Vargas';
$dp->Email = 'agustin.v420@gmail.com';
$dp->Edad = '29';
$dp->MostrarPropiedades();
