<br> <br> <br> <br>	
<div id="slide">
    <img class="mySlides" src="publico/imagens/slider1.jpg" style="width:100%">
    <img class="mySlides" src="publico/imagens/slider2.jpg" style="width:100%">
    <img class="mySlides" src="publico/imagens/slider3.2.png" style="width:100%">

    <script>
        var myIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            myIndex++;
            if (myIndex > x.length) {
                myIndex = 1
            }
            x[myIndex - 1].style.display = "block";
            setTimeout(carousel, 2000); // Change image every 2 seconds
        }
    </script>
</div>
<div id="destaqim">
    <div id="parteim">
        <h2 id="destaque"><strong> DESTAQUES </strong> </h2>
        <div id="p1">
            <a id="paragraf1" href="/MarbeUrban/produtos.html"><p>COLEÇAO COMPLETA ></p></a>
        </div>
    </div>
    <br>     <br>        <br>

    <div id="r3">
        <?php foreach ($produtos as $produto):?>
            <a href="produto/ver/<?=$produto['idproduto']?>">
                <img id="roupa1" src="<?=$produto['imagem']?>" onMouseOver="this.src = '<?=produto['imagem']?>'" onMouseOut="this.src = '<?=produto['imagem']?>'" title="<?=produto['nomeproduto']?>">
            </a>
        <?php endforeach;?>
        <a href="#"><img id="roupa1"src="publico/imagens/modelo1.PNG"
                         onMouseOver="this.src = 'publico/imagens/modelo1.2.PNG'"
                         onMouseOut="this.src = 'publico/imagens/modelo1.PNG'"
                         onClick="location = '/MarbeUrban/descricao.html'" title="MOLETOM ESPORTE AZUL MARINHO"></a>
        <a href="#"><img id="roupa2"src="publico/imagens/modelo4.PNG"
                         onMouseOver="this.src = 'publico/imagens/modelo4.2.PNG'"
                         onMouseOut="this.src = 'publico/imagens/modelo4.PNG'"
                         onClick="location = '/MarbeUrban/descricao4.html'" title="MOLETOM ALFA VERMELHO BORDÔ"></a>

        <a href="#"><img id="roupa3"src="publico/imagens/modelo7.PNG"
                         onMouseOver="this.src = 'publico/imagens/modelo7.2.PNG'"
                         onMouseOut="this.src = 'publico/imagens/modelo7.PNG'"
                         onClick="location = '/MarbeUrban/descricao7.html'" title="MOLETOM FEMININO ROSA"></a>
    </div>

    <?php foreach ($produtos as $produto): ?>
    <div id="escritacompra">
            <h3 class="nomemoletom"><strong><?=$produto['nomeproduto']?></strong></h3>
            <h4>Por: <strong>3X</strong> de R$<?=$produto['preco']?></h4>
            <p>no cartao MarbeUrban <strong>sem juros</strong></p>
            <h4>ou: <strong>R$117,90</strong> a vista</h4>
        </div>
    <?php endforeach; ?>
    <div id="escritacompra">
        <h3 class="nomemoletom"><strong>Preppy Listrado Marinha</strong></h3>
        <h4>Por: <strong>3X</strong> de R$39,30</h4>
        <p>no cartao MarbeUrban <strong>sem juros</strong></p>
        <h4>ou: <strong>R$117,90</strong> a vista</h4>
    </div>

    <div id="escritacompra2">
        <h3 class="nomemoletom"><strong>Moletom Alfa vermelho bordô</strong></h3>
        <h4>Por: <strong>4X</strong> de R$59,10</h4>
        <p>no cartao MarbeUrban <strong>sem juros</strong></p>
        <h4>ou: <strong>R$236,40</strong> a vista</h4>
    </div>

    <div id="escritacompra3">
        <h3 class="nomemoletom"><strong>Casual Simples Rosa</strong></h3>
        <h4>Por: <strong>3X</strong> de R$44,70</h4>
        <p>no cartao MarbeUrban <strong>sem juros</strong></p>
        <h4>ou: <strong>R$134,10</strong> a vista</h4>
    </div>

    <div id="r6">
        <a href="#"><img id="roupa4" src="publico/imagens/modelo5.PNG"
                         onMouseOver="this.src = 'publico/imagens/modelo5.2.PNG'"
                         onMouseOut="this.src = 'publico/imagens/modelo5.PNG'"
                         onClick="location = '/MarbeUrban/descricao5.html'" title="MOLETOM COLEÇAO ALVO-X ROSA DETALHE"></a>

        <a href="#"><img id="roupa5"src="publico/imagens/modelo8.PNG"
                         onMouseOver="this.src = 'publico/imagens/modelo8.2.PNG'"
                         onMouseOut="this.src = 'publico/imagens/modelo8.PNG'"
                         onClick="location = '/MarbeUrban/descricao8.html'" title="MOLETOM AMARELO PLANETA"></a>

        <a href="#"><img id="roupa6"src="publico/imagens/modelo3.PNG"
                         onMouseOver="this.src = 'publico/imagens/modelo3.2.PNG'"
                         onMouseOut="this.src = 'publico/imagens/modelo3.PNG'"
                         onClick="location = '/MarbeUrban/descricao3.html'" title="MOLETOM COLEÇAO ALVO-X VERMELHO"></a>
    </div>

    <div id="escritacompra4">
        <h3 class="nomemoletom"><strong>Casual Listrado Rosa</strong></h3>
        <h4>Por: <strong>3X</strong> de R$44,70</h4>
        <p>no cartao MarbeUrban <strong>sem juros</strong></p>
        <h4>ou: <strong>R$134,10</strong> a vista</h4>
    </div>

    <div id="escritacompra5">
        <h3 class="nomemoletom"><strong>Moletom Amarelo Space Face</strong></h3>
        <h4>Por: <strong>3X</strong> de R$44,70</h4>
        <p>no cartao MarbeUrban <strong>sem juros</strong></p>
        <h4>ou: <strong>R$134,10</strong> a vista</h4>
    </div>

    <div id="escritacompra6">
        <h3 class="nomemoletom"><strong>Borgonha Colorblock Casual</strong></h3>
        <h4>Por: <strong>3X</strong> de R$44,70</h4>
        <p>no cartao MarbeUrban <strong>sem juros</strong></p>
        <h4>ou: <strong>R$134,10</strong> a vista</h4>
    </div>
</div>

<div id="divforms">
    <div id="telefone">
        <img id="telimg" src="publico/imagens/telefone.png">
        <h2 class="hforms">TELEFONE</h2>
        <h3 class="hforms">(15)3356-7896</h3>
    </div>

    <div id="pague">
        <img class="iconsforms" src="publico/imagens/pagamento.jpg">
        <h2 class="hforms">PAGAMENTO</h2>
        <h3 class="hforms">Em até 5X</h3>
    </div>

    <div id="contato">
        <img class="iconsforms" src="publico/imagens/carta.png">
        <h2 class="hforms">CONTATE-NOS</h2>
        <h3 class="hforms">marbeurban@contatoinforme.com</h3>
    </div>
</div>


<br><br>	

