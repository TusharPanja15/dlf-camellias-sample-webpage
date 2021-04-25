 <?php


    $connect = mysqli_connect("localhost", "root", "", "dlfcamellias");


    if (isset($_POST["firstName"])) {

        $name = mysqli_real_escape_string($connect, $_POST["firstName"]);
        $email = mysqli_real_escape_string($connect, $_POST["userEmail"]);
        $phone_no = mysqli_real_escape_string($connect, $_POST["phone_no"]);

        $sql = "INSERT INTO tbl_users(name, email, phone_no) VALUES ('" . $name . "', '" . $email . "', '" . $phone_no . "') LIMIT 1";


        if (mysqli_query($connect, $sql)) {

            echo "Message Saved";
        }
    }
    ?>  