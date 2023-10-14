<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moneda</title>
</head>
<body>
    <form action="practica5b-resultado.php" method="post">
        <label for="">Cantidad en euros:</label>
        <input type="text" name="euro" placeholder="introduce euros">
        <label for="opciones">Convertir a:</label>
        <select name="moneda" id="opciones">
            <option value="dolares">Dolares USA</option>
            <option value="libras">Libras esterlinas</option>
            <option value="yenes">yenes japoneses</option>
            <option value="francos">Francos suizos</option>
        </select>
        <input type="submit" value="Convertir">
    
    </form>
</body>
</html>