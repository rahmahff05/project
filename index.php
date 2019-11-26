<?php
session_start();
$username = $_SESSION['username'];

  if (!isset($_SESSION['username'])){
    header("Location: login.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://use.fontawesome.com/64c9e35xxx.js"></script>
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css"/>

    <title>Pocket Medicines</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <style>
    div.center{
      text-align: center;
      font-style: serif;
      border: 3px solid grey;
    }
    img {
      border-radius: 50%;
      display: block;
      margin-left: auto;
      margin-right: auto;
    }
    h2{
      text-align: center;
      font-style: serif;
    }
    div.gallery {
      margin: 5px;
      float: left;
      width: 180px;
    }
    div.gallery:hover {
      border: 1px solid #777;
    }

    div.gallery img {
      width: 100%;
      height: auto;
      position: center;
    }
    .fa-comments {
      height: 1em;
      width: 1em;
      line-height: 1em;
      color: #404040
}
  </style>

  <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!--Navbar Logout and Name Project-->
          <a class="navbar-brand" href="index.php"><b>Pocket Medicines</b></a>
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="logout.php"><b>Logout</a></li>
          </ul>
        </div>

      </div>
    </div>
    <div class="container-fluid">
      <div class="row">
    <!--bagian sidebar-->
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="home.php">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="other.html">Others</a></li>
          </ul>
          <a href="instagram.com" class='fas fa-comments' style='font-size:36px'></a>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <div class="center">
            <h2><b>WELCOME</h2>
          </div>
          <br/><br/>
          <div>
            <img src="logo.jpg" alt="avatar" style=" width: 200px">
          </div>
           <div>
            <br/>
            <h2><b><marquee behavior="alternate">Care of Your Healthy is Number One</marquee></h2>
          </div>
          <!-- Gallery Foto Penyakit -->
          <div class="container">
            <div class="row justify-items-center">
          <div class="gallery">
            <a target="_blank" href="diabetes.jpg">
            <img src="diabetes.jpg" alt="Diabetes" width="600" height="400">
            </a>
          </div>
          <div class="gallery">
            <a target="_blank" href="flu.jpg">
            <img src="flu.jpg" alt="Flu" width="600" height="400">
            </a>
          </div>
          <div class="gallery">
            <a target="_blank" href="maag.jpg">
            <img src="maag.jpg" alt="Maag" width="600" height="400">
            </a>
          </div>
          <div class="gallery">
            <a target="_blank" href="sariawani.jpg">
            <img src="sariawani.jpg" alt="Sariawan" width="600" height="400">
            </a>
          </div>
          <div class="gallery">
            <a target="_blank" href="obesitas.jpg">
            <img src="obesitas.jpg" alt="Obesitas" width="600" height="400">
            </a>
          </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="../../assets/js/docs.min.js"></script>
    <script>
      $("#penyakit").change(function(){
        var isi = $(this).val();
        $("#isi").load("penyakit/"+isi+".php");
      })
    </script>
  </body>
</html>
