<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Meu Blog</title>
</head>

<body>


    <?php
        print anchor(base_url(), ' Home ')
        . anchor(base_url('fale-conosco'), ' Fale Conosco ') .
            anchor(base_url('administracao/postagens'), ' Postagens ');
    ?>

    <h2>Meu blog</h2>
    <h3>Postagens recentes</h3>
    <?php
        foreach ($postagens as $post) {
           $lista_urls[] = anchor(base_url('detalhes/' . $post->id),
           $post->titulo);
        }

        print ul($lista_urls);
    ?>

</body>
</html>