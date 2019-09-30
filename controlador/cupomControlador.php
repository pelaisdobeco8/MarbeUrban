<?php

require_once "modelo/cupomModelo.php";

/** admin */
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

/** admin */
function listar () {
    $dados = array ();
    $dados["cupons"] = pegarTodosCupons();
    exibir ("cupom/listar", $dados);
}

/** admin */
function ver ($idcupom){
    $dados["cupons"] = pegarCupomPorId($idcupom);
    exibir ("cupom/visualizar" , $dados);
}

/** admin */
function deletar ($idcupom){
    $msg = deletarCupom($idcupom);
    redirecionar("./cupom/listar");
}

/** admin */
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
