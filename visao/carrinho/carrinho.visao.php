
<h2>Carrinho</h2>

<table class="table">
    <thead>
        <tr>
            <th>Produto</th>
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
        <td><?=$produto['preco']?></td>
        <td><?=$produto['tamanho']?></td>
        <td><?=$produto['descricao']?></td>
        <td><a href="./carrinho/remover/<?=$produto["idproduto"];?>">Remover</a></td>
        
        
         
         
    </tr>
    <?php endforeach; ?>
</table>


<link rel="stylesheet" href="./publico/css/carrinho.css">	

<div id="comprafinal">
    <h1 class="letrasdesc">RESUMO DA COMPRA</h1>
					
        <div id="cupom">
            <h2 class="letrasdesc">CUPOM DE DESCONTO</h2>
            <input class="formspace"/>
            <a href="#"><button class="botao" type="submit"><strong>CALCULAR</strong></button></a>
        </div>
					
	<div class="frete">
            <h2 class="letrasdesc">FRETE</h2>
            <input class="formspace" type="text" name="Digite seu CEP" placeholder="Digite seu CEP"/>
            <a href="#"><button class="botao" type="submit"><strong>CALCULAR</strong></button></a>
            <a id="naoseicep" href="#"><p>Não sei meu CEP</p></a>
	</div>
					
	<div class="frete">
            <h2 id="letrafrete">FRETE:</h2>
            <h2 class="letrasdesc">TOTAL DA COMPRA: <span class="price"><b>R$ <?= $total ?></b></span></h2>
	</div>
    <a href="#"><button id="finalizabotao" type="submit"><strong>FINALIZAR COMPRA</strong></button></a>
				
</div>