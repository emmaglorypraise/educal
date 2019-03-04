<!DOCTYPE html>
<html>
<head>
<!-- meta tags -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=n">
    
<!-- site title -->
<title>EDUCAL</title>
<link rel="icon" type="icon/css" href="images/icon2.png"/>

<!-- Bootstrap  -->
<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
<!-- <link rel="stylesheet" href="bootstrap3/css/bootstrap.css">   -->
<link rel="stylesheet" href="bootstrap4/bootstrap.min.css">  

    
<!-- Owl Carousel -->
<link rel="stylesheet" href="css/owl.carousel.min.css">
<link rel="stylesheet" href="css/owl.theme.default.min.css">
    
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- font-awesome link -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
<link rel="stylesheet" href="css/font-awesome.min.css">

<!-- personal css -->
<link rel="stylesheet" href="css/main.css"/>
<link rel

</head>

<body>
<header>

    <nav class="navbar navbar-expand-md navbar-light ">
        <a class="navbar-brand" href="#"> EDU<span style="color:  #858688;font-family: 'Oswald', sans-serif;">CAL</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
          <div class="navbar-nav ">
            <div class="container">
            <div class="row">

            <div class="col-md-6">
            <!-------search box------->
           <a class="nav-item" href="">
              <div class="search-box">
              <form class="search-form">
                  <input class="form-control" type="text" placeholder="Search">
                  <button class="btn search-btn"><i class="fas fa-search"></i></button>
              </form>  
            </div>
           </a>
          </div><br><br>

          <div class="col-md-6">
            <!--------register button/modal ---------->
            <a class="nav-item" href="">
            <a class="btn sign" data-toggle="modal" role="button" data-target="#myModal"><span class="fas fa-plus-square">Sign-In Or Register</span></a>
            <!-- Modal -->
           <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
               <div class="modal-dialog" role="document">
                 <div class="modal-content">
                   <div class="modal-header">
                     <h5 class="modal-title" id="exampleModalLabel">Sign-In</h5>
                     <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                     </button>
                   </div>
                   <div class="modal-body">
                     <form action="signin.php" method="POST">
                       <?php include 'signin.php';
                       echo $autherr; ?>
                       <div class="form-group">
                         <input type="text-area" class="form-control input" id="formGroupInput" name="RegistrationNumber" placeholder="Enter RegNo/Staff ID">
                       </div><br>
                       <div class="form-group">
                         <input type="password" class="form-control input" id="exampleInputPassword1" name="Password" placeholder="Enter Password">
                       </div>
                       <small id="emailHelp" class="form-text text-muted">Not Registered? <a href="register.html">Register Now</a></small>

                   </div>
                   <div class="modal-footer">
                     <button type="button" class="btn" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn " name="submit" role="button">Sign-In</button>
                       </form>
                   </div>
                 </div>
               </div>
             </div>
            </a>
          </div>
            </div>
           </div>
          </div>
        </div>
      </nav>




<!-- main navigation -->
<nav> 
                  <ul class="nav  navbar ">
                    <li class="nav-link"><a class="active" href="index.html">Home</a></li>
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">About <span class="caret"></span></a>
                      <ul class="dropdown-menu">
                        <a class="dropdown-item" href="history.html">History</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="history.html">Anthem</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="history.html">Administration</a>
                      </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Academics <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                          <a class="dropdown-item" href="academics.html">Faculties</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="academics.html">Colleges</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="academics.html">Schools</a>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Admission<span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Undergraduate</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Postgraduate</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Predegree/Basic</a>
                        </div> 
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Portals<span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Student</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Staff</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Units&Centers<span class="caret"></span></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                          <a class="dropdown-item" href="#">Alumni</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Counselling Unit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Bursery Unit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">HRDC Unit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Sport Unit</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Library</a>
                          <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="#">Enterpreniural</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">News&Events<span class="caret"></span></a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                              <a class="dropdown-item" href="#">Events Gallery</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Latest News</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="#">Featured News</a>
                            </div>
                    </li>
                  </ul>
                </div>
            </div>
</nav>
    

</header>
<div class="page-header">
  <h3>REGISTER</h3>
</div>
<!-- REGISTER FORM -->
<div class="container">
  <div class="register-con">
      <center>
      <form  role="form" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
      <?php 
        include 'register.php';
        ?>
       <!-- FULL NAME -->
          <div class="form-group">
            <?php echo $errorfn; ?>
              <input type="text-area" class="form-control" id="Name" name="FullName" placeholder="Full Name" value="<?php echo $fullname; ?>">
          </div><br>
          <!-- REGISTRATION NUMBER -->
          <div class="form-group">
          <?php echo "$errorregno"; ?>
              <input type="text-area" class="form-control"  id="Registration-no" name="RegistrationNumber" placeholder="Registration Number" value="<?php echo $regno; ?>">
          </div><br>
          <!-- DEPARTMENT -->
          <div class="form-group">
          <?php echo $errordept; ?>
              <input type="text-area" class="form-control" id="Department" name="Department" placeholder="Department" value="<?php echo $department; ?>">
          </div><br>
          <!-- FACULTY -->
          <div class="form-group">
          <?php echo $errorfac; ?>
            <input type="text-area" class="form-control" id="Faculty" name="Faculty" placeholder="Faculty" value="<?php echo $faculty; ?>">
          </div><br>
          <!-- Email -->
          <div class="form-group">
          <?php echo $erroremail; ?>
              <input type="email" class="form-control" id="email" name="Email" placeholder="Email" value="<?php echo $email; ?>">
          </div><br>
          <!-- Duration Of Study -->
          <div class="form-group">
          <?php echo $errordos ; ?>
            <input type="number" class="form-control" id="Duration" name="DurationOfStudy" placeholder="Duration of Study" value="<?php echo $durofstu; ?>">
          </div><br>
          <!-- Nationality -->
          <div class="form-group">
          <?php echo $errornationality; ?>
              <input type="text-area" class="form-control" id="Nationality" name="Nationality" placeholder="Nationality" value="<?php echo $nationality; ?>">
          </div><br>
          <!-- State Of Origin -->
          <div class="form-group">
          <?php echo $errorsoo; ?>
              <input type="text-area" class="form-control" id="State" name="StateOfOrigin" placeholder="State Of Origin" value="<?php echo $staoforig; ?>">
          </div><br>
          <!-- L.G.A -->
          <div class="form-group">
          <?php echo $errorlga; ?>
              <input type="text-area" class="form-control" id="L.G.A" name="LocalGovernmentArea" placeholder="L.G.A" value="<?php echo $locgovare; ?>">
          </div><br>
          <!-- Birthday -->
          <div class="form-group">
          <?php echo $errorbirthday; ?>
              <input type="date" class="form-control" id="Birhday" name="Birthday" value="<?php echo $birthday; ?>">
          </div><br>
          <!-- Password -->
          <div class="form-group">
          <?php echo $errorpassword; ?>
              <input type="password" class="form-control" id="Password" name="Password" placeholder="Password" value="<?php echo $password; ?>">
          </div><br>
          <!-- Confirm Password -->
          <div class="form-group">
          <?php echo $errorconpass; ?>
              <input type="password" class="form-control" id="Confirm-Password" name="ConfirmPassword" placeholder="Confirm Password" value="<?php echo $conpass; ?>">
          </div><br>
        
          <!-- <div class="form-group " style="margin: 0px;">
            <label for="male">Select Gender</label><br>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Other
          </div><br>
          <div class="checkbox">
            <label><input type="checkbox"> Remember me</label>
          </div><br> -->
          <button type="submit" class="btn btn-default" name="submit" href="#">Submit</button>
        </center>
      </form>
    
  </div>
</div>


<!-- END OF REGISTER FORM -->

<!-- footer section -->
<footer id="footer">
   <div class="container footer-top">
       <div class="row">
           <div class="col-md-4">
                <h6 class="f-title">Faculties</h6>
                <ul class="footer-links">
                    <li>Engineering</li>
                    <li><a href="#">Medical Sciences</a></li>
                    <li><a href="#">Business Administration</a></li>
                    <li><a href="#">Law</a></li>
                </ul>
           </div>
           <div class="col-md-4">
                <h6 class="f-title">News</h6>
                <ul class="footer-links">
                    <li><a href="blog.html">Featured News</a></li>
                    <li><a href="#">Press</a></li>
                    <li><a href="#">Exhibitions</a></li>
                </ul>
           </div>
           <div class="col-md-4">
                <h6 class="f-title">Quick Links</h6>
                <p>
                    <ul class="footer-links">
                        <li><a href="#">About us</a></li>
                        <li><a href="#">Admission</a></li>
                        <li><a href="#">Academics</a></li>
                        <li><a href="#">Portals</a></li>
                        <li><a href="#">Units&Centers</a></li>
                    </ul>
                </p>
           </div>
       </div>

<hr style="width:90%; border-width:1px; border-color:#fff; border-radius:5px; margin-top:50px; margin-bottom: 50px;">
       <div class="container-fluid">
       <div class="row">
            <div class="col-md-6">
                 <h6 class="f-title">Resources</h6>
                 <ul class="footer-links">
                     <li>E-Library</li>
                     <li><a href="#">ICT</a></li>
                     <li><a href="#">Inaugural Lectures</a></li>
                     <li><a href="#"></a></li>
                 </ul>
            </div>
            
            <div class="col-md-6">
                <h6 class="f-title">CONTACT</h6>
				<ul class="contact">
					<li><p><i class="fas fa-globe-africa"></i> 40 Baria Street,Ogun State,Nigeria</p></li>
					<li><p><i class="fas fa-mobile-alt"></i> (+234) 111 555 666</p></li>
					<li><p><i class="fas fa-envelope-open"></i> educalschools@gmail.com</p></li>
					<li><p><i class="fas fa-clock-o"></i> Monday - Friday, 08:00AM - 06:00 PM</p></li>
				</ul>
            </div>
        </div>
        </div>
        <hr style="width:90%; border-width:1px; border-color:#fff; border-radius:5px; margin-top:50px; margin-bottom: 50px;">
        <center>Copyright &copy All right reserved | EDUCAL</center>
    </div>
</footer>






<!-- bootstrap jquery& js  -->
<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Bootstrap -->
<script src="boostrap4/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="boostrap4/bootstrap.min.js"></script>
<script src="boostrap4/popper.js"></script>
<!-- Owl carousel -->
<script src="js/owl.carousel.js"></script>
<script src="js/owl.carousel.min.js"></script>
<!-- main -->
<script src="js/main.js"></script>

</body>
</html>