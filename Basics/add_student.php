<?php
session_start();
# another change # 
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $age = $_POST['age'] ?? '';
    $school_class = $_POST['schoolClass'] ?? '';

    if (!empty($name) && !empty($age) && !empty($school_class)) {
        $_SESSION['schueler'][] = ['name' => $name, 'alter' => (int) $age, 'klasse' => $school_class];
        header('Location: index.php');
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>Add Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>
<body>
    <h1>Neuen Sch�ler hinzuf�gen</h1>
    <form method="POST">
        <label for="name">Name: </label>
        <input type="text" id="name" name="name" required/><br>

        <label for="name">Alter: </label>
        <input type="number" id="age" name="age" required/><br>

        <label for="name">Klasse: </label>
        <input type="text" id="schoolClass" name="schoolClass" required/><br>
    
        <button type="submit">Hinzuf�gen</button>
    </form>
</body>
</html>