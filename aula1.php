<?php

 $dados = [
    ["Clara","F","Arcadia"],
    ["Ernicio","M","Mocambique"],
    ["Gretta","F","Angola"],
    ["Jim","M","Arcadia"]
 ]

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TABELA</title>
 </head>
 <body>
    <table border="5px">
    <thead>
        <tr>
        <th>Nome</th>
        <th>Genero</th>
        <th>pais</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($dados as $item): ?>
            <tr>
                <td><?=$item[0] ?></td>
                <td><?=$item[1] ?></td>
                <td><?=$item[3] ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
    </table>
 </body>
 </html>