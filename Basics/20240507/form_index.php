<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>Erstes Formular</title>
</head>
<body>
   <h1>Anmeldung</h1>
    <p>Bitte füllen Sie das Formular aus</p>
    <form action="formular_auswertung.php" method="post">
        <p>Nachname: <input type="text" name="lastName"/></p>
        <p>Wohnort: <input type="text" name="city"/></p>
        <p>
            <input type="submit" />
        </p>
    </form>

    <form action="formular_auswertung.php" method="post">
        <p>Interessen:
            <input type="checkbox" name="interesse[]" value="Kultur"/>
            Kultur
            <input type="checkbox" name="interesse[]" value="Musik"/>
            Musik
            <input type="checkbox" name="interesse[]" value="Sport"/>
            Sport
        </p>
        <p>
            Zahlart: 
            <input type="radio" name="zahlart" value="bar"/>
            Bar
            <input type="radio" name="zahlart" value="paypal"/>
            Paypal
            <input type="radio" name="zahlart" value="bitcoin"/>
            Bitcoin
        </p>
        <input type="submit" value="abschicken"/>
        <input type="submit" value="zurücksetzen"/>
    </form>
</body>
</html>