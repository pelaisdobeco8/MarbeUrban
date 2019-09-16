<?php

require_once "modelo/cupomModelo.php";

function adicionar () {
	if (ehPost ()) {
            $nomecupom = $_POST ["nomecupom"];
            $desconto = $_POST ["desconto"];
	
            $msg = adicionarCupom($nomecupom, $desconto);
            echo $msg;
            
           }else {
                
           }
           exibir ("cupom/formulario");
}

function listar () {
    $dados = array ();
    $dados["cupons"] = pegarTodosCupons();
    exibir ("cupom/listar", $dados);
}

function ver ($idcupom){
    $dados["cupons"] = pegarCupomPorId($idcupom);
    exibir ("cupom/visualizar" , $dados);
}

function deletar ($idcupom){
    $msg = deletarCupom($idcupom);
    redirecionar("./cupom/listar");
}

function editar ($idcupom) {
    if (ehPost()) {
        $nomecupom = $_POST["nomecupom"];
        $desconto = $_POST["desconto"];
        
        editarCupom ($idcupom, $nomecupom, $desconto);
        redirecionar ("cupom/listar");
    }else {
        $dados["cupons"] = pegarCupomPorId ($idcupom);
        exibir ("cupom/formulario", $dados);
    }
}
