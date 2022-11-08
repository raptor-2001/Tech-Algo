<?php
  include_once('../components/header.php');
  if(isset($_SESSION['verified_user_id'])){
    $_SESSION['status'] = "You are already logged in";
    exit();
  } 
  include_once('./authentication.php');
?>

<nav class="navbar navbar-expand-sm navbar-light bg-light mb-3">
        <div class="container">
            <h4 class="navbar-brand" href="#">Tech Algo</h4>
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
                <li class="nav-item pl-5">
                  <form action="./logout.php">
                   <button type="submit" class="btn btn-danger">Logout</button>
                  </form>
                </li>
            </ul>
        </div>
    </nav>
<section>
  <div class="container form-container">
    <h3 class="text-center text-muted">Welcome to the home</h3>
  </div>
<?php include_once('../components/header.php');?>