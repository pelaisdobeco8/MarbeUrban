<?php

require_once "modelo/admModelo.php";
require_once "modelo/produtoModelo.php";
require_once "modelo/categoriaModelo.php";

function index () {
    exibir ("adm/formulario");
}

function listaradm () {
    $dados = array ();
    $dados["produtos"] = pegarTodosProdutos();
    exibir ("adm/listaradm", $dados);
}

function pegarCategoria () {
    $dados = array ();
    $dados["categorias"] = pegarProdutoPorCategoria();
    exibir ("adm/listarcategoria", $dados);   
}

function listarPedidosPorData() {
	if (ehPost()){
		$datad1 = $_POST ['datad1'];
		$datad2= $_POST ['datad2'];
		$dados = array();
		$dados["adm"] = pegarTodosPedidosData($datad1, $datad2); 
		exibir("administrador/listarData", $dados);
	}else{
		exibir("administrador/Data");
	} 
}




