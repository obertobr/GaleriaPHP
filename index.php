<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/galeria.css">
        <title>galeria</title>
    </head>
    <body>
        <div id="cabecalho">GALERIA</div>
        <div id="menu">
            <a href="upload.php"><div id ="modulo">upload imagem</div></a>
        </div>
        <div id="jogos">

            <?php
                $arq = fopen('nomes.txt','r');
                while(true) {
                    $linha = fgets($arq);
                    if ($linha==null) break;
                    
                    echo "<div><figure> \n";
                    echo "<img src=\"img/$linha\" > \n";
                    echo "<figcaption>". substr($linha,0 , strrpos($linha, '.')). "</figcaption> \n";
                    echo "</figure></div> \n";
                }
                fclose($arq)
            ?>
            
        </div>
    </body>
</html>