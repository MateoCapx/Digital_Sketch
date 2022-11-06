<!-- Always use POST if the form data contains sensitive or personal information! -->

<!-- Use require when the file is required by the application. 
Require_once allows one file to be included and not duplicated, the same file wont be added twice.

Use include when the file is not required and application should continue when file is not found. -->

<?php
$title = 'Home';
require('includes/header.php');
require('db/connection.php');
?>

<!-- Stylesheet for index.php page  if you want to change the style to this page use these styles
-->

<style>
   /* Style Start for Main Hero Section  */
  #heroSection {
    background-color: black;
    font-family: 'Courier New', Courier, monospace;
   
  }

  #heroSection h1 {
    font-size: 76px;
    font-style: normal;
    font-weight: 700;
    line-height: 1.2;
    text-transform: capitalize;
    margin-top: 23px;
    margin-right: 0px;
    color: white;
  }

  #heroSection h6 {
    color: #66fcf1;
    margin-top: 150px;
  }

  #heroSection img {
    max-width: 500px;
  }

  #mainCards{
    text-align: center;
  }

  /* Style for get started button  */
  .mainBtn{
    border-radius: 0px;
    padding-top: 18px;
    padding-right: 40px;
    padding-bottom: 18px;
    padding-left: 40px;
    background-color: black;
    border-color: #66fcf1;
    color: white;
    margin-bottom: 80px;
  }
  
  .mainBtn:hover{
    background-color: white;
    color: black;
    border-color: white;
    border-radius: 100px;
  }
   /* Style end for get started button  */


  /* Style started for card items */
  .card:hover{
    border-color: #66fcf1;
  }

  .card{
    background-color: #121212;
    border-color: #121212;
  }

  .card h3 {
    color: white;
  }

  .card-text {
    color: white;
  }

  #cardTwo{
    border-color: #66fcf1;
  }

  #mainCards img {
    width: 50px;

  }
   /* Style Ended for card items */


  /* Style End for Main Hero Section  */
</style>


<!-- Hero Section Start -->
<section class="container-fluid" id="heroSection">

  <div class="container " id="heroText">
    <div class="row">
      <div class="col-sm-4">
        <h6> CREATIVE MIND, CREATIVE WORKS. </h6>
        <h1>We Are Digital Agency </h1>
        <button class="mainBtn"> Get Started</button>
       
      </div>

      <div class="col-sm-8">
        <img src="/img/heroImg.png" alt="Hero Image">
      </div>
    </div>

  </div>

  <section id="mainCards">
  <div class="container ">
    <div class="row">
      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

          <br>
          <img src="/img/globe.png" alt="Hero Image">
          <br>
          <br>

            <h3 class="card-title">Special title treatment</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card" id="cardTwo">
          <div class="card-body">

          <br>
          <img src="/img/lightBulb.png" alt="Hero Image">
          <br>
          <br>

            <h3 class="card-title">Special title treatment</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>

      <div class="col-sm-4">
        <div class="card">
          <div class="card-body">

          <br>
          <img src="/img/paperAirplane.png" alt="Hero Image">
          <br>
          <br>

            <h3 class="card-title">Special title treatment</h3>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <br>
  <br>
  <br>


</section>
<!-- Hero Section End -->



<?php require('includes/footer.php') ?>