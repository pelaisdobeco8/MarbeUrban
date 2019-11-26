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

function pegarcategoria () {
    $dados = array ();
    $dados["categorias"] = pegarProdutoPorCategoria();
    exibir ("adm/listarcategoria", $dados);   
}



