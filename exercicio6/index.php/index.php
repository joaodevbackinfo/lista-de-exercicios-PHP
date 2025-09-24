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
        <h2>Questão 06: Ordem Decrescente</h2>
    </header>

    <main>

   <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $numeros = [$num1, $num2, $num3];
    rsort($numeros);

    echo "Números em ordem decrescente: " . implode(", ", $numeros);
    }
?>

<form method="post">
    Primeiro número: <input type="number" name="num1" required><br>
    Segundo número: <input type="number" name="num2" required><br>
    Terceiro número: <input type="number" name="num3" required><br>
    <button type="submit">Ordenar</button>
</form>

    
    </main>
</body>


</html>