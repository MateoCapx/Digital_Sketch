<!-- ****** Functions that validate user input ****** -->

<?php

    $result;

   function emptyInputSignup($name, $email, $password ) {
        if ( empty($name) || empty($email) || empty($password)){
            $result = true; 
        } else {
            $result =false;
        }
        return $result;

   }

// The preg_match() function returns whether a match was found in a string.
// preg_match(pattern, input, matches, flags, offset)
// pattern	Required. Contains a regular expression indicating what to search for
// input	Required. The string in which the search will be performed


// Testing if the name is vaild with regular expressions 
    function invaildName($name ) {
            if (!preg_match("/^[a-zA-Z0-9]*$/ ", $name)){
                $result = true; 
            } else {
                $result =false;
            }
            return $result;

    }

    
 


   // Testing if the email is vaild
    // The filter_var() function filters a variable with the specified filter.
    function invaildEmail($email ) {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $result = true; 
        } else {
            $result =false;
        }
        return $result;
}



// Checking if the name of email is already in the database
function nameExists($conn, $name , $email) {
    $sql = "SELECT * FROM users WHERE name = ?  OR email = ?;" ;
    $stmt = mysqli_stmt_init($conn);  // <-- Creating a Prepared Statment , to prevented sql injections

    if (!mysqli_stmt_prepare($stmt , $sql ) ) {
        header("location: signup.php?error=Statement_Failed");
        exit();
    }   

    mysqli_stmt_bind_param( $stmt ,"ss", $name , $email);
    mysqli_stmt_execute($stmt);


    // Gets a result set from a prepared statement
    $resultData = mysqli_stmt_get_result($stmt);


    // The fetch_assoc() / mysqli_fetch_assoc() function fetches a result row as an associative array.
    // Associative arrays are arrays that use named keys that you assign to them.
    // EX: $age['Peter'] = "35";
        // $age['Ben'] = "37";
        // $age['Joe'] = "43";

    if($row= mysqli_fetch_assoc($resultData)){
        return $row;
    }
    else {
        $result =false; 
        return $result;
    }

    mysqli_stmt_close($stmt);
}



function createUser($conn, $name , $email, $password) {
    $sql = "INSERT INTO users (name, email, password, id) VALUE (?, ?, ?, ?) ;" ;
    $stmt = mysqli_stmt_init($conn);  // <-- Creating a Prepared Statment , to prevented sql injections

    if (!mysqli_stmt_prepare($stmt , $sql ) ) {
        header("location: signup.php?error=Statement_Failed");
        exit();
    }   


    //password_hash — Creates a password hash
    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param( $stmt ,"ssss", $name , $email , $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("location: signup.php?error=none");
    exit();


     
}
