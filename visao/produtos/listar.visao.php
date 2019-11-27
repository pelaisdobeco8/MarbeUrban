<link rel="stylesheet" href="./publico/css/app.css">
<h2>Listar Produtos</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Categoria</th>    
            <th>Preço</th>
            <th>Descrição</th>
            <th>Tamanho</th>
            <th>Imagem</th>
            <th>Estoque mínimo</th>
            <th>Estoque máximo</th> 
            <th>Ver detalhes</th>
            <th>Alterar Dados</th>
            <th>Deletar o usuario</th>
            <th> Comprar </th>
            
            
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['id_categoria']?></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['descricao']?></td>
        <td><?=$produto['tamanho']?></td>
        <td><img src="<?=$produto['imagem']?>" alt="imagem" width="10%"></td>
        <td><?=$produto['estoque_minimo']?></td>
        <td><?=$produto['estoque_maximmo']?></td>  
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./produto/ver/<?=$produto['idproduto']?>"><button class="bot" type="submit" <strong>DETALHAR</strong></button></a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./produto/editar/<?=$produto['idproduto']?>"><button class="bot" type="submit" <strong>EDITAR</strong></button></a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./produto/deletar/<?=$produto['idproduto']?>"><button class="bot" type="submit" <strong>DELETAR</strong></button></a> <?php } ?></td>
        <td> <a href="./carrinho/adicionar/<?=$produto['idproduto']?>"><button class="bot" type="submit" <strong>COMPRAR</strong></button></a></td>
        
    </tr>
    <?php endforeach; ?>
</table>


<br><br><a href="./produto/adicionar/" class="btn btn-primary"><button class="botc" type="submit" <strong>CADASTRAR OUTRO</strong></button></a>
