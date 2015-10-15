<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bare - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
       <link href="css/style.css" rel="stylesheet">
    
    
    
    
    <style>
    body {
        padding-top: 70px;
       
    }
    </style>

</head>

<body>

                             <!--NAVBAR ADDED -->
                        <!--ADDED DROP DOWN COMPONENT 3-->
   
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://bwm399.mramp413.com/assign-03/index.html">Home</a>
            </div>
            
            
            
            <!-- Brand and toggle get grouped for better mobile display -->
           <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="http://bwm399.mramp413.com/assign-03/about.php">About</a>
                    </li>
                     <li class="dropdown"> <!--ADDED DROP DOWN COMPONENT 2-->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Products<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="active"><a href="http://bwm399.mramp413.com/assign-03/weddingDes.php">Wedding</a></li>
            <li><a href="http://bwm399.mramp413.com/assign-03/babyDes.php">Baby</a></li>
            <li><a href="http://bwm399.mramp413.com/assign-03/concertDes.php">Concert</a></li>
             <li><a href="http://bwm399.mramp413.com/assign-03/animalDes.php">Animal</a></li>
            <li><a href="http://bwm399.mramp413.com/assign-03/graduationDes.php">Graduation</a></li>
            <li><a href="http://bwm399.mramp413.com/assign-03/modelingDes.php">modeling</a></li>
          </ul>
                    
                    
                    <li>
                        <a href="http://bwm399.mramp413.com/assign-03/productDes.php">Product Details</a>
                    </li>
                    <li>
                        <a href="http://bwm399.mramp413.com/assign-03/price.php">Price</a>
                    </li>
                    <li>
                        <a href="http://bwm399.mramp413.com/assign-03/contact.php">Contact</a>
                    </li>
                    <li></li>
                </ul>
                
                 <!-- LOGIN MODAL ADDED -->
                    
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-default btn-lg" id="myBtn">Login</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
      </div>
      
    </div>
  </div> 
</div>
        </div>
    </nav>

    <!-- Page Content -->
    <!-- Main jumbotron for a primary marketing message or call to action -->

    </div>

    <div class="container">
<div class="row">
  <div class="col-xs-12 col-sm-6 col-md-8">
    <form class="form-horizontal" role="form" method="post" action="contact.php">
    
     <div class="form-group">
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="name" id="name" placeholder="First & Last Name" value="">
        <p class='text-danger'>Please enter your name</p>        
    </div>
  </div>
    
  <div class="form-group">
    <label for="email" class="col-sm-2 control-label">Email</label>
    <div class="col-sm-10">
      <input type="email" class="form-control" name="email" id="email" placeholder="Email"
        value="">
        <p class='text-danger'>Please enter your email address</p>    </div>
  </div>
    
  <div class="form-group">
      <label for="message" class="col-sm-2 control-label">Message</label>
    <div class="col-sm-offset-2 col-sm-10">
        <textarea class="form-control" name="message" rows="4" placeholder="Enter message here..."></textarea>
        <p class='text-danger'>Please enter your message</p>    </div>
  </div>
    

    
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-default">Send</button>
    </div>
  </div>
    
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
        <!--Will be used to display alert to the user -->
            <div class="alert alert-danger">Sorry, there was an error. Please try again later.</div>  
        
        </div>
    </div>
    
</form>
      
    </div>
    
    <div class="contact-list"> <!-- COMPONENTS  1 GLYPHS-->
                  <div class="col-md-4"><h2>Contact Info<hr></h2> <!-- contact with icons -->
                  <ul>
                      <li class="contact-list"><span class="glyphicon glyphicon-phone"> (570)-490-7415</span></li>
                      <li class="contact-list"><span class="glyphicon glyphicon-envelope"> mer7@pct.edu</span></li>
                      <li class="contact-list"><span class="glyphicon glyphicon-home"> 119 West Maple Road<Br>

                          Fairmont, Texas. 1598</li>
                </ul>
            </div>
    
    </div>
    
    
    
    
    
  <div class="col-xs-6 col-md-4">
    
    
    
    
    </div>
    </div></div>
<hr>

    
    
    <div class="footer">
      <footer>
             <!-- FOOTER ADDED-->
          
          
         <!-- TOOL TIP ADDED TO HOVER OF MY NAME TO TAKE TO HOMEPAGE-->
        <p><a href="http://mramp413.com" data-toggle="tooltip" data-original-title="CLICK HERE TO GO TO THE OWNER'S HOMEPAGE">Megan Ramp</a> l &copy; Company 2015</p>
      </footer>
    </div> <!-- /container -->


    </div>
 
    

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
        
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
            
             $('[data-toggle="popover"]').popover();
            
             $('[data-toggle="tooltip"]').tooltip();
        });
    </script>
</body>

</html>
