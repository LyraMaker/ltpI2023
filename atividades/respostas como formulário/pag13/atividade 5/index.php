<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta-corrente</title>
</head>
<body>
    <form action="conta.php" method="post">
        <label for="numero">Número da conta:</label>
        <input type="text" name="numero" id="numero"> <br>
        <label for="saldo">Saldo atual da conta:</label>
        <input type="text" name="saldo" id="saldo"> <br>
        <label for="deposito">Valor de depósito:</label>
        <input type="text" name="deposito" id="deposito"> <br>
        <label for="saque">Valor de saque:</label>
        <input type="text" name="saque" id="saque">
        <input type="submit" value="Calcular">
    </form>
</body>
</html>