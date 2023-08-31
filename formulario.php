
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contacto</title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <div class="nav2">
    <a href="index.php">Inicio</a>
    <a href="formulario.php">Contacto</a>
  </div>

<section class="content">
    <h1>Contacto</h1>

    <form action="store.php" method="POST">
      <label for="nombre">Nombre:</label>
      <input type="text" id="nombre" name="nombre" required><br>
      
      <label for="correo">Correo:</label>
      <input type="email" id="correo" name="correo" required><br>
      
      <label>Genero:</label>
      <label for="genero-m">Masculino</label>
      <input type="radio" id="genero-m" name="genero" value="masculino" required>
      <label for="genero-f">Femenino</label><br>
      <input type="radio" id="genero-f" name="genero" value="femenino" required>
      
      <label for="contraseña">Contraseña:</label>
      <input type="password" id="contraseña" name="contraseña" required><br>
      
      <label for="comentario">Comentario:</label>
      <textarea id="comentario" name="comentario" rows="4" required></textarea><br>
      
      <label for="ciudad">Ciudad:</label>
      <select id="ciudad" name="ciudad">
        <option value="Guadalajara">Guadalajara</option>
        <option value="Zapopan">Zapopan</option>
        <option value="Tonalá">Tonalá</option>
        <option value="Otra">Otra</option>
      </select><br>
      
      <label for="interesa">Me interesa contratarte</label><br>
      <input type="checkbox" id="interesa" name="interesa">
      
      <button type="submit">Enviar</button>
    </form>
  </section>

</body>
</html>


