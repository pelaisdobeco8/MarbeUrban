<?php
require_once "modelo/produtoModelo.php";


function index(){

    $_SESSION["quantcarrinho"]=0;
    if (isset($_SESSION["carrinho"])) {
        $produtosCarrinho = array();
        $soma=0;
        foreach ($_SESSION["carrinho"] as $produtoSessao) {
            $_SESSION["quantcarrinho"]+= $produtoSessao["quantidade"];
            $produtoBanco = pegarProdutoPorId($produtoSessao["id"]);
            $produtosCarrinho[] = $produtoBanco; 
            $aux= $produtoSessao["quantidade"]*$produtoBanco["preco"];
            $soma= $soma + $aux;
        }
        
        $dados["produtos"] = $produtosCarrinho;
        $dados["total"] = $soma;
        exibir("carrinho/carrinho", $dados);
        
    } else {
        exibir("carrinho/carrinho");
    }
}

function adicionar($id){

    if (!isset($_SESSION["carrinho"])) {
        $_SESSION["carrinho"] = array();
    }
    $alt = false ;

    for ($i=0; $i < count($_SESSION["carrinho"]); $i++) {
        if ($_SESSION["carrinho"][$i]["id"] == $id) {
            $alt = true;
            $_SESSION["carrinho"][$i]["quantidade"]++;
        }
    }
    if (!$alt) {
        $produtos["id"] = $id;
        $produtos["quantidade"]= 1;
        $_SESSION["carrinho"][] = $produtos;   
    }
    redirecionar("carrinho/index");    
}

function remover($index){
    
    foreach($_SESSION["carrinho"] as $key => $produtos){
        
     
       if($index==$produtos["id"]){
           echo "Deu certo!!";
           
           echo $produtos["id"];
           unset ($_SESSION["carrinho"][$key]);
       }
       
    }
    
    $_SESSION["carrinho"] = array_values($_SESSION["carrinho"]);
    redirecionar("carrinho/index");   
}
