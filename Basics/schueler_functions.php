<?php
use mysql_xdevapi\DatabaseObject;

session_start();
require_once('Database.php');
function erstelleSchuelerListe()
{
    $pdo = Database::connect();
    $stm = $pdo->query('Select * from students');
    $results_from_database = $stm->fetchAll();
    $results_for_session = array();
    foreach($results_from_database as $student_from_db){
        array_push($results_for_session, [
            'ID' => $student_from_db['ID'],
            'name' => $student_from_db['FirstName'] . ' ' . $student_from_db['LastName'],
            'alter' => $student_from_db['Age'],
            'klasse' => $student_from_db['SchoolClass']
        ]);
    }

    /*
    if (!isset($_SESSION['schueler'])) {
        $_SESSION['schueler'] = [
            ['name' => 'Max Musterfrau', 'alter' => 16, 'klasse' => '3bAPC'],
            ['name' => 'Lisa Laufer', 'alter' => 21, 'klasse' => '2bAPC'],
            ['name' => 'Gustav Bauernfeind', 'alter' => 25, 'klasse' => '1cITS']
        ];
    }
    return $_SESSION['schueler'];
    */
    $_SESSION['schueler'] = $results_for_session;
    return $_SESSION['schueler'];
}

function entferneSchueler($index)
{
    $students_from_session = $_SESSION['schueler'];
    $student_from_db_to_delete = $students_from_session[$index];
    $id_for_student_from_db_to_delete = $student_from_db_to_delete['ID'];

    $pdo = Database::connect();

    $sqlQuery = "DELETE FROM students WHERE ID=:studentId";
    $statement = $pdo->prepare($sqlQuery);

    $statement->bindParam(':studentId', $id_for_student_from_db_to_delete);
    $statement->execute();

    if (isset($schuelerListe[$index])) {
        array_splice($schuelerListe, $index, 1);
        $_SESSION['schueler'] = $schuelerListe;
    }
}
