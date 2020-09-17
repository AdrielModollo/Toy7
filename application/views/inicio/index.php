<html lang="en">
        <head>
            <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?>">
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
        </head>
        <body>
        <div class="container">
            <?php if($this->session->flashdata("success"))  : ?>
                <p class="alert alert-success"><?= $this->session->flashdata("success") ?></p>
            <?php endif ?>
            <?php if($this->session->flashdata("danger"))  : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("danger") ?></p>
            <?php endif ?>
            

        <?php if($this->session->userdata("usuario_logado")) : ?>
            <?= anchor('sistemas/sistema','Sistemas', array("class" => "btn btn-primary"))?>
            <?= anchor('clientes/cliente','Clientes', array("class" => "btn btn-primary"))?>
            <?= anchor('tarefas/listarTarefas','Tarefas', array("class" => "btn btn-primary"))?>
            <?= anchor('linguagens/linguagem','linguagens', array("class" => "btn btn-primary"))?>
            <?= anchor('projetos/projeto','Projetos', array("class" => "btn btn-primary"))?>
            <?= anchor('programadores/programador','Programadores', array("class" => "btn btn-primary"))?>
            <?= anchor('usuarios/cadastro','Usuarios', array("class" => "btn btn-primary"))?>
            <?= anchor('login/logout','Logout', array("class" => "btn btn-primary"))?>
        <?php else : ?>    
            <h1> Login</h1>
            <?php
            echo form_open("login/autenticar");

            echo form_label("Email", "email");
            echo form_input(array(
            "name" => "email",
            "id" => "email",
            "class" => "form-control",
            "maxlength" => "255"
            ));

            echo form_label("Senha", "senha");
            echo form_password(array(
            "name" => "senha",
            "id" => "senha",
            "class" => "form-control",
            "maxlength" => "255"
            ));

            echo form_button(array(
            "class" => "btn btn-primary",
            "content" => "Login",
            "type" => "submit"
            ));

            echo form_close();
            ?>
            <?php endif ?>
        <div>
    </body>
</html>