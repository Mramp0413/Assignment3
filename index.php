<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  

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
   
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="http://bwm399.mramp413.com/assign-03/index.html">Home</a>
            </div>
            
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="http://bwm399.mramp413.com/assign-03/about.php">About</a>
                    </li>
                      <li>
                        <a href="http://bwm399.mramp413.com/assign-03/products.php">Product</a>
                    </li>
                     <li class="dropdown"> <!--ADDED DROP DOWN COMPONENT 2-->
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Product Desscription<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li class="active"><a href="http://bwm399.mramp413.com/assign-03/weddingDes.php">Wedding</a></li>
            <li><a href="http://bwm399.mramp413.com/assign-03/babyDes.php">Baby</a></li>
            <li><a href="http://bwm399.mramp413.com/assign-03/concertDes.php">Concert</a></li>
             <li><a href="http://bwm399.mramp413.com/assign-03/animalDes.php">Animal</a></li>
            <li><a href="http://bwm399.mramp413.com/assign-03/graduationDes.php">Graduation</a></li>
            <li><a href="http://bwm399.mramp413.com/assign-03/modelingDes.php">Modeling</a></li>
          </ul>
                    
                    <li>
                        <a href="http://bwm399.mramp413.com/assign-03/price.php">Gallery</a>
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

        <!-- /.container -->
    </nav>


    <!-- Page Content -->
                                                  


 <!-- Carousel added-->
        <div class="container">
            <div class="page-header">
  <h1>Welcome Delicate Senses</h1>
</div>
        <div class="col-large-12">
     <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

 <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/slide1.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    <div class="item">
      <img src="images/slide2.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>

     <div class="item">
      <img src="images/slide3.jpg" alt="...">
      <div class="carousel-caption">
        
      </div>
    </div>
    
  </div>


  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
          
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Wedding Photos</h2>
            <img src="images/hover1.jpg" width="100%" height="100%">
			<div class="image_title">
			</div>
          <p>Here we have one of our photogaphers capturing a picture of a lovely couple as they are walking out of their wedding ceremony in Austin Texas.</p>
          <p><a class="btn btn-default" href="wedding Des.php" role="button">View details &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Baby Pictures</h2>
            <img src="images/hover2.jpg" width="100%" height="100%">
			<div class="image_title">
			</div>
          <p>What could be more adorable than baby? This little bundle of joy is the daughter of the co-owner of this business. </p>
          <p><a class="btn btn-default" href="babyDes.php" role="button">View details &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Concert Photos</h2>
            
            <img src="images/hover3.jpg" width="100%" height="100%">
			<div class="image_title">
			</div>
            <p>This is a local concert in the heart of Texas watching one of the local bands play their hearts out for a fundraising event. </p>
          <p><a class="btn btn-default" href="concertDes.php" role="button">View details &raquo;</a></p>
        </div>
      </div>
        
        
</div>
        
<hr>
        
<div class="footer">
      <footer>              <!-- FOOTER ADDED-->
         <!-- TOOL TIP ADDED TO HOVER OF MY NAME TO TAKE TO HOMEPAGE-->
        <p><a href="http://mramp413.com" data-toggle="tooltip" data-original-title="CLICK HERE TO GO TO THE OWNER'S HOMEPAGE">Megan Ramp</a> l &copy; Company 2015</p>
      </footer>
          </div> 

    <!-- /.container -->
    
 
    

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
