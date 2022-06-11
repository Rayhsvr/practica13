<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 14</title>
    <script src="js/funciones.js"></script>
</head>
<body>
    <header>
        <h1>datos del Empleado</h1>
    </header>
    <nav> <!--Menú--></nav>
    <section>
   <form action="includes/muestra.php" method="post" name="formulario" id="formulario" onsubmit="return validar();">
        <p>
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" required>
        </p>
        <p>
            <label for="puesto">Puesto:</label>
            <input type="text" name="puesto" id="puesto" required>
        </p>
        <p>
            <label for="salario">Salario Diario:</label>
            <input type="number" name="salario" id="salario" required>
        </p>
        <label for="meses">Meses Trabajados:</label>
            <select name="meses" id="meses">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Enviar" name="enviar" id="enviar">
            <input type="reset" value="Limpiar" name="limpiar" id="limpiar">
        </p>
   </form> 
   </section>
   <footer>
       <p>Derechos Reservados 2022</p>
   </footer>
</body>
</html>