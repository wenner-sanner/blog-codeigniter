<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Meu Blog</title>
</head>

<body>

<?php
    print anchor(base_url(), ' Home ')
        . anchor(base_url('fale-conosco'),' Fale Conosco ');


    heading('Meu Blog', 2);
    heading('Fale Conosco', 3);

    print validation_errors();

    $atributos =array('name' => 'formulario_contato', 'id' => 'formulario_contato');

    print form_open(base_url('welcome/enviar_mensagem'), $atributos) .

        form_label('Nome:', 'txt_nome') . br() .
        form_input('txt_nome', set_value('txt_nome')) . br() .
        form_label('E-mail', 'txt_email') . br() .
        form_input('txt_email', set_value('txt_email')) . br() .
        form_label('Mensagem', 'txt_mensagem') . br() .
        form_textarea('txt_mensagem', set_value('txt_mensagem')) . br() .
        form_submit('btn_enviar','Enviar Mensagem') .

    form_close();

?>

</body>

</html>
