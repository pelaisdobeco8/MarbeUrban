<link rel="stylesheet" href="./publico/css/app.css">
<h2>Produtos por categoria</h2>

<table class="table">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Categoria</th>
           
        </tr>
    </thead>
    <?php foreach ($categorias as $categoria): ?>
    <tr>
        <td><?=$categoria['nomeproduto']?></td>
        <td><?=$categoria['nomecategoria']?></td>
    </tr>
    <?php endforeach; ?>
</table>

