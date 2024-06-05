<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>JavaScript 02 - Button click</title>
    <script>
        function showMessage(){
            alert('Die Schaltfläche wurde gedrückt'); 
        }
    </script>

</head>
<body>
   <h3>Button Handler Example</h3>
    <form>
        <input type="button" value="Funktion aufrufen" onclick="showMessage()"/>
    </form>
</body>
</html>
