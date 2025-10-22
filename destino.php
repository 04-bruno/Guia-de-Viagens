<?php 
    include_once "header.php";
    include_once "destinos_data.php";
    $id = (int)$_GET['id'];
?>

<main>
    <div class="grid-2">
        <?php if(isset($_GET['id']) && isset($destinos[$_GET['id']])) {?>
            <img src="imagens_viagem/<?=$destinos[$id]['imagem']?>" alt="<?=$destinos[$id]['nome']?>">

            <div class="coluna">
                <strong>Nome:</strong> <?=$destinos[$id]['nome']?> 
                <br>
                <strong>Descrição:</strong> <?=$destinos[$id]['descricao_curta']?> 
                <br>
                <strong>regiao:</strong> <?=$destinos[$id]['regiao']?> 
                <br>
                <strong>Melhor epoca:</strong> <?=$destinos[$id]['melhor_epoca']?>
                <br>
                <a href="index.php">Pagina inicial</a>
            </div>
        <?php 

        } else {
            echo "<h1>Destino não encontrado!</h1>";
        }
        
        ?>
    </div>
</main>

<?php 
    include_once "footer.php";
?>