<?php

    require_once('CalcConsumo.class.php');

    $calcConsumo = new CalcConsumo();

    if(isset($_POST['submit'])){
        $wTotal=$_POST['wTotal'];
        $time=$_POST['time'];

        $consumPrice = $calcConsumo->calcConsum($time, $wTotal);

        echo("<script type='text/javascript'> var answer = alert('O consumo total é de R$ $consumPrice'); </script>");
    }

?>

<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Calcular consumo de Eletricidade</title>
</head>

<body>
    <div class="container my-5">
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Watts totais:</label>
                <input type="number" class="form-control" placeholder="Insira a quantidade total de Watts" name="wTotal">
            </div>

            <div class="mb-3">
                <label class="form-label">tempo de consumo (em horas):</label>
                <input type="number" step="0.01" class="form-control" placeholder="Insira o tempo de consumo em horas" name="time">
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</body>

</html>