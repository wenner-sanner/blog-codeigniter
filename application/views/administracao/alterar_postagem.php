<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Meu Blog</title>
</head>

<body>

<?php

    print anchor(base_url(), ' Home ') .
        anchor(base_url('administracao/postagens'), ' Postagens ') .
        anchor(base_url('administracao/logout'), ' Logout ') .
        heading('Alterar postagem', 3);

    $atributos = array('name' => 'formulario_postagem',
        'id' => 'formulario_postagem');

    print form_open(base_url('administracao/postagens/salvar_alteracao'), $atributos)
        . form_hidden('id', $postagem[0]->id)
        . form_label('Titulo', 'txt_titulo') . br()
        . form_input('txt_titulo', $postagem[0]->titulo) . br()
        . form_label('Texto', 'txt_texto') . br()
        . form_textarea('txt_texto', $postagem[0]->texto) . br()
        . form_submit('btn_enviar', 'Salvar Postagem')
        .form_close();


?>

</body>
</html>