<h2>Listar Formas de Pagamento</h2>

<table class="table" border="1">
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
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?>  <a href="./FormaPagamento/ver/<?=$pagamento['idFormaPagamento']?>">Ver</a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?>  <a href="./FormaPagamento/editar/<?=$pagamento['idFormaPagamento']?>">Editar</a> <?php } ?></td>
        <td><?php if (acessoPegarPapelDoUsuario() == 'admin') {?>  <a href="./FormaPagamento/deletar/<?=$pagamento['idFormaPagamento']?>">Deletar</a> <?php } ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="./FormaPagamento/adicionar/" class="btn btn-primary">Nova forma de pagamento</a>

