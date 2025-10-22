<?php
    include_once "header.php";
    include_once "destinos_data.php";
    $i = 0;
?>

<main>
    <h1>Destinos em Destaque</h1>
    <p>Confira alguns dos lugares mais incríveis para sua próxima viagem.</p>
    <br>

    <div class="grid">
        
        <?php shuffle($destinos); foreach($destinos as $local) {?>

            <div class="coluna">
                <img src="imagens_viagem/<?=$local['imagem']?>" alt="<?=$local['nome']?>">
                <p>
                    <strong>Nome:</strong> <?=$local['nome']?> 
                    <br>
                    <strong>Descricao:</strong> <?=$local['descricao_curta']?> 
                    <br>
                    <strong>Região</strong> <?=$local['regiao']?>
                    <br>
                    <strong>Melhor epoca:</strong> <?=$local['melhor_epoca']?>
                </p>
                <a href="destino.php?id=<?=$local['id']?>">descrição</a>
            </div>

        <?php $i++; if($i >= 4) break; }; ?>
    </div>
</main>

<?php 
    include_once "footer.php";
?>