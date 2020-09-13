<?php
#Autor: Martin Dala - martindala40@gmail.com
#Simples código para fazer uploads de diferentes tipo de arquivos com php

#O local onde sera movido o ficheiro (ex: pasta uploads)
$uploaddir = 'uploads/';
#Pegando o nome,a pasta e a extensão do arquivo
$uploadfile = $uploaddir . basename($_FILES['arquivo']['name']);

echo "<p>";
#Condição caso seja movido ou não
if (move_uploaded_file($_FILES['arquivo']['tmp_name'], $uploadfile)) {
    echo "Ficheiro valido, Movido com sucesso a sua pasta upload.\n";
} else {
    echo "Falhou o Upload";
}
#Nota: com o array FILES, voce pode conseguir pegar diferentes informações do seu ficheiro movido.
echo $_FILES['arquivo']['name'];
echo "</p>";
echo '<pre>';
echo 'Esta aqui mais informações:';
print_r($_FILES);
print "</pre>";

?>