<?php session_start(); 

if(!$_SESSION){
    header('Location: /login');
}

?>

<?php require('partials/head.php'); ?>
<body>
<?php require('partials/header.php'); ?> 



<div class="container mt-5">


  <section>
      
  <?php
    if($_SESSION['role'] == 'mother'){
        require('partials/uploads.php');
    } else if($_SESSION['role'] == "father"){
        echo "<a href='distribute' class='btn btn-primary'>Distribute</a>";
    }
  ?>
  
  </section>

  <!--Section: Content-->
  <section class="dark-grey-text">

    <!-- Section heading -->
    <h2 class="text-center font-weight-bold mb-4 pb-2 mt-5">Tasks</h2>
<?php foreach($results as $result): ?>
  	<!-- Grid row -->
    <div class="row align-items-center">

      <!-- Grid column -->
      <div class="col-lg-5 col-xl-4">

      

        <!-- Featured image -->
        <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
          <img class="img-fluid" src="./public/img/cleaning.png" alt="Sample image">
          <a>
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-lg-7 col-xl-8">

      <?php 

      if($result->status == "0"){
        echo "<h4 class='font-weight-bold mb-3 text-info'><strong>Queue</strong></h4>";
      } elseif($result->status == "1") {
        echo "<h4 class='font-weight-bold mb-3 text-info'><strong>In the process</strong></h4>";
      } elseif($result->status == "2") {
        echo "<h4 class='text-successful'>Done!</h4>";
      }

      
      
      ?>
        <!-- Status -->
        

        <!-- Excerpt -->
        <p class="dark-grey-text"><?= $result->text; ?></p>

        <!-- Status -->
        <?php 
        
          if($result->status == "0"){
            echo "<button class='btn btn-success btn-md mx-0 btn-rounded'>Accept</button>";
          } elseif($result->status == "1"){
            echo "<button class='btn btn-success btn-md mx-0 btn-rounded'>Accept</button>";
          } 
        ?>
        

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

    <hr class="my-5">
  <?php endforeach; ?>
  </section>
  <!--Section: Content-->


</div>




<?php require('partials/footer.php'); ?>