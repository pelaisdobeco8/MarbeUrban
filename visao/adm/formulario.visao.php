<html> 
    <head>
        <link rel="stylesheet" href="./publico/css/app.css">
    </head>
    
    <body>	
        <div id="opadm">
            <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./adm/listaradm"> ESTOQUE</a> <?php } ?> 
            <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./adm/pegarcategoria"> PRODUTOS POR CATEGORIA </a> <?php } ?>
            <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./adm/pegarcategoria"> DATAS </a> <?php } ?>
            <?php if (acessoPegarPapelDoUsuario() == 'admin') {?> <a href="./adm/pegarcategoria"> FATURAMENTO </a> <?php } ?>
        </div>  
    </body>
</html>