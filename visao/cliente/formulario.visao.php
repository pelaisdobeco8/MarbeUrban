<h2>Cadastrar um usuário: </h2>

<?php
    if (ehPost()){
        foreach ($errors as $erro) {
            echo "$erro <br>";
        }
    }
?>

<form action="" method="POST">
    <input type="text" placeholder="Nome" name="nomeusuario"><br><br>
    <input type="text" placeholder="E-mail"  name="email"><br><br>
    <input type="password" placeholder="Senha"  name="senha"><br><br>
    <input type="text" placeholder="CPF"  name="cpf"><br><br>
    <input type="text" placeholder="Data: dd/mm/aaaa"  name="datadenacimento"><br><br>
	
    <input type="radio" name="sexo" value="M"> Masculino
    <input type="radio" name="sexo" value="F"> Feminino
    <input type="radio" name="sexo" value="O"> Outro <br><br>
        
    <input type="text" placeholder="Tipo de usuário"  name="tipousuario">
    
	<br><br><button type="submit">Cadastrar</button>
</form>
