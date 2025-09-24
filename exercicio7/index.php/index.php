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
        <h2>Questão 07: Fatorial </h2>
    </header>

    <main>

   <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $num = $_POST['num'];
    $fatorial = 1;

    for ($i = $num; $i >= 1; $i--) {
        $fatorial *= $i;
    }

    echo "O fatorial de $num é: $fatorial";
    }
    ?>

<form method="post">
    Digite um número inteiro: <input type="number" name="num" min="0" required><br>
    <button type="submit">Calcular Fatorial</button>
</form>

        
        </main>
        
</body>


</html>