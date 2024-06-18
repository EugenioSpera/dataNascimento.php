<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recebe o valor enviado pelo formulário
    $idade = $_POST['idade'];

    // Calcula a idade em anos, meses e dias
    $idadeObj = new DateTime($idade);
    $agora = new DateTime('now');
    $intervalo = $agora->diff($idadeObj);

    // Extrai os componentes do intervalo
    $anos = $intervalo->y;
    $meses = $intervalo->m;
    $dias = $intervalo->d;
}


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado - Idade</title>
</head>
<body>
    <h1>Resultado - Idade</h1>

    <?php if (isset($anos) && isset($meses) && isset($dias)): ?>
        <p>Sua idade é: <?= $anos ?> anos, <?= $meses ?> meses e <?= $dias ?> dias.</p>
    <?php else: ?>
        <p>Nenhuma data de nascimento informada.</p>
    <?php endif; ?>

    <p><a href="index.php">Voltar</a></p>
</body>
</html>