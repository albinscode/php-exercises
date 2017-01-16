<?php
    //session_name('start');
    session_start();
    echo 'my value is: ' . $_SESSION['value']. "<br>";
    include('session_infos.php');
?>
