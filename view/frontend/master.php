
<!DOCTYPE html>
<html lang="en">
<head>
<title>Tin tuc</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="public/frontend/css/bootstrap.min.css">
<link rel="stylesheet" href="public/frontend/css/style.css" type="text/css">
<link href="public/frontend/css/fontawesome-all.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Cabin" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="public/frontend/css/owl.carousel.css" type="text/css">
<link rel="stylesheet" href="public/frontend/css/owl.theme.css" type="text/css">
<script src="public/frontend/js/jquery.min.js"></script>
<script src="public/frontend/js/bootstrap.min.js"></script>
<script src="public/frontend/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="public/frontend/js/clock.js"></script>
<script>
		$(document).ready(function() {
		  $("#owl-demo2").owlCarousel({
					autoPlay: 3000, //Set AutoPlay to 3 seconds
		  items : 1,
		  itemsDesktop : [1199,1],
		  itemsDesktopSmall : [979,1]
			 });
		});
	</script>
</head>

<body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <span id="theClock" style="color:white">&nbsp; <script language="JavaScript">startclock();</script></span>
	  <span class="pull-right"><a href="admin.php" style="color:white">Quản trị</a></span>
    </div>
    <!--/.nav-collapse --> 
  </div>
  <!--/.container-fluid --> 
</nav>
<div class="container-fluid">
  <header>
    <div class="row">
      <div class="col-md-12">
        <div class="logo">
          <h2><a href="#">Quản lý sinh viên</a></h2>
        </div>
        <div class="col-md-7 pull-right call">
          <h3><i class="fa fa-home"></i> Các anh em siêu nhân</h3>
        </div>
      </div>
    </div>
  </header>
  <nav class="navbar navbar-default nav2">
    <div class="container-fluid">
      <div class="navbar-header">
        <button aria-controls="navbar" aria-expanded="false" data-target="#navbar2" data-toggle="collapse" class="navbar-toggle collapsed" type="button"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      </div>
      <div class="navbar-collapse collapse" id="navbar2">
        <ul class="nav navbar-nav">
          <li ><a href="index.php">Trang chủ</a></li>
          <li><a href="index.php?controller=search_student">Tra cứu sinh viên</a></li>
          <li><a href="index.php?controller=point_student">Tra cứu điểm</a></li>
        </ul>
      </div>
      <!--/.nav-collapse --> 
    </div>
    <!--/.container-fluid --> 
  </nav>
  

  <?php
          //load controller
          if(file_exists($controller))
            include $controller;
      ?> 
    
    
 
  
</div>
<div class="container-fluid full">
  <div class="container footerlink">
    <div class="row">
      <div class="col-md-4">
        <h3>About Us</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus leo ante, consectetur sit amet vulputate vel, dapibus sit amet lectus. Etiam varius dui eget lorem elementum eget mattis sapien interdum. In hac habitasse platea dictumst. Morbi sed nisi est, vitae convallis nulla. Nunc vestibulum ipsum nec libero sodales dignissim. </p>
      </div>
      <div class="col-md-4">
        <h3>Newsletters</h3>
        <p>Enter Your Email Address:</p>
        <input type="text" class="form-control" placeholder="enter email address">
        <a class="btn custom">Subscribe</a> </div>
      <div class="col-md-4">
        <h3>Follow Us:</h3>
        <i class="fa fa-facebook-official icon"></i><i class="fa fa-twitter icon"></i><i class="fa fa-instagram icon"></i><i class="fa fa-youtube icon"></i><i class="fa fa-google-plus-square icon"></i> </div>
    </div>
  </div>
</div>
<div class="container-fluid footer"> &copy;2018, all rights reserved. </div>
</body>
</html>
