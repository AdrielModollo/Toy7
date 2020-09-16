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
        <div>
    </body>
</html>