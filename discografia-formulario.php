<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Discografia</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    
    <main class="conteudo-principal">
        
        <h1>Cadastro de Discografia</h1>

        <form action="discografia-salvar.php" method="post">

            <div class="campo-formulario">
                <label for="artista">Artista:</label>
                <input type="text" name="artista" id="artista" placeholder="Digite o artista:">
            </div>

            <div class="campo-formulario">
                <label for="album">Nome do álbum:</label>
                <input type="text" name="album" id="album" placeholder="Digite o album:">
            </div>

            <div class="campo-formulario">
                <label for="ano">Ano de Lançamento:</label>
                <input type="number" name="ano" id="ano">
            </div>

            <div class="campo-formulario">
                <label for="tipo">Tipo:</label>
                <select name="tipo" id="tipo">
                    <option value="album">Álbum</option>
                    <option value="single">Singles</option>
                    <option value="ep">EP</option>
                </select>
            </div>

            <div class="campo-formulario">
                <label for="foto">Foto:</label>
                <input type="text" name="foto" id="foto">
            </div>

            <div class="container-botoes">
                <button type="submit">Salvar</button>
                <button type="reset">Limpar</button>
            </div>

        </form>

    </main>
</body>

</html>
