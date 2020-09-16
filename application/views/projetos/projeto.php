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
                    <th>Descrição</th>
                </tr>

                <tr>
                <?php foreach($projetos as $projeto) : ?>
                    <td><?=$projeto["codigo"] ?></td>
                    <td><?=$projeto["nome"] ?></td>
                    <td><?=$projeto["descricao"] ?></td>
                </tr>
           
            <?php endforeach ?>
            </table>
        <div>
    </body>
</html>