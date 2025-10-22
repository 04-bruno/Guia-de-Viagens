<?php 
    include_once "header.php";
    include_once "destinos_data.php";
?>

<main>
    <h1>Conheça Nossos Destinos</h1>
    <p>Explore todos os destinos fantásticos que selecionamos para você.</p>
    <br>
    <div class="grid">
        <?php foreach($destinos as $local) {?>

            <div class="coluna">
                <img src="imagens_viagem/<?=$local['imagem']?>" alt="<?=$local['nome']?>">
                <p>
                    <strong>Nome:</strong> <?=$local['nome']?> 
                    <br>
                    <strong>Descricao:</strong> <?=$local['descricao_curta']?> 
                    <br>
                    <strong>Região:</strong> <?=$local['regiao']?>
                    <br>
                    <strong>Melhor epoca:</strong> <?=$local['melhor_epoca']?>
                </p>
                <a href="destino.php?id=<?=$local['id']?>">descrição</a>
            </div>

        <?php }; ?>
    </div>
    </div>
</main>

<?php 
    include_once "footer.php";
?>