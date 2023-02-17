<?php
    session_start();
    session_destroy();
    echo("logout sucessfull");
    header("location:/project/index.php");
?>