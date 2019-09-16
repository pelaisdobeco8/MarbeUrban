<h2>Listar Endereços</h2>

<table class="table">
    <thead>
        <tr>
            <th>Logradouro</th>
            <th>Numero</th>
            <th>Complemento</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>CEP</th>
            <th>Ver Detalhes</th>
            <th>Alterar</th>
            <th>Deletar</th>
            
        </tr>
    </thead>
    <?php foreach ($enderecos as $endereco): ?>
    <tr>
        <td><?=$endereco['logradouro']?></td>
        <td><?=$endereco['numero']?></td>
        <td><?=$endereco['complemento']?></td>
        <td><?=$endereco['bairro']?></td>
        <td><?=$endereco['cidade']?></td>
        <td><?=$endereco['cep']?></td>
        <td><a href="./endereco/ver/<?=$endereco['idendereco']?>">Ver</a></td>
        <td><a href="./endereco/editar/<?=$endereco['idendereco']?>">Editar</a></td>
        <td><a href="./endereco/deletar/<?=$endereco['idendereco']?>">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>

