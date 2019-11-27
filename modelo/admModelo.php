<?php

function pegarTodosPedidosData($datad1, $datad2) {
	$sql = "SELECT DATE_FORMAT (pedido.datacompra, '%d/%m/%y') as Data, Preco FROM pedido WHERE datacompra BETWEEN '$datad1' AND '$datad2'";
	$resultado = mysqli_query(conn(), $sql);
	$produtos = array();
	while ($linha = mysqli_fetch_assoc($resultado)) {
		$produtos[] = $linha;
	}
	return $produtos;
}


