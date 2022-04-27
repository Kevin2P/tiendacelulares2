<?php
//$conexion=mysqli_connect("tcp:tiendaserver.database.windows.net","rootSM","asdf123$%","tienda2");

try {
    $conexion = new PDO("sqlsrv:server = tcp:tiendaserver.database.windows.net,1433; Database = tienda2", "rootSM", "asdf123$%");
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

?>
