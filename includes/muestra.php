<?php
    $nombre=$_POST['nombre'];
    $puesto= $_POST['salario'];
    $salario=intval($_POST['salario']);
    $meses=intval($_POST['meses']);
    $sueldoMensual = $salario*30;
    $sueldoAnual=$sueldoMensual*$meses;
    echo "<h1 style='text-align:center;'>Cálculo del salario</h1>";
    echo "<p>Empleado: $nombre</p>";
    echo "<p>Puesto: $puesto</p>";
    echo "<p>Sueldo Mensual: $sueldoMensual</p>";
    echo "<p>Sueldo Anual: $sueldoAnual</p>";
?>
<a href="../index.php">Regresar</a>