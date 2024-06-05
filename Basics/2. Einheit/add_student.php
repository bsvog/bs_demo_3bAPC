<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $alter = $_POST['alter'] ?? '';
    $klasse = $_POST['klasse'] ?? '';

    if (!empty($name) && !empty($alter) && !empty($klasse)) {
        $_SESSION['schueler'][] = ['name' => $name, 'alter' => (int) $alter, 'klasse' => $klasse];
        header('Location: index.php');
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>Neuen Schüler hinzufügen</title>
</head>
<body>
    <h1>Neuen Schüler hinzufügen</h1>
    <form method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br><br>
        <label for="alter">Alter:</label>
        <input type="number" id="alter" name="alter" required><br><br>
        <label for="klasse">Klasse:</label>
        <input type="text" id="klasse" name="klasse" required><br><br>
        <button type="submit">Hinzufügen</button>
    </form>
</body>
</html>
