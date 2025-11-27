<?php
if (!isset($_FILES['media'])) die("Selecciona un archivo please!!");

$archivo = $_FILES['media'];
$description = htmlspecialchars($_POST['description'], ENT_QUOTES, 'UTF-8');

if (filesize($archivo['tmp_name']) <= 0) die("El archivo está vacío.");

$ext = pathinfo($archivo['name'], PATHINFO_EXTENSION);
$nombre = bin2hex(random_bytes(16)) . "." . $ext;
$ruta = __DIR__ . "/imagenes/" . $nombre;

move_uploaded_file($archivo['tmp_name'], $ruta);

file_put_contents($ruta . ".txt", $description);

header("Location: index.php");
exit;
