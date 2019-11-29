<?php

function pegarPedidosTempo($data1, $data2) {
    $comando = "SELECT usuario.cpf, pedido.idPedido, pedido.dataCompra FROM usuario
    INNER JOIN pedido 
    ON usuario.idusuario = pedido.idusuario
    WHERE pedido.dataCompra 
    BETWEEN '$data1' and '$data2';";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
}
function pegarPedidosLocalizacao($cidade) {
    $comando = "SELECT usuario.cpf, pedido.idPedido, pedido.dataCompra, endereco.cep FROM usuario
    INNER JOIN pedido 
    ON usuario.idusuario = pedido.idusuario 
    INNER JOIN endereco 
    ON pedido.idEndereco = endereco.idEndereco 
    WHERE endereco.cidade = '$cidade'";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
}
function pegarFaturamentoTempo($data1, $data2) {
    $comando = "SELECT pedido.idpedido, pedido.dataCompra, 
    SUM(produtos.descricao) AS valorPedido 
    FROM pedido 
    INNER JOIN pedido_produto on pedido.idpedido = pedido_produto.idPedido 
    INNER JOIN produtos ON pedido_produto.idproduto = produtos.idproduto 
    GROUP BY pedido_produto.idpedido 
    HAVING pedido.dataCompra BETWEEN '$data1' and '$data2';";
    $cnx = conn();
    $resul = mysqli_query($cnx, $comando);
    $pedidos = array();
    while ($pedido = mysqli_fetch_assoc($resul)) {
        $pedidos[] = $pedido;
    }
    return $pedidos;
}
