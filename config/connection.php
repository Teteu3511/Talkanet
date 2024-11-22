<?php

    $dbserver = 'localhost';
    $dbuname = 'root';
    $dbpass = '';
    $dbname = 'tcc-site-de-conversa';

    $db = mysqli_connect($dbserver, $dbuname, $dbpass, $dbname);

    if($db = false) {

        die("Error: connection error. " . mysqli_connect_error());

    }

?>
