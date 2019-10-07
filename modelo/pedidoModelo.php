<?php

function salvarPedido ($idFormaPagamento, $idendereco, $nomecupom, $produtosCarrinho) {
$sql = "INSERT INTO pedido (idFormaPagamento, idendereco, nomecupom, produtosCarrinho) VALUES ('$idFormaPagamento', '$idendereco', '$nomecupom', '$produtosCarrinho' )";
$resultado = mysqli_query ($cnx = conn(), $sql);
$idpedido = mysqli_insert_id($cnx);
if(!$resultado) { die('Erro ao adicionar um pedido'. mysqli_error($cnx));}
return 'Pedido salvo <br> <a href="./carrinho/index/" class="btn btn-primary">Voltar</a>';  
}

