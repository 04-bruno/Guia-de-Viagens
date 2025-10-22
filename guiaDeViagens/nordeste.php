<?php 
    include_once "header.php";
    include_once "destinos_data.php";
?>

<main>
    <h1>Destinos do Nordeste</h1>
    <p>Confira alguns dos lugares do nordeste para a sua viagem!</p>
    <br>

    <div class="grid">

    <?php shuffle($destinos); foreach($destinos as $local) {?>

        <?php if($local["regiao"] == "Nordeste") {?>
            <div class="coluna">
                <img src="imagens_viagem/<?=$local['imagem']?>" alt="<?=$local['nome']?>">
                <p>
                    <strong>Nome:</strong>  <?=$local['nome']?>
                    <br>
                    <strong>Descricao:</strong> <?=$local['descricao_curta']?> 
                    <br>
                    <strong>Região</strong> <?=$local['regiao']?>
                    <br>
                    <strong>Melhor epoca:</strong> <?=$local['melhor_epoca']?>
                </p>
                <a href="destino.php?id=<?=$local['id']?>">descrição</a>
            </div>

        <?php }; ?>

    <?php }?>

    </div>
</main>

<?php 
    include_once "footer.php";
?>