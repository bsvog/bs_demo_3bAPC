<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>JavaScript 04 - Documents - List</title>
    

</head>
<body onload="durchlauf()">
    <form name="formular">

       <select name="auswahl" size="4" multiple onchange="durchlauf()">
           <option value="Tier1">Hund</option>
           <option value="Tier2">der laute Hirsch</option>
           <option value="Tier3">die kleine Maus</option>
           <option value="Tier4">Babykatze</option>

       </select>

        <textarea cols="30" rows="25" name="ausgabe"></textarea>
    </form>
</body>
    <script>
        function durchlauf(){
            let text = "";
            for(i = 0; i < document.formular.auswahl.length; i++){
                text = text +
                'index: ' + document.formular.auswahl.options[i].index + '\n'
                + 'defaultSelected: ' +
                document.formular.auswahl.options[i].defaultSelected + '\n'
                + 'selected: ' +
                document.formular.auswahl.options[i].selected + '\n'
                + 'text: ' +
                document.formular.auswahl.options[i].text + '\n'
                + 'value: ' +
                document.formular.auswahl.options[i].value + '\n'
                + '===================='
            }
            document.formular.ausgabe.value = text;
        }
    </script>
</html>
