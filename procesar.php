<?php
if(isset($_POST['opcion'])) {
  $seleccion = $_POST['opcion'];
  $archivo = fopen('seleccion.txt', 'w');
  fwrite($archivo, implode(', ', $seleccion));
  fclose($archivo);
  echo 'Los siguientes valores se han guardado en el archivo de texto plano: ' . implode(', ', $seleccion);
}
?>