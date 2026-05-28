<?php
$titulo_da_pagina = "Listagem de Discografias";
include "inc-cabecalho.php";
?>
<body class="d-flex flex-column vh-100">

    <main class="container flex-grow-1">
        <?php include "inc-menu.php"; ?>
        
        <h1 class="my-4">Listagem de Discografias</h1>
        
        <div class="row mb-4">
            <div class="col">
                <a href="discografia-formulario.php" class="btn btn-primary">Nova Discografia</a>
            </div>
        </div>

    
        <div class="row">
            <div class="col">
                <table class="table table-striped table-hover">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Artista</th>
                        <th scope="col">Nome do album</th>
                        <th scope="col">Ano</th>
                        <th scope="col">Tipo</th>
                        <?php 
                        #abrir conexão
                        include "inc-conexao.php";

                        #consultar os dados
                        $sql = "SELECT * FROM tb_discografia order by artista , ano, id";
                        $resultado = mysqli_query($conexao , $sql);

                        #lista os dados
                        while($linha_resultado = mysqli_fetch_assoc($resultado)){
                            echo "<tr>";
                            echo "<td> {$linha_resultado['id']} </td>";
                            echo "<td> {$linha_resultado['artista']} </td>";
                            echo "<td> <a href='discografia-visualizar.php?id={$linha_resultado['id']}'> {$linha_resultado['nome']} </a> </td> ";
                            echo "<td> {$linha_resultado['ano']} </td>";
                            echo "<td> {$linha_resultado['tipo']} </td>";
                            echo "</tr>";
                        }

                        #fechar conexão
                        mysqli_close($conexao)
                        ?>
                    </tr>
                </table>
            </div>
        </div>
    </main>

<?php include "inc-rodape.php"; ?>
