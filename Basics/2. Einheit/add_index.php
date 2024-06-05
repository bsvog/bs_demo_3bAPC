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
    <h1>Liste aller Sch�ler</h1>
    <?php
    include 'schueler_functions.php';
    $schuelerListe = erstelleSchuelerListe();
    ?>

    <table style="width:100%">
        <tr>
            <th>Name</th>
            <th>Alter</th>
            <th>Klasse</th>
        </tr>
        <?php foreach ($schuelerListe as $schueler): ?>
        <tr>
            <td><?= htmlspecialchars($schueler['name']); ?></td>
            <td><?= htmlspecialchars($schueler['alter']); ?></td>
            <td><?= htmlspecialchars($schueler['klasse']); ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <a href="add_student.php">Neuen Sch�ler hinzuf�gen</a>
</body>
</html>
