<?php

    session_start();
    echo "we are logging out<br>";
    unset($_COOKIE[session_name()]);
    session_destroy();
    session_commit();
    include('session_infos.php');
?>
