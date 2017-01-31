<?php 
    
    if (!isset($_SESSION))
        session_start();

?>

<div class="row">
    <div class="col-md-3 col-md-offset-3">
        <span>Name: </span>
        <h3 class="bold">
            <?php echo $_SESSION['firstname'] ." " .$_SESSION['lastname']; ?>
        </h3>
    </div>

    <div class="col-md-3">
        <span>Email: </span>
        <h3 class="bold">
            <?php echo $_SESSION['email']?>
        </h3>
    </div>

    <hr />

</div>