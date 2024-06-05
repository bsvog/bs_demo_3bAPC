<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>HTML_in_PHP</title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding: 8px;
            text-align: center;
        }
        th{
            background-color: cadetblue;
        }
    </style>
</head>
<body>
    <h1>Liste aller Schüler</h1>
    <?php
    include 'schueler_functions.php';
    $schuelerListe = erstelleSchuelerListe();
    if (isset($_GET['delete'])) {
        entferneSchueler($_GET['delete']);
        header('Location: index.php?edit=<?=$_GET['delete'] ?>');
        exit;
    }
    ?>

    <table style="width:100%">
        <tr>
            <th>Name</th>
            <th>Alter</th>
            <th>Klasse</th>
            <th>Aktion</th>
        </tr>
        <?php foreach ($schuelerListe as $index => $schueler): ?>
        <tr>
            <td><?= htmlspecialchars($schueler['name']); ?></td>
            <td><?= htmlspecialchars($schueler['alter']); ?></td>
            <td><?= htmlspecialchars($schueler['klasse']); ?></td>
            <td><a href="?delete=<?= $index ?>" onclick="return confirm('Sind Sie sicher, dass Sie diesen Schüler löschen möchten?');">Löschen</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="add_student.php">Neuen Schüler hinzufügen</a>
</body>
</html>
