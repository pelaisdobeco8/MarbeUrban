<h2>Listar Cupons</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Id Pedido</th>
            <th>Id Forma Pagamento</th>
            <th>Id Endereço</th>
            <th>Valor cupom</th>
            <th>Produtos Carrinho</th>
            <th>Ver Detalhes</th>
            
        </tr>
    </thead>
    <?php foreach ($pedidos as $pedido): ?>
    <tr>
        <td><?=$pedido['idpedido']?></td>
        <td><?=$pedido['idFormaPagamento']?></td> 
        <td><?=$pedido['idendereco']?></td> 
        <td><?=$pedido['valorcupom']?></td> 
        <td><?=$pedido_produto['produtosCarrinho']?></td> 
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./pedido/ver/<?=$pedido['idpedido']?>">Ver</a> <?php } ?></td>
    </tr>
    <?php endforeach; ?>
