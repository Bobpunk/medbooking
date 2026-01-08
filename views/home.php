<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title><?= $titulo; ?> - CashFlow</title> <style>
        body { font-family: sans-serif; text-align: center; padding: 50px; background-color: #f4f4f4; }
        .card { background: white; padding: 20px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1); display: inline-block; }
        h1 { color: #2c3e50; }
        .saldo { color: #27ae60; font-size: 24px; font-weight: bold; }
    </style>
</head>
<body>

    <div class="card">
        <h1>👋 Olá, <?= $usuario; ?>!</h1>
        <p>Bem-vindo ao seu <?= $titulo; ?>.</p>
        
        <hr>
        
        <p>Seu saldo atual é:</p>
        <div class="saldo">R$ <?= number_format($saldo, 2, ',', '.'); ?></div>
    </div>

</body>
</html>