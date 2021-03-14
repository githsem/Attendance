<?php 
    $title = 'Success';
    require_once "includes/header.php"; 
    require_once "db/conn.php";

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $fname = $_POST['firstname'];
        $lname = $_POST['lastname'];
        $dob = $_POST['dob'];
        $email = $_POST['email'];
        $contact = $_POST['phone'];
        $specialty = $_POST['specialty'];
    }
    else{
        
    }
?>

<?php require_once "includes/footer.php"; ?>