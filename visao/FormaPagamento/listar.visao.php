<h2>Listar Formas de Pagamento</h2>

<table class="table">
    <thead>
        <tr>
            <th>Descrição</th>
            <th>Ver Detalhes</th>
            <th>Alterar</th>
            <th>Deletar</th>
            
            
        </tr>
    </thead>
    <?php foreach ($pagamentos as $pagamento): ?>
    <tr>
        <td><?=$pagamento['descricao']?></td>
        <td><a href="./FormaPagamento/ver/<?=$pagamento['idFormaPagamento']?>">Ver</a></td>
        <td><a href="./FormaPagamento/editar/<?=$pagamento['idFormaPagamento']?>">Editar</a></td>
        <td><a href="./FormaPagamento/deletar/<?=$pagamento['idFormaPagamento']?>">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="./FormaPagamento/adicionar/" class="btn btn-primary">Nova forma de pagamento</a>

