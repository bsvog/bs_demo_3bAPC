<html lang="de">
<head>
    <meta charset="utf-8"/>
    <title>JavaScript 03 - W�rfeln</title>
    <script>
        function rolleWuerfel(){
            let randomNumber = Math.random() * 6;
            return (Math.floor(randomNumber) + 1);
        }
    </script>

</head>
<body>
   <h3>W�rfelergebnis</h3>
    <script>
        for (i = 0; i < 10; i++) document.write(rolleWuerfel() + " - ");   
    </script>
</body>
</html>
