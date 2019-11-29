<h2> Pedidos por data: </h2>

<table class="table">
    <thead>
        <tr>
            <th>Id Pedido</th>
            <th>Cpf do Usuário</th>
            <th>Data </th>
            <th>Detalhar</th>
            
        </tr>
    </thead>

    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td> <?=$pedido['idPedido']?></td>
        <td><?=$pedido['cpf']?></td> 
        <td><?=$pedido['dataCompra']?></td> 
        <td><a href="./pedido/ver/<?=$pedido['idPedido']?>">DETALHAR</td>
        
    </tr>
    <?php endforeach; ?>
    
</table>


