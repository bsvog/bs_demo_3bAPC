<!DOCTYPE html>
<html>
<head>
    <title>Mein erstes PHP-Projekt</title>
</head>
<body>
    <div>This is pure HTML</div>
    <div>Next, we will have some PHP code</div>
    <div>
        Today's date is <b><?php echo date('Y/m/d') ?></b> 
        and it's a <?php echo date('l') ?> 
    </div>
    <div>
        <?php
        echo 'Today is ' . '<b>' . date('Y/m/d') . '</b>';
        ?>
    </div>

    <div>
        <?php  $employees = array('John', 'Mike', 'Barbara', 'Tabea'); ?>
        <h1>List of employees </h1>
        <ul>
            <?php foreach ($employees as $employee) { ?>
            <li><?php echo $employee ?></li>
            <?php } ?>
        </ul>
    </div>
</body>
</html>