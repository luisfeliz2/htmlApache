<?php
$eur_to_usd = 1.18;
$eur_to_gbp = 0.85;
$usd_to_eur = 0.85;
$usd_to_gbp = 0.72;
$gbp_to_eur = 1.18;
$gbp_to_usd = 1.39;

$monedas = ['EUR', 'USD', 'GBP'];
$moneda_origen = 'EUR';
$moneda_destino = 'USD';
$cantidad = 100;
$mensaje_error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $moneda_origen = $_POST['moneda_origen'];
    $moneda_destino = $_POST['moneda_destino'];
    $cantidad = $_POST['cantidad'];

    if (!is_numeric($cantidad) || $cantidad <= 0) {
        $mensaje_error = 'La cantidad debe ser un número positivo.';
    }

    if ($moneda_origen === $moneda_destino) {
        $mensaje_error = 'Selecciona monedas diferentes.';
    }
}


$cantidad_convertida = 0;

if (empty($mensaje_error)) {
    if ($moneda_origen === 'EUR') {
        if ($moneda_destino === 'USD') {
            $cantidad_convertida = $cantidad * $eur_to_usd;
        } elseif ($moneda_destino === 'GBP') {
            $cantidad_convertida = $cantidad * $eur_to_gbp;
        }
    } elseif ($moneda_origen === 'USD') {
        if ($moneda_destino === 'EUR') {
            $cantidad_convertida = $cantidad * $usd_to_eur;
        } elseif ($moneda_destino === 'GBP') {
            $cantidad_convertida = $cantidad * $usd_to_gbp;
        }
    } elseif ($moneda_origen === 'GBP') {
        if ($moneda_destino === 'EUR') {
            $cantidad_convertida = $cantidad * $gbp_to_eur;
        } elseif ($moneda_destino === 'USD') {
            $cantidad_convertida = $cantidad * $gbp_to_usd;
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Conversor de Monedas</title>
</head>
<body>
    <h1>Conversor de Monedas</h1>
    <form method="post">
        <label for="moneda_origen">De:</label>
        <select name="moneda_origen">
            <?php foreach ($monedas as $moneda): ?>
                <option value="<?php echo $moneda; ?>" <?php if ($moneda === $moneda_origen) echo 'selected'; ?>><?php echo $moneda; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="moneda_destino">A:</label>
        <select name="moneda_destino">
            <?php foreach ($monedas as $moneda): ?>
                <option value="<?php echo $moneda; ?>" <?php if ($moneda === $moneda_destino) echo 'selected'; ?>><?php echo $moneda; ?></option>
            <?php endforeach; ?>
        </select>

        <label for="cantidad">Cantidad:</label>
        <input type="number" name="cantidad" value="<?php echo $cantidad; ?>">
        <input type="submit" value="Convertir">
    </form>

    <?php if (!empty($mensaje_error)): ?>
        <p><?php echo $mensaje_error; ?></p>
    <?php elseif ($cantidad_convertida > 0): ?>
        <p><?php echo $cantidad . ' ' . $moneda_origen . ' son ' . $cantidad_convertida . ' ' . $moneda_destino; ?></p>
    <?php endif; ?>
</body>
</html>
