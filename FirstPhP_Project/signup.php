<?php  
$title = 'Signup';
require 'includes/header.php' ;

?>
 

  <h1>Hello, Your on the Signup Page !</h1>

  
  <form action="signup_inc.php" method="post">
    <label for="fname">name:</label><br>
    <input type="text" id="fname" name="fname">

<br>
<br>

    <label for="lname">email:</label><br>
    <input type="email" id="email" name="email">

<br>
<br>


    <label for="lname">password:</label><br>
    <input type="password" id="password" name="password">
    <br>

    <button type="submit" name="submit"> Sign Up</button>
    
  </form>

<br>
<br>
<br>
<br>

  <?php  require 'includes/footer.php' ?>