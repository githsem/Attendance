<?php 
    $title = 'User Login';

    require_once "includes/header.php";
    require_once 'db/conn.php'; 

?>
<h1 class="text-center"><?php echo $title ?></h1>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post"></form>