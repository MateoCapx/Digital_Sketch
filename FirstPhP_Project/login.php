<?php  
$title = 'Signup';
require 'includes/header.php' ;

?>


  <h1>Hello, Your on the Login Page !</h1>

  <!-- The action attribute specifies where to send the form-data when a form is submitted. -->
  <form action="login-inc.php" method="GET">
 
    <label for="lname">email:</label><br>
    <input type="email" id="email" name="email">

<br>
<br>


    <label for="lname">password:</label><br>
    <input type="password" id="password" name="password">
    <br>

    <button type="submit" name="submit"> Login </button>
  </form>

<br>
<br>
<br>
<br>

  <?php  require 'includes/footer.php' ?>