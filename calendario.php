<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- adicionar função nova linha -->
    <?php 
        function linha ()
        {
            return "
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            ";
        }

        // adicionar função calendario 
        function calendario()
        {
            $calendario = '';
            $dia = 1;
            $semana = [];
            while ($dia <= 31 ){
                array_push($semana,$dia);

                if (count($semana == 7)) {
                    $calendario .= linha($semana);
                    $semana = [];
                }
                $dia ++; 
            }
        }
    ?>

    
    <table border="1">
        <tr>
            <th>DOM</th>
            <th>SEG</th>
            <th>TER</th>
            <th>QUA</th>
            <th>QUI</th>
            <th>SEX</th>
            <th>SAB</th>
        </tr>
    </table>
    <!-- Fazer chamada da função nova lina -->
    <?php echo linha(); ?>
    <?php echo linha(); ?>
    <?php echo linha(); ?>
    <?php echo linha(); ?>
    <?php echo linha(); ?>
</body>
</html>