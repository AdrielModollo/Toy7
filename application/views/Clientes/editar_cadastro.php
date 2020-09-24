<html lang="en">
        <head>
            <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        </head>
        <body>
        <div class="container">
        <?= anchor('inicio/index','Voltar', array("class" => "btn btn-primary"))?>
        <table class="table">
            <h1>Editar cadastro de clientes</h1>
            <?php
                echo form_open("clientes/editar_cadastro");
                echo form_label("Nome", "Nome");    
                echo form_input(array(
                "name" => "Nome",
                "id" => "Nome",
                "class" => "form-control",
                "maxlength" => "255"
                ));

                echo form_label("Servidor", "Servidor");    
                echo form_input(array(
                "name" => "Servidor",
                "id" => "Servidor",
                "class" => "form-control",
                "maxlength" => "255"
                ));

                echo form_label("status", "status");
                $options = [
                    'ativo' => 'Ativo',
                    'inativo' => 'Inativo'
                ];
                echo form_dropdown('status', $options, 'large');
        
                echo form_button(array(
                    "class" => "btn btn-primary",
                    "content" => "Cadastrar",
                    "type" => "submit"
                ));

                echo form_close();
                ?>
                </table>
            <div>
        </body>
    </html>