<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF--8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Inicial - Exercícios PHP</title>
    <link rel="stylesheet" href="./../../styles.css">
</head>

<body>

    <header>
        <h2>Questão 03: Horas trabalhadas</h2>
    </header>

    <main>

   <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $valor_hora = $_POST['valor_hora'];
    $horas_trabalhadas = $_POST['horas_trabalhadas'];
    $salario = $valor_hora * $horas_trabalhadas;

    echo "O salário do mês é: R$ $salario";
    }
    ?>

    <form method="post">
    Quanto você ganha por hora: <input type="number" name="valor_hora" step="0.01" required><br>
    Número de horas trabalhadas no mês: <input type="number" name="horas_trabalhadas" required><br>
    <button type="submit">Calcular Salário</button>
    </form>


    </main>
</body>


</html>