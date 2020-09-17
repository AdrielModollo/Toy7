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
                </tr>

                <tr>
                <?php foreach($programadores as $programador) : ?>
                    <td><?=$programador["Codigo"] ?></td>
                    <td><?=$programador["Nome"] ?></td>
                </tr>
        
            <?php endforeach ?>
</table>
<div>
    </body>
</html>