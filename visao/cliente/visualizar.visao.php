<h2>Detalhes do cliente</h2>

<p>Id: <?=$usuarios['idusuario']?></p>
<p>Nome: <?=$usuarios['nomeusuario']?></p>
<p>E-mail: <?=$usuarios['email']?></p>
<p>Senha: <?=$usuarios['senha']?></p>
<p>CPF: <?=$usuarios['cpf']?></p>
<p>Data de Nascimento: <?=$usuarios['datadenascimento']?></p>
<p>Sexo: <?=$usuarios['sexo']?></p>

<a href="./endereco/adicionar/<?=$usuarios['idusuario']?>" class="btn btn-primary">Novo endereco</a>