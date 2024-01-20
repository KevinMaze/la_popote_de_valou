<?php

    require_once ('../lib/session.php');

    // Déconnection
    session_destroy();
    unset($_SESSION);
    header("location: ../index.php");