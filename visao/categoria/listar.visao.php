<h2>Listar Categorias</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ver detalhes</th>
            <th>Alterar</th>
            <th>Deletar</th>
            
        </tr>
    </thead>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?=$categoria['nomecategoria']?></td>
        <td><?=$categoria['descricaocategoria']?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./categoria/ver/<?=$categoria['id_categoria']?>">Ver</a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./categoria/editar/<?=$categoria['id_categoria']?>">Editar</a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./categoria/deletar/<?=$categoria['id_categoria']?>">Deletar</a> <?php } ?></td>
    </tr> 
    <?php endforeach; ?>
</table>
<a href="./categoria/adicionar/" class="btn btn-primary">Nova categoria</a>

