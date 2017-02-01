<?php 
    if (!isset($_SESSION))
        session_start();

    $thesisid = $_GET['id'];

    $query = "SELECT * FROM tblthesis WHERE id='$thesisid' LIMIT 1";

    $results = mysqli_query($link, $query);

    if (mysqli_num_rows($results) > 0) {
        $result = mysqli_fetch_array($results);

        "<button class='btn btn-info' onClick='window.location=\"login.php\"'>Log in as Faculty</button>";

        if ($result['id'] == $thesisid) {
            echo'<br /><br /><br />';
            echo'<div class="row">';
            echo'    <div class="col-md-3 col-md-offset-3">';
            echo'        <button class="btn btn-block btn-success" onClick="window.location=\'edit.php?id=' 
                .$thesisid 
                .'\'">Edit this thesis</button>';
            echo'    </div>';
            echo'    <div class="col-md-3">';
            echo'        <button class="btn btn-block btn-danger" onClick="window.location=\'authenticate-delete.php?id=' 
                .$thesisid 
                .'\'">Delete</button>';
            echo'    </div>';
            echo'</div>';
        }
    }


?>