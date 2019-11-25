<link rel="stylesheet" href="./publico/css/app.css">
<h2>Produtos po categoria</h2>

<table class="table">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Categoria</th>
           
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['quantidade']?></td>
    </tr>
    <?php endforeach; ?>
</table>


