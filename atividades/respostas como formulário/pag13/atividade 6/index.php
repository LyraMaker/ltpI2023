<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta-corrente</title>
</head>
<body>
    <form action="conta.php" method="post">
        <label for="saldo-inicio">Saldo no início do mês:</label>
        <input type="text" name="saldo-inicio" id="saldo-inicio"> <br>
        <label for="taxa">Taxa de rendimento:</label>
        <input type="text" name="taxa" id="taxa" placeholder="Se for 5% digite apenas o 5!"> <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>