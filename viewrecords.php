<?php 
    $title = 'Index';

    require_once "includes/header.php";
    require_once 'db/conn.php'; 

    //Get all attendees
    $results = $crud->getAttendees();
?>

<table class="table">
    <tr>
        <th>#</th>
        <th>First Name</th>
    </tr>
    
</table>



<?php require_once "includes/footer.php"; ?>  