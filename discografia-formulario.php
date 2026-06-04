<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro - Discografia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php include "inc-menu.php"; ?>

    <main class="conteudo-principal">
 

        <h1 class="titulo">Cadastro de Discografia</h1>

        <form action="discografia-salvar.php" method="post">

            <div class="campo-formulario">
                <label for="artista">Artista</label>
                <input type="text" name="artista" id="artista" placeholder="Quem é o artista?">
            </div>

            <div class="campo-formulario">
                <label for="album">Nome do álbum</label>
                <input type="text" name="album" id="album" placeholder="Qual o nome do álbum?">
            </div>

            <div class="campo-formulario">
                <label for="ano">Ano de Lançamento</label>
                <input type="number" name="ano" id="ano" placeholder="Ex: 2026">
            </div>

            <div class="campo-formulario">
                <label for="tipo">Tipo</label>
                <select name="tipo" id="tipo">
                    <option value="album">Álbum</option>
                    <option value="single">Single</option>
                    <option value="ep">EP</option>
                </select>
            </div>

            <div class="campo-formulario">
                <label for="foto">URL da Capa (Foto)</label>
                <input type="text" name="foto" id="foto" placeholder="Cole o link da imagem aqui">
            </div>

            <div class="container-botoes">
                <button type="submit" class="btn-salvar">Salvar</button>
                <button type="reset" class="btn-limpar">Limpar</button>
            </div>

        </form>

    </main>

    <?php include "inc-rodape.php"; ?>

</body>
</html>
