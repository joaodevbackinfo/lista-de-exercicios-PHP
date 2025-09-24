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
        <h2>Questão 04: Tinta para Pintura</h2>
    </header>

    <main>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $area = $_POST['area'];
    $litros = $area / 3; 
    echo "Você precisará de " . ceil($litros) . " litros de tinta para pintar $area m².";
    }
    ?>

    <form method="post">
    Digite o tamanho da área a ser pintada (m²): <input type="number" name="area" step="0.01" required><br>
    <button type="submit">Calcular Tinta</button>
    </form>

    </main>
</body>


</html>