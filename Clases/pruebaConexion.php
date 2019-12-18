<?php
$dsn='mysql:host=localhost;dbname=movies_db';
$user='root';
$pass='root';

try {
  $conex= new PDO($dsn,$user,$pass);
} catch (\Exception $e) {
echo 'Ups! No pudimos conectarnos con la Base de DATOS';echo'<br>';
}
