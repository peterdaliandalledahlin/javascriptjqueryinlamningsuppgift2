<?php
    session_start();

    if(isset($_POST["loginbtn"])) {

        $email = $_POST["email"];
        $password = $_POST["password"];

        if($email == null || $password == null) {
            header("Location: http://localhost/inlämningsuppgifter Javascript & JQuery/inlämningsuppgift2/signin.php"); 
        }

        include "dbh.inc.php";

        $sqlquery = "SELECT id FROM users WHERE email = '". $email ."' AND password = '". $password ."'";
        $result = $dbconn->query($sqlquery);

        if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION["id"] = $row["id"];
            }

            header("Location: http://localhost/inlämningsuppgifter Javascript & JQuery/inlämningsuppgift2/index.php");
        } else {
            header("Location: http://localhost/inlämningsuppgifter Javascript & JQuery/inlämningsuppgift2/signin.php"); 
        }

    } else {
        header("Location: http://localhost/inlämningsuppgifter Javascript & JQuery/inlämningsuppgift2/signin.php");
    }
?>