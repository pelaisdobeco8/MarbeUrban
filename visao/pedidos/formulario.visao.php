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
    
   <br><br><button type="submit">Pronto</button>
</form>
