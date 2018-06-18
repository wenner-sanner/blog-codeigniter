<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="utf-8">
    <title>
        Meu blog
    </title>
</head>

<body>

    <?php
        echo anchor(base_url(), ' Home ') .
            anchor(base_url('fale-conosco'), ' Fale Conosco ');
        heading('Meu Blog', 2);
    ?>

    <h3>A página que você esta tentando acessar não existe ou seu endereço
        pode ter sido modificado</h3>

    <a href="javascript:history.go(-1)">Voltar</a>
</body>
</html>