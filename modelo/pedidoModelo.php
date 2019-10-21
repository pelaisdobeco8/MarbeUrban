<?php

function salvar ($idFormaPagamento, $idusuario, $idendereco, $valorcupom, $produtosCarrinho) {
$sql = "INSERT INTO pedido (idFormaPagamento, idusuario, idendereco, valorcupom) VALUES ('$idFormaPagamento','$idusuario' '$idendereco', '$valorcupom')";
$resultado = mysqli_query ($cnx = conn(), $sql);
$idpedido = mysqli_insert_id($cnx);
foreach ($produtosCarrinho as $produtos) {
    $produtos["idproduto"];
    $produtos["quantidade"]= 1;
}
if(!$resultado) { die('Erro ao adicionar um pedido'. mysqli_error($cnx));}
return 'Pedido salvo <br> <a href="./carrinho/index/" class="btn btn-primary">Voltar</a>';  
}

function pegarTodosCupons (){
    $sql = "SELECT * FROM pedido";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = array();
    while ($linha = mysqli_fetch_assoc($resultado)){
        $pedidos[] = $linha;
    }
    return $pedidos; 
}

function pegarCupomPorId ($idpedido) {
    $sql = "SELECT * FROM pedido WHERE idpedido = $idpedido";
    $resultado = mysqli_query(conn(), $sql);
    $pedidos = mysqli_fetch_assoc($resultado);
    return $pedidos;
}
