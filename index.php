<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 13</title>
</head>
<body>
    <header>
        <h1>Formulario de Inicio</h1>
    </header>
    <nav> <!--Menú--></nav>
    <section>
   <form action="includes/muestra.php" method="post" name="formulario" id="formulario">
        <p>
            <label for="encabezado">Encabezado:</label>
            <input type="text" name="encabezado" id="encabezado" required>
        </p>
        <p>
            <label for="mensaje">Mensaje:</label>
            <input type="text" name="mensaje" id="mensaje" required>
        </p>
        <p>
            <input type="submit" value="Enviar" name="enviar" id="enviar">
            <input type="reset" value="Limpiar" name="limpiar" id="limpiar">
        </p>
   </form> 
   </section>
   <footer>
       <p>Derechos Reservados</p>
   </footer>
</body>
</html>