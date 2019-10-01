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
        <td><?=$produto['imagem']?></td>
        <td><?=$produto['estoque_minimo']?></td>
        <td><?=$produto['estoque_maximmo']?></td>  
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./produto/ver/<?=$produto['idproduto']?>">Ver</a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./produto/editar/<?=$produto['idproduto']?>">Editar</a>< <?php } ?>/td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./produto/deletar/<?=$produto['idproduto']?>">Remover</a> <?php } ?></td>
        <td> <a href="./carrinho/adicionar/<?=$produto['idproduto']?>"> Comprar</a></td>
        
    </tr>
    <?php endforeach; ?>
</table>

<a href="./produto/adicionar/" class="btn btn-primary">Novo produto</a>
