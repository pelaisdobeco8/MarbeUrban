<h2>Listar Usuarios</h2>

<table class="table">
    <thead>
        <tr>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Senha</th>
            <th>CPF</th>
            <th>Data de Nascimento</th>
            <th>Sexo</th>
            <th>Ver detalhes</th>
            <th>Alterar Dados</th>
            <th>Deletar o usuario</th>
            
        </tr>
    </thead>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>
        <td><?=$usuario['nomeusuario']?></td>
        <td><?=$usuario['email']?></td>
        <td><?=$usuario['senha']?></td>
        <td><?=$usuario['cpf']?></td>
        <td><?=$usuario['datadenascimento']?></td>
        <td><?=$usuario['sexo']?></td>
        <td><a href="./cliente/ver/<?=$usuario['idusuario']?>">Ver</a></td>
        <td><a href="./cliente/editar/<?=$usuario['idusuario']?>">Editar</a></td>
        <td><a href="./cliente/deletar/<?=$usuario['idusuario']?>">Deletar</a></td>
    </tr>
    <?php endforeach; ?>
</table>




