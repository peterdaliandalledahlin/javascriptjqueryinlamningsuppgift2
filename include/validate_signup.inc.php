<?php
    session_start();


    if(isset($_POST["submit"])) {

        include 'dbh.inc.php';

        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        //$confirm_password = $_POST["confirm_password"];
        $addressline = $_POST["addressline"];
        $postalcode = $_POST["postalcode"];
        $city = $_POST["city"];
        //$tou = $_POST["termsofuse"];

        $sqlquery = "INSERT INTO users (firstname,lastname,email,password,addressline,postalcode,city) VALUES('". $firstname ."','". $lastname ."','". $email ."','".  $password ."','". $addressline ."','". $postalcode ."','". $city ."')";

        if($dbconn->query($sqlquery) === TRUE) {
            $last_id = $dbconn->insert_id;
            //$_SESSION["id"] = $last_id;

            echo "Registreringen lyckades!";

            header("Location: Location: http://localhost/inlämningsuppgifter Javascript & JQuery/inlämningsuppgift2/signin.php");
        
        } else {
            echo "Error: ". $dbconn->error;
        }

        $dbconn->close();

    } else {
        header("Location: Location: http://localhost/inlämningsuppgifter Javascript & JQuery/inlämningsuppgift2/signup.php");
    }

?>