<html>
    <head>
        <link rel="stylesheet" href="<?=base_url('css/bootstrap.css')?>">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    </head>
    <body>
    <?= anchor('inicio/index','Voltar', array("class" => "btn btn-primary"))?>
        <div class="container">
        <h1>Cadastro de tarefas</h1>
        <?php
        echo form_open("tarefas/novo");

        echo form_label("Nome", "Nome");
        echo form_input(array(
            "name" => "Nome",
            "class" => "form-control",
            "id" => "Nome",
            "maxlength" => "255",
        ));


        echo form_label("Comando", "Comando");
        echo form_input(array(
            "Comando" => "Comando",
            "class" => "form-control",
            "id" => "Comando",
            "maxlength" => "255",
            "type" => "TEXT",
        ));


        echo form_label("Periodicidade", "Periodicidade");
        echo form_input(array(
            "Periodicidade" => "Periodicidade",
            "class" => "form-control",
            "id" => "Periodicidade",
            "type" => "ENUM",
        ));

        echo form_label("Horario", "Horario");
        echo form_input(array(
            "Horario" => "Horario",
            "class" => "form-control",
            "id" => "Horario",
            "type" => "TIME",
        ));

        echo form_label("QuantidadeMinutosEsperadoExecucao ", "QuantidadeMinutosEsperadoExecucao ");
        echo form_input(array(
            "QuantidadeMinutosEsperadoExecucao " => "QuantidadeMinutosEsperadoExecucao ",
            "class" => "form-control",
            "id" => "QuantidadeMinutosEsperadoExecucao ",
            "type" => "INT",
        ));

        echo form_label("StatusTarefa ", "StatusTarefa ");
        echo form_input(array(
            "StatusTarefa " => "StatusTarefa ",
            "class" => "form-control",
            "id" => "StatusTarefa ",
            "type" => "ENUM",
        ));

        echo form_label("StatusSistema ", "StatusSistema ");
        echo form_input(array(
            "StatusSistema " => "StatusSistema ",
            "class" => "form-control",
            "id" => "StatusSistema ",
            "type" => "TINYINT",
        ));

        echo form_label("DataCadastro ", "DataCadastro ");
        echo form_input(array(
            "DataCadastro " => "DataCadastro ",
            "class" => "form-control",
            "id" => "DataCadastro ",
            "type" => "DATETIME",
        ));

        echo form_label("idProjeto ", "idProjeto ");
        echo form_input(array(
            "idProjeto " => "idProjeto ",
            "class" => "form-control",
            "idProjeto" => "idProjeto ",
            "type" => "INT",
        ));

        echo form_label("idCliente ", "idCliente ");
        echo form_input(array(
            "idCliente " => "idCliente ",
            "class" => "form-control",
            "idCliente" => "idCliente ",
            "type" => "INT",
        ));

        echo form_label("idLinguagem ", "idLinguagem ");
        echo form_input(array(
            "idLinguagem " => "idLinguagem ",
            "class" => "form-control",
            "idLinguagem" => "idLinguagem ",
            "type" => "option",
        ));

        echo form_button(array(
            "class" => "btn btn-primary",
            "content" => "Cadastrar",
            "type" => "submit"
        ));

        echo form_close();
        ?>
    
        </div>
    </body>
</html>