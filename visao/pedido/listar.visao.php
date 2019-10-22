<h2>Listar pedidos</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Forma de Pagamento</th>
            <th>Nome do usuário</th>
            <th>Endereço</th>
            <th>Cupom</th>
            <th>Produtos Comprados</th>
            
        </tr>
    </thead>
    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td><?=$pedido['idformaPagamento']?></td>
        <td><?=$pedido['idusuario']?></td>
        <td><?=$pedido['idendereco']?></td>
        <td><?=$pedido['valorcupom']?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./pedido/ver/<?=$pedido['id_pedido']?>">Ver</a> <?php } ?></td>
        
    </tr> 
    <?php endforeach; ?>
</table>
