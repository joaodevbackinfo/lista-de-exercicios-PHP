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
        <h2>Questão 05: Maior de Três Números</h2>
    </header>

    <main>

   <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $num3 = $_POST['num3'];

    $maior = $num1;

    if ($num2 > $maior) {
        $maior = $num2;
    }

    if ($num3 > $maior) {
        $maior = $num3;
    }

    echo "O maior número é: $maior";
    }
    ?>

<form method="post">
    Primeiro número: <input type="number" name="num1" required><br>
    Segundo número: <input type="number" name="num2" required><br>
    Terceiro número: <input type="number" name="num3" required><br>
    <button type="submit">Verificar Maior</button>
</form>


     
    </main>
</body>


</html>