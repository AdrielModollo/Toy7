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
                    <th>Comando</th>
                    <th>Periodicidade</th>
                    <th>Horario</th>
                    <th>Minutos Esperado</th>
                    <th>Status Tarefa</th>
                    <th>Status Sistema</th>
                    <th>Data Cadastro</th>
                    <th>Projeto</th>
                    <th>Cliente</th>
                    <th>Linguagem</th>
                </tr>

                <tr>
                <?php foreach($tarefas as $tarefa) : ?>
                    <td><?=$tarefa["Codigo"] ?></td>
                    <td><?=$tarefa["Nome"] ?></td>
                    <td><?=$tarefa["Comando"] ?></td>
                    <td><?=$tarefa["Periodicidade"] ?></td>
                    <td><?=$tarefa["Horario"] ?></td>
                    <td><?=$tarefa["QuantidadeMinutosEsperadoExecucao"] ?></td>
                    <td><?=$tarefa["StatusTarefa"] ?></td>
                    <td><?=$tarefa["StatusSistema"] ?></td>
                    <td><?=$tarefa["DataCadastro"] ?></td>
                    <td><?=$tarefa["idProjeto"] ?></td>
                    <td><?=$tarefa["idCliente"] ?></td>
                    <td><?=$tarefa["idLinguagem"] ?></td>
                    <!--Exemplo de conversão de números em Real com Helper
                    <td><//?=numeroEmReais($tarefa["QuantidadeMinutosEsperadoExecucao"]) ?></td>
                     -->  
                </tr>
           
            <?php endforeach ?>
            </table>
        <div>
    </body>
</html>