<?php
include('include/dbcon.php');
include('session.php');

if (isset($_SESSION['id'])) {
    
    $q_adminname = $conn->query("SELECT * FROM `admin` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error($conn));

    
    if ($q_adminname->num_rows > 0) {
        $f_adminname = $q_adminname->fetch_array();
        $admin_name = $f_adminname['username'];

        
        $action = 'Logged out';

        
        $conn->query("INSERT INTO all_eventaction (admin_fullname, action, date) VALUES ('$admin_name', '$action', NOW())") or die(mysqli_error($conn));
    }
}


session_unset(); 
session_destroy(); 

header('Location: main.php'); 
exit(); 
?>