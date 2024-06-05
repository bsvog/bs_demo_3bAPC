<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>HTML_in_PHP</title>
    <style>
        
    </style>
</head>
<body>
    <h1>Liste aller Sch�ler</h1>
    <?php
    include 'schueler_functions.php';
    $schuelerListe = erstelleSchuelerListe();
    echo zeigeSchuelerTabelle($schuelerListe);
    ?>
</body>
</html>