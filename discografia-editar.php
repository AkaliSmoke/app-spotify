<?php
$id = $_GET['id'];
include "inc-conexao.php";
$sql = "select * from tb_discografia where id = {$id} ";
$resultado = mysqli_query($conexao, $sql);
$nome = $artista = $foto = $tipo = $ano = "";
while($linha = mysqli_fetch_assoc($resultado)){
    $nome = $linha['nome'];
    $artista = $linha['artista'];
    $foto = $linha['foto'];
    $tipo = $linha['tipo'];
    $ano = $linha['ano'];
}
$titulo_da_pagina = "Editar disco";
include "inc-cabecalho.php";
?>
<body>
    <?php include "inc-menu.php"; ?>
    <main class="container">
        <h1>Editar Disco: <?= $nome?></h1>
        <form method="post" action="discografia-atualizar.php?id=<?= $id ?>">
            <div class="mb-3">
                <label class="form-label">Artista:</label>
                <input type="text" name="artista" class="form-control" value="<?= $artista ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Nome do álbum:</label>
                <input type="text" name="nome" class="form-control" value="<?= $nome ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Ano:</label>
                <input type="number" name="ano" class="form-control" value="<?= $ano ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Foto:</label>
                <input type="text" name="foto" class="form-control" value="<?= $foto ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo:</label>
                <select name="tipo" class="form-select">
                    <option value=""></option>
                    <option value="álbum" <?php if ($tipo == 'álbum') {
                                                echo "selected";
                                            } ?>>Álbum</option>
                    <option value="single" <?php if ($tipo == 'single') {
                                                echo "selected";
                                            } ?>>Single</option>
                    <option value="EP" <?php if ($tipo == 'EP') {
                                            echo "selected";
                                        } ?>>EP</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Atualizar disco</button>
        </form>
    </main>
<?php
mysqli_close($conexao);
include "inc-rodape.php";
?>
</body>