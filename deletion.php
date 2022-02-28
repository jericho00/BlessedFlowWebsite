<?php 
require "db.php";

    if (isset($_GET['delete'])) {
        $id = $_GET['delete'];
        
        $sql = ("DELETE FROM users WHERE id=$id") or die("You have failed, you are a dissapointment");
    }


?>
