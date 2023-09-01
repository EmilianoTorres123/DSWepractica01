<?php
try {
    $dsn = "pgsql:host=172.17.0.3;port=5432;dbname=ejemplo;";
    $username = "postgres";
    $password = "postgres";

    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "INSERT INTO empleado(clave, nombre, direccion, telefeno)
              VALUES(:clave, :nombre, :direccion, :telefeno)";

    $statement = $pdo->prepare($query);

    $parameters = [
        ':clave' => $_REQUEST['clave'],
        ':nombre' => $_REQUEST['nombre'],
        ':direccion' => $_REQUEST['direccion'],
        ':telefeno' => $_REQUEST['telefono']
    ];
    
} 
?>