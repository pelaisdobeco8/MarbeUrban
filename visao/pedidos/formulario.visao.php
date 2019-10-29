<h3>Selecione uma forma de pagamento: </h3>

<form action="" method="POST">
<select name="idFormaPagamento" style="padding: 10px 52px;">
        <?php foreach ($pagamentos as $pagamento):?>
        <option value="<?=$pagamento['idFormaPagamento']?>"><?=$pagamento['descricao']?></option>
        <?php endforeach;?>
</select>

<h3>Qual é o seu endereço?</h3>
<select name="idendereco" style="padding: 10px 52px;">
        <?php foreach ($enderecos as $endereco):?>
        <option value="<?=$endereco['idendereco']?>"><?=$endereco['logradouro']?></option>
        <?php endforeach;?>
</select>

<h3>Confira seus produtos</h3>

<table class="table">
    <thead>
        <tr>
            <th>Produto</th>
            <th>Imagem</th>
            <th>Preço</th>
            <th>Tamanho</th>
             <th>Descrição</th>
            <th> Remover </th>
            <th> Quantidade </th>
        </tr>
    </thead>
    
  
    <?php ($produtos); foreach($produtos as $produto): ?>
    <tr>
        <td><?=$produto['nomeproduto']?></td>
        <td><img src="<?=$produto['imagem']?>" alt="imagem" width="10%"></td>
        <td><?=$produto['preco']?></td>
        <td><?=$produto['tamanho']?></td>
        <td><?=$produto['descricao']?></td>
        <td><a href="./carrinho/remover/<?=$produto["idproduto"];?>">Remover</a></td>
        
        
         
         
    </tr>
    <?php endforeach; ?>
</table>

   <br><br><button type="submit">Pronto</button>
</form>
