<?php 

    require('../connection.php');

    $query = "SELECT * FROM tblusers WHERE role='F'";

    $results = mysqli_query($link, $query);

    if (mysqli_num_rows($results) > 0) {
        while (($result = mysqli_fetch_array($results)) != null) {
            if ($result['status'] == 'ACTIVE') {

                $onclick_enable = 'window.location="authenticate-disable.php?id=' .$result['id'] .'"';
                echo "<div class='alert alert-success'>";
                echo "<button onClick=" .$onclick_enable
                    ." \" class='btn btn-danger pull-right'>Disable</button>";
                echo "<h3>" .$result['firstname'] ." " .$result['lastname'] ."</h3>";
                echo "<h4>" .$result['email'] ."</h4>";
                echo "</div>";
            } else {

                $onclick_enable = 'window.location="authenticate-enable.php?id=' .$result['id'] .'"';
                echo "<div class='alert alert-danger'>";
                echo "<button onClick=" .$onclick_enable
                    ." \" class='btn btn-success pull-right'>Enable</button>";
                echo "<h3>" .$result['firstname'] ." " .$result['lastname'] ."</h3>";
                echo "<h4>" .$result['email'] ."</h4>";
                echo "</div>";
            }

        }
    }

?>