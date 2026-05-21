<?php
/* discografia-salvar.php*/

$artista = $_POST['artista'];
$album = $_POST['album'];
$ano = $_POST['ano'];
$tipo = $_POST['tipo'];
$foto = $_POST['foto'];


$conexao = mysqli_connect("localhost", "root", "", "db_spotify");
if(!$conexao){
    echo "erro";
    die("<h3>Erro</h3> " . mysqli_connect_error());
}


$sql = "insert into tb_discografia(artista, nome, ano, tipo, foto) values ('$artista', '$album', '$ano', '$tipo', '$foto')";

$resultado = mysqli_query($conexao, $sql);

if($resultado){
    echo "cadastrado com sucesso";
}else{
    echo "deu algum problema";
}

mysqli_close($conexao);
?>