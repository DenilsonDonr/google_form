<?php

// Inilizacion de la aplicacion

// Zona horaria
date_default_timezone_set('America/Lima');

// Configuracion de errores
error_reporting(E_ALL);
ini_set('ignore_repeated_errors', TRUE);
ini_set('display_errors', FALSE);
ini_set('log_errors', TRUE);
ini_set("error_log", 'debug.log');

// carga de las dependencias
require_once 'vendor/autoload.php';

// carga de las rutas

require_once 'src/core/routes.php';