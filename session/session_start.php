<?php

    //session_name('start');
    session_start();
    echo "we are starting the session<br>";
    $_SESSION['value'] = 'i was there';

    include('session_infos.php');
?>
