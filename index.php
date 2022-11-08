 <?php
  session_start();
  include_once('dbcon.php');
 
  // database reference
  $reference = $database->getReference('contacts');

  echo $reference->getValue();
 ?>
 
 <?php include_once('..//official-tech-algo/components/header.php') ?>


 <!-- temp code for login -->
 <div class="container">
  <div class="row">
    <div class="col col-md-6">
      <a href="./pages/register.php" class="btn btn-primary">Register</a>
      <a href="./pages/login.php" class="btn btn-success">Login</a>
    </div>
  </div>
 </div>

 <?php include_once('..//official-tech-algo/components/footer.php') ?>

 