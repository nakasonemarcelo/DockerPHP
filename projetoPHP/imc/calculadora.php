<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CaculadoraIMC</title>
</head>
<body>
    <?php

    function calcularIMC() {
        $altura = str_replace(',', '.', $_REQUEST['altura']);
        $peso = $_REQUEST['peso'];
        return $peso / ($altura * $altura);
    }
    ?>

    <h1>Seu IMC é <?php echo calcularIMC() ?> você está meio gordinho!</h1>
</body>
</html>