<?php
session_start();
if (!isset($_SESSION['anagrafica'])) {
    header('Location: registration.php');
    exit;
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['sport'] = $_POST['sport'] ?? '';
    $_SESSION['categoria'] = $_POST['categoria'] ?? '';
    header('Location: ai_coach.php');
    exit;
}
$sports = [
    'triathlon' => ['Ironman', 'Sprint'],
    'ciclismo' => ['Ciclocross', 'Strada'],
    'corsa' => ['Mezza Maratona', '10 km'],
    'nuoto' => ['Acque libere', 'Piscina']
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleziona Sport</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js" defer></script>
</head>
<body>
<div class="container">
<h2>Scegli il tuo sport</h2>
<form method="post" action="sports.php">
    <label>Sport:
        <select name="sport" id="sportSelect" onchange="showSubcategories()">
            <option value="">Seleziona...</option>
            <?php foreach ($sports as $sport => $categories): ?>
                <option value="<?php echo $sport; ?>"><?php echo ucfirst($sport); ?></option>
            <?php endforeach; ?>
        </select>
    </label>
    <label>Categoria:
        <select name="categoria" id="categorySelect">
            <option value="">Seleziona sport prima</option>
        </select>
    </label>
    <button type="submit">Continua</button>
</form>
<script>
const sportCategories = <?php echo json_encode($sports); ?>;
</script>
</div>
</body>
</html>
