<?php 
    $title = 'Index';

    require_once "includes/header.php";
    require_once 'db/conn.php'; 

    //Get all attendees
    $results = $crud->getAttendees();
?>


<?php require_once "includes/footer.php"; ?>  