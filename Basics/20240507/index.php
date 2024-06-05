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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1>Liste aller Schüler</h1>
    <?php
    include 'schueler_functions.php';
    $schuelerListe = erstelleSchuelerListe();

    if (isset($_GET['delete'])) {
        entferneSchueler($_GET['delete']);
        header('Location: index.php');
        exit;
    }
    ?>

    <table style="width:100%" class="table table-striped">
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
            <td><a href="?delete=<?= $index ?>">Löschen</a></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="add_students.php">Neuen Schüler anlegen</a>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>