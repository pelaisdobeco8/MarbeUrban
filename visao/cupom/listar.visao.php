<h2>Listar Cupons</h2>

<table class="table" border="1">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Desconto</th>
            <th>Ver Detalhes</th>
            <th>Alterar</th>
            <th>Deletar</th>
            
        </tr>
    </thead>
    <?php foreach ($cupons as $cupom): ?>
    <tr>
        <td><?=$cupom['nomecupom']?></td>
        <td><?=$cupom['desconto']?></td> 
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./cupom/ver/<?=$cupom['idcupom']?>">Ver</a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?><a href="./cupom/editar/<?=$cupom['idcupom']?>">Editar</a> <?php } ?></td>
        <td> <?php if (acessoPegarPapelDoUsuario() == 'admin') {?><a href="./cupom/deletar/<?=$cupom['idcupom']?>">Deletar</a> <?php } ?></td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="./cupom/adicionar/" class="btn btn-primary">Novo cupom</a>

