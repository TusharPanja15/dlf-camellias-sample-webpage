 <?php

    session_start();

    $connect = mysqli_connect("localhost", "root", "", "dlfcamellias");





    if (isset($_POST["name"])) {

        $name = mysqli_real_escape_string($connect, $_POST["name"]);
        $email = mysqli_real_escape_string($connect, $_POST["email"]);

        $sql = "INSERT INTO tbl_form(name, email) VALUES ('" . $name . "', '" . $email . "') LIMIT 1";


        if (mysqli_query($connect, $sql)) {

            echo "Message Saved";

        }

    }
    ?>  