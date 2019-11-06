<h2>Ver detalhes do pedido</h2>

<p>Id Pedido: <?=$pedidos['idpedido']?></p>
<p>Id Usuario: <?=$pedidos['idusuario']?></p>
<p>Id Forma Pagamento: <?=$pedidos['idFormaPagamento']?></p>
<p>Id Endereço: <?=$pedidos['idendereco']?></p>
<p>Valor cupom: <?=$pedidos['valorcupom']?></p>

<p>Produtos Carrinho:</p>
<?php foreach ($pedidosProduto as $produto) :?>
    <div><?=$produto["nomeproduto"]?><br></div>
<?php endforeach;?>
