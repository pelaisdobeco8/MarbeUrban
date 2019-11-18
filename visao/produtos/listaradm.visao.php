<link rel="stylesheet" href="./publico/css/app.css">
<h2>Listar Produtos</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Produto</th>
            <th>quantidade</th>
           
        </tr>
    </thead>
    <?php foreach ($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nomeproduto']?></td>
        <td><?=$produto['quantidade']?></td>
    </tr>
    <?php endforeach; ?>
</table>




