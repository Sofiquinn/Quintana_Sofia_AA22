<?php
$mysqli = new mysqli('127.0.0.1', 'root', '', 'guia_php', 3307);
if ($mysqli->connect_errno) {
  die('Error de conexión MySQL: ' . $mysqli->connect_error);
}
$mysqli->set_charset('utf8mb4');
