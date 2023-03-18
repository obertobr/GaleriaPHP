<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/galeria.css">
        <title>upload de imagens</title>
    </head>
    <body>
        <div id="cabecalho">GALERIA</div>
        <div id="menu">
            <a href="/galeria"><div id ="modulo">imagens</div></a>
            <a href="http://youtube.com/obertobr"><div id ="modulo">youtube</div></a>
            <a href="http://steamcommunity.com/id/obertobr"><div id ="modulo">steam</div></a>
        </div>
        <div id="upload">
            <form method="POST" enctype="multipart/form-data">
                <input type="file" name="pic" accept="image/*"> <br>
                <input type="text" name="name" placeholder="nome da imagem">
                <button type="submit">Enviar imagem</button>
             </form>
             <?php
                if(isset($_FILES['pic']))
                {
                    $ext = strtolower(substr($_FILES['pic']['name'],-4));
                    $nome = $_POST['name'] . $ext;
                    move_uploaded_file($_FILES['pic']['tmp_name'], './img/'.$nome);
                    $arq = fopen("nomes.txt","a");
                    fwrite($arq,$nome."\n");
                    fclose($arq);
                    echo("<br> ". $_POST['name']. " enviada com sucesso!");
                } 
            ?>
        </div>
    </body>
</html>