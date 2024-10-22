<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Cálculo da Média</title>
</head>
<body>
    <h1>Cálculo da Média de Três Valores</h1>
    <form method="post" action="">
        <label for="valor1">Valor 1:</label>
        <input type="number" name="valor1" required><br>
        
        <label for="valor2">Valor 2:</label>
        <input type="number" name="valor2" required><br>
        
        <label for="valor3">Valor 3:</label>
        <input type="number" name="valor3" required><br>
        
        <input type="submit" value="Calcular Média">
    </form>

    <?php if ($media > 0): ?>
        <h2>Média: <?php echo number_format($media, 2); ?></h2>
        <p><?php echo $resultado; ?></p>
    <?php endif; ?>
</body>
</html>