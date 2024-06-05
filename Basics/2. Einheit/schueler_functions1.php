<?php
session_start();

function erstelleSchuelerListe()
{
    if (!isset($_SESSION['schueler'])) {
        $_SESSION['schueler'] = [
            ['name' => 'Max Musterfrau', 'alter' => 16, 'klasse' => '3bAPC'],
            ['name' => 'Lisa Laufer', 'alter' => 21, 'klasse' => '2bAPC'],
            ['name' => 'Gustav Bauernfeind', 'alter' => 25, 'klasse' => '1cITS']
        ];
    }
    return $_SESSION['schueler'];
}
?>
