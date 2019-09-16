<h2>Listar Categorias</h2>

<table class="table">
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
        <td><a href="./categoria/ver/<?=$categoria['id_categoria']?>">Ver</a></td>
        <td><a href="./categoria/editar/<?=$categoria['id_categoria']?>">Editar</a></td>
        <td><a href="./categoria/deletar/<?=$categoria['id_categoria']?>">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="./categoria/adicionar/" class="btn btn-primary">Nova categoria</a>

