<!DOCTYPE html>

<html lang="eng">

<head>
    <meta charset="utf-8">
    <title>Meu Blog</title>
</head>

<body>

    <?php

        print anchor(base_url(), ' Home ') .
            anchor(base_url('administracao/postagens'), ' Postagens ') .
            anchor(base_url('administracao/logout'), ' Logout ') .
            heading('Adicionar nova postagem', 3);

        $atributos = array('name' => 'formulario_postagem',
            'id' => 'formulario_postagem');

        print validation_errors();

        print form_open(base_url('administracao/postagens/adicionar'), $atributos) .

            form_label('Título', 'txt_titulo') . br(1) .
            form_input('txt_titulo', set_value('txt_titulo')) . br(1) .
            form_label('Texto', 'txt_texto') . br(1) .
            form_textarea('txt_texto', set_value('txt_texto')) . br(1) .
            form_submit('btn_enviar', 'Cadastrar nova postagem') .

            form_close()

            . heading('Postagens Existentes');


        foreach ($postagens as $post) {
            print anchor(base_url('administracao/postagens/excluir/' .$post->id), 'Excluir ')
                . anchor(base_url('administracao/postagens/alterar/' . $post->id), 'Alterar ')
                .'Postagem: ' .date('d/m/Y', strtotime($post->data) ). '- ' . $post->titulo . br();
        }

    ?>

</body>

</html>