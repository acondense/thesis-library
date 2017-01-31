<?php 

    require('../connection.php');

    $query = "SELECT * FROM tblusers WHERE role='F'";

    $results = mysqli_query($link, $query);

    if (mysqli_num_rows($results) > 0) {
        while (($result = mysqli_fetch_array($results)) != null) {
            echo "<h3>" .$result['firstname'] ."</h3>";
            echo "<h4>" .$result['email'] ."</h4>";
        }
    }

?>