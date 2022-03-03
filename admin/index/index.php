<?php
  session_start();
  if(!isset($_SESSION['log'])){
    header("location:../login/index.php");
  }
?>
<!doctype html>
<html lang="en">

<head>
  <title>Tharif Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
  
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="index.php" class="logo">POWER CALCULATOR</a></h1>
      <ul class="list-unstyled components mb-5">
        <!-- <li class="active">
          <a href="#"><span class="fa fa-home mr-3"></span> Homepage</a>
        </li> -->
        <li class="active">
          <a href="../login/logout.php" target="_self"><span class="fa fa-home mr-3"></span> Log Out</a>
        </li>
        <li>
          <a href="../tables/lt1_table.php" target="content"><span class="fa fa-user mr-3"></span>LT I</a>
        </li>
        <li>
          <a href="../tables/lt2_table.php" target="content"><span class="fa fa-user mr-3"></span> LT II</a>
        </li>
        <li>
          <a href="../tables/lt4A_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 4(A)</a>
        </li>
        <li>
          <a href="../tables/lt4B_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 4(B)</a>
        </li>
        <li>
          <a href="../tables/lt5A_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 5(A)</a>
        </li>
        <li>
          <a href="../tables/lt5B_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 5(B)</a>
        </li>
        <li>
          <a href="../tables/lt6A_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 6(A)</a>
        </li>
        <li>
          <a href="../tables/lt6B_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 6(B)</a>
        </li>
        <li>
          <a href="../tables/lt6C_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 6(C)</a>
        </li>
        <li>
          <a href="../tables/lt6D_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 6(D)</a>
        </li>
        <li>
          <a href="../tables/lt6E_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 6(E)</a>
        </li>
        <li>
          <a href="../tables/lt6F_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 6(F)</a>
        </li>
        <li>
          <a href="../tables/lt6G_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 6(G)</a>
        </li>
        <li>
          <a href="../tables/lt7A_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 7(A)</a>
        </li>
        <li>
          <a href="../tables/lt7B_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 7(B)</a>
        </li>
        <li>
          <a href="../tables/lt7C_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 7(C)</a>
        </li>
        <li>
          <a href="../tables/lt9_table.php" target="content"><span class="fa fa-user mr-3"></span> LT 9</a>
        </li>
      </ul>

    </nav>

    <!-- Page Content  -->
    <div id="content" class="">
      <iframe name="content" src="home.html"></iframe>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

    <style>
      iframe {
        width: 100%;
        height: 100%;
        border: none;
        
      }
  
      .contents {
        width: 100%;
        height: 100%;
        position: absolute;
      }
    </style>

</body>

</html>