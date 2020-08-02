<?php
    session_start();


    if(isset($_POST['logout']))
    {
        session_destroy();
        echo "<script>alert('Logout'); window.location.href='../../index.php';</script>";
    }
?>