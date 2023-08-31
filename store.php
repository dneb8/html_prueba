<?php
include('conexion.php');
if(!empty($_POST['nombre']) && !empty($_POST['correo']) && !empty($_POST['genero']) && !empty($_POST['contraseña']) && !empty($_POST['comentario']) && !empty($_POST['ciudad'])) {
  echo "recibe el nombre" .  $_POST['nombre'] . "<br>";
  echo "recibe el correo" . $_POST['correo'] . "<br>";
  echo "recibe el genero" . $_POST['genero'] . "<br>";
  echo "recibe la contraseña" . $_POST['contraseña'] . "<br>";
  echo "recibe el comentario" . $_POST['comentario'] . "<br>";
  echo "recibe la ciudad" . $_POST['ciudad'] . "<br>";

  $nombre = $_POST['nombre'];
  $correo = $_POST['correo'];
  $genero = $_POST['genero'];
  $contraseña = $_POST['contraseña'];
  $comentario = $_POST['comentario'];
  $ciudad = $_POST['ciudad'];
  
    // Verificar si 'interesa' está definido, si no, asignar valor por defecto 0
    $interesaValue = isset($_POST['interesa']) && $_POST['interesa'] === 'on' ? 1 : 0;

    //--- Aplicable a Sentencias INSERT, UPDATE, DELETE ---//
    $sql = "INSERT INTO usuarios (nombre, correo, genero, contraseña, comentario, ciudad, interesa)
            VALUES ('$nombre', '$correo', '$genero', '$contraseña', '$comentario', '$ciudad', '$interesaValue')";
    // Utilizar exec() dado que no se regresan resultados
    $conn->exec($sql);

    $sql = "SELECT * FROM usuarios";
      $stmt = $conn->prepare($sql);
      $stmt->execute();

      // Configura los resultados como un arreglo asociativo
      $stmt->setFetchMode(PDO::FETCH_ASSOC);
      
      // $stmt->fetchAll() Obtiene el arreglo asociativo
      echo "<ul>";
      foreach ($stmt->fetchAll() as $row) {
        echo "<li>" . $row['nombre'] . " - " . $row['correo'] . " " . $row['genero'] . " " . $row['contraseña'] . " " . $row['comentario'] . " " . $row['ciudad'] . " " . $row['interesa'] . "</li>";
      }
}  

else {echo"<h3>Faltan datos</h3>";}

?>