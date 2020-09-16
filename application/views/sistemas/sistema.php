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
                    <th>Projeto</th>
                    <th>Programador</th>
                    <th>Cliente</th>
                </tr>

                <tr>
                <?php foreach($sistemas as $sistema) : ?>
                    <td><?=$sistema["codigo"] ?></td>
                    <td><?=$sistema["idProjeto"] ?></td>
                    <td><?=$sistema["idProgramador"] ?></td>
                    <td><?=$sistema["cliente_Codigo"] ?></td>
                </tr>
           
            <?php endforeach ?>
            </table>
        <div>
    </body>
</html>