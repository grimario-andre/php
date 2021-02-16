<!-- usando HMTML em PHP. -->
<h1><?php echo "título dentro do h1 " ?></h1>

<!--  usando html com php -->
<html>
    <head>
        <title>Dia<?php echo date('y'); ?></title>
    </head>
    <body>
        <h1>
            Estamos em <?php echo date('Y'); ?> e hoje é dia <?php echo date('d/m'); ?>
        </h1>
        <p>
            Esta página gerada ás <?php echo date('H') ?> horas e <?php echo date('i'); ?> minutos.
        </p>
    </body>
</html>