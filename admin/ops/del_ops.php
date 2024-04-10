<?php
include('../config.php');

if (isset($_POST["submit"])) {
    
    $delete_id = mysqli_real_escape_string($con, $_POST["delete_id"]);
    
    $sql = "DELETE FROM `news` WHERE id='$delete_id'";
    
  
    if(mysqli_query($con, $sql)) {
        echo '<script>alert("Delete successful");location.replace(document.referrer);</script>';
    } else {
        echo '<script>alert("Error deleting record: ' . mysqli_error($con) . '");location.replace(document.referrer);</script>';
    }
}
?>
