<h2> Listar Pedidos: </h2>

<table class="table">
    <thead>
        <tr>
            <th>CPF</th>
            <th>Pedido</th>
            <th>Data da compra</th>
            <th>CEP</th>
            <th>Detalhar</th>
            
        </tr>
    </thead>

    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td> <?=$pedido['cpf']?></td>
        <td><?=$pedido['idpedido']?></td> 
        <td><?=$pedido['dataCompra']?></td> 
        <td><?=$pedido['CEP']?></td> 
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./pedido/ver/<?=$pedido['idpedido']?>"> DETALHAR <?php } ?></td>
        
    </tr>
    <?php endforeach; ?>
    
</table>
