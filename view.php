<?php 
    $title = 'Wiew Records';

    require_once "includes/header.php";
    require_once 'db/conn.php'; 

    //Get all attendees
    
?>
<div class="card" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $_POST['firstname'] . ' ' .$_POST['lastname'];  ?>
            </h5>
            <h6 class="card-subtitle mb-2 text-muted">
                <?php echo $_POST['specialty'];  ?>
            </h6>
            <p class="card-text">
                Date Of Birth : <?php echo $_POST['dob'];  ?>
            </p>
            <p class="card-text">
                Email Adress : <?php echo $_POST['email'];  ?>
            </p>
            <p class="card-text">
                Contact Number : <?php echo $_POST['phone'];  ?>
            </p>
        </div>
    </div>    


<?php require_once "includes/footer.php"; ?>  