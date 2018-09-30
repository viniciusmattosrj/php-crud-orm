<?php

require_once 'config.php';

use App\Model\Pessoa;

$pessoa = new Pessoa();
$consulta = Pessoa::all();

?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Document</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
        <table class="table table-striped">
            <thead>            
                <tr>
                    <th>Codigo</th>
                    <th>Nome</th>
                    <th>Idade</th>
                </tr>            
            </thead>

            <tbody>
            <?php foreach ($consulta as $item) { ?>
                <tr>
                    <td><?= $item->codigo ?></td>
                    <td><?= $item->nome   ?></td>
                    <td><?= $item->idade  ?></td>
                </tr>    
            <?php } ?>
            </tbody>
        </table>
        
        <script src="" async defer></script>
    </body>
</html>