<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['anagrafica'] = [
        'eta' => $_POST['eta'] ?? '',
        'sesso' => $_POST['sesso'] ?? '',
        'altezza' => $_POST['altezza'] ?? '',
        'peso' => $_POST['peso'] ?? '',
        'livello' => $_POST['livello'] ?? ''
    ];
    header('Location: sports.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrazione</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
<h2>Registrazione</h2>
<form method="post" action="registration.php">
    <label>Età:
        <input type="number" name="eta" required>
    </label>
    <label>Sesso:
        <select name="sesso">
            <option value="M">M</option>
            <option value="F">F</option>
        </select>
    </label>
    <label>Altezza (cm):
        <input type="number" name="altezza" required>
    </label>
    <label>Peso (kg):
        <input type="number" name="peso" required>
    </label>
    <label>Livello:
        <select name="livello">
            <option value="amatoriale">Amatoriale</option>
            <option value="professionista">Professionista</option>
        </select>
    </label>
    <button type="submit">Continua</button>
</form>
</div>
</body>
</html>
