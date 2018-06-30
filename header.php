<?php  
  require_once 'db_connect.php';
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>mis project</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/clean-blog.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav" >
      <div class="container">
        <a class="navbar-brand" href="index.php" style="color: #555;">MIS Project</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="index.php" style="color: #000;">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="register.php" style="color: #000;">Register</a>
            </li>
            <?php  
              if(!isset($_SESSION['user_img_path'])):
            ?>
            <li class="nav-item">
              <a class="nav-link" href="login.php" style="color: #000;">Login</a>
            </li>
            <?php  
              endif;
            ?>
            <?php  
              if(isset($_SESSION['user_img_path'])):
            ?>
            <li class="nav-item">
              <a class="nav-link" href="logout.php" style="color: #000;">Logout</a>
            </li>
            <li class="nav-item">
              <img id="user_img" src="<?php echo($_SESSION['user_img_path']) ?>" class="img-circle" width="30px" height="30px" >  
            </li>
            <?php  
              endif;
            ?>
            
          </ul>
        </div>
      </div>
    </nav>

    <?php  
      if((isset($_SESSION['user_status']))&&($_SESSION['user_status']==0)):
    ?>
  
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="margin-top:50px" >
      <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item" style="color: #eee">
              <a class="nav-link" id="edit_act" href="edit_activity.php" style="color: #eee;">Edit Activity list</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <?php  
      endif;
    ?>

    <!-- Page Header -->
      