<?php
    $___hostname = "localhost";
    $___dbuser = "root";
    $___dbpass = "";
    $___dbname = "lektionsdemo";

    $dbconn = new mysqli($___hostname,$___dbuser,$___dbpass,$___dbname);

    if($dbconn->connect_error) {
        die("Connection failed!:  " . $dbconn->connect_error);
    }
?>