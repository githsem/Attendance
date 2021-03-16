<?php 
    $title = 'User Login';

    require_once "includes/header.php";
    require_once 'db/conn.php'; 

?>
<h1 class="text-center"><?php echo $title ?></h1>
<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
    <table class="table table-sm">
    <tr>
        <td><label for = "username"> Username: * </label></td>
        <td><input type="text" name="username" class="form-contrrol" id="username" value="<?php if($_SERVER['REQUEST_METHOD']=='POST') echo $_POST['username']; ?>"> </td>
    </tr>
    <tr>
        <td><label for = "password"> Password: * </label></td>
        <td><input type="password" name="password" class="form-control" id="password"> </td>
    </tr>
    </table><br><br>
    <input type="submit" value="login" class = "btn btn-primary btn-block"><br>
    <a href="#">Forgot Password</a>
</form>