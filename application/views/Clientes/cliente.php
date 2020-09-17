<html lang="en">
    <head>
        <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    </head>
    <body>
    <div class="container">
    <table class="table">   
        <tr>
            <th>Codigo</th>
            <th>Nome</th>
            <th>Servidor</th>
            <th>Status</th>
        </tr>

        <tr>
        <?php foreach($clientes as $cliente) : ?>
            <td><?=$cliente["Codigo"] ?></td>
            <td><?=$cliente["Nome"] ?></td>
            <td><?=$cliente["Servidor"] ?></td>
            <td><?=$cliente["status"] ?></td>
        </tr>
    
    <?php endforeach ?>
            </table>
        
            <h1>Cadastro de Clientes</h1>
            <?php
                echo form_open("clientes/cadastroCliente");

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
                echo form_input(array(
                    "status" => "status",
                    "class" => "form-control",
                    "id" => "status",
                    "type" => "ENUM ('ativo','inativo')",
                ));
        

                echo form_button(array(
                    "class" => "btn btn-primary",
                    "content" => "Cadastrar",
                    "type" => "submit"
                ));

                echo form_close();
                ?>
        <div>
    </body>
</html>