<?php  
$title = 'Signup';
require ('includes/header.php');
// require 'includes/functions_inc.php';
?>


<h1> Signup Page </h1>


<!-- Testing to make sure that the user accessed this page coreectly  -->

<!-- If User submitted the form in the proper way then this script will run if not the page will not load -->

<!-- The isset() function checks whether a variable is set, which means that it has to be declared and is not NULL. -->

<!-- PHP are "superglobals", which means that they are always accessible, regardless of scope  
$$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION 

Are considered superglobals
-->

<?php
    if(isset($_POST["submit"])){

        echo " It works";

        $name = $_POST["fname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        
        require_once ('db/connection.php');
        require_once ('includes/functions_inc.php');

        if (emptyInputSignup($name, $email, $password ) !== false) {
            header("location: signup.php?error=emptyinput");
            echo "Nothing entered";
            exit();
        }

        if (invaildName($name) !== false) {
            header("location: signup.php?error=invaildName");
            exit();
        }

        if (invaildEmail( $email ) !== false) {
            header("location: signup.php?error=invaildEmail");
            exit();
        }
        if (nameExists ( $conn , $name , $email ) !== false) {
            header("location: signup.php?error=nameTaken");
            exit();
        }

        createUser($conn, $name, $email, $password);

    }
    else{
       header("location: login.php ");  //  <-- Sending the user to a certian page 
    }

?>




<?php  require 'includes/footer.php' ?>