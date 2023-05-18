<?php

echo "nome:" . $_POST ['nome'] . "<br>";
echo "altura:" . $_POST ['altura'] . "<br>";
echo "peso:" . $_POST ['peso'] . "<br>";

$foto = $_FILES ['foto'];
move_uploaded_file($foto['tmp_name'], $foto['name']);
$nome_foto = $foto['name'];

echo "<img src = '$nome_foto' height='100px'>";

?>
