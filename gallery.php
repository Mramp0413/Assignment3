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
    <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="container">
          
          
          <!--ADDE JUMBRTRON-->
        
        <div class="jumbotron">
  <h1>Gallery</h1>
  <p>Below are some of our favorite shoots from events, and modeling shoots we have done as a company.</p>
</div>
        
        
       <!--ADDED BREAD CRUMBS....yum-->
        <ol class="breadcrumb">
  <li>
                    <a href="http://mramp413.com/assign-03.weddingPics.php">Wedding</a>
                </li>
                <li>
                    <a href="http://mramp413.com/assign-03.babyPics.php">Baby</a>
                </li>
                <li>
                    <a href="http://mramp413.com/assign-03.concertPics.php">Concerts</a>
                </li>
                <li>
                    <a href="http://mramp413.com/assign-03.aniamlPics.php">Animal</a>
                </li>
                <li>
                    <a href="http://mramp413.com/assign-03.graduationPics.php">Graduation</a>
                </li>
                <li>
                    <a href="http://mramp413.com/assign-03.modelingPics.php">Modeling</a>
                </li>
</ol>
        
        

      <section>
              <div class="photo">
          <ul class="photos gallery-parent">
              <li>
                <a href="images/productDes1.jpg" data-title="Image one"
                data-footer="This is an image 1" data-toggle="lightbox"
                data-gallery="mygallery" data-parent=".gallery-parent"
                data-hover="tooltip" data-placement="top" title="This is image one">
                  <img src="images/productDes1.jpg" class="thumbnail">
                </a>
              </li>
              <li>
                <a href="images/productDes2.jpg" data-title="Image two"
                data-footer="This is an image 2" data-toggle="lightbox"
                data-gallery="mygallery" data-parent=".gallery-parent"
                data-hover="tooltip" data-placement="top" title="This is image two">
                  <img src="images/productDes2.jpg" class="thumbnail">
                </a>
              </li>
              <li>
                <a href="images/productDes3.jpg" data-title="Image three"
                data-footer="This is an image 3" data-toggle="lightbox"
                data-gallery="mygallery" data-parent=".gallery-parent"
                data-hover="tooltip" data-placement="top" title="This is image three">
                  <img src="images/productDes3.jpg" class="thumbnail">
                </a>
              </li>
              <li>
                <a href="images/productDes4.jpg" data-title="Image four"
                data-footer="This is an image 4" data-toggle="lightbox"
                data-gallery="mygallery" data-parent=".gallery-parent"
                data-hover="tooltip" data-placement="top" title="This is image four">
                  <img src="images/productDes4.jpg" class="thumbnail">
                </a>
              </li>
              <li>
                <a href="images/productDes5.jpg" data-title="Image five"
                data-footer="This is an image 5" data-toggle="lightbox"
                data-gallery="mygallery" data-parent=".gallery-parent"
                data-hover="tooltip" data-placement="top" title="This is image five">
                  <img src="images/productDes5.jpg" class="thumbnail">
                </a>
              </li>
              <li>
                <a href="images/productDes6.jpg" data-title="Image six"
                data-footer="This is an image 6" data-toggle="lightbox"
                data-gallery="mygallery" data-parent=".gallery-parent"
                data-hover="tooltip" data-placement="top" title="This is image six">
                  <img src="images/productDes6.jpg" class="thumbnail">
                </a>
              </li>
        </ul>
          </div>
         </div>
      
      </section>
          
<hr>
          
          
          
          <div class="footer">

      <footer>
        <!-- TOOL TIP ADDED TO HOVER OF MY NAME TO TAKE TO HOMEPAGE-->
        <p><a href="http://mramp413.com" data-toggle="tooltip" data-original-title="CLICK HERE TO GO TO THE OWNER'S HOMEPAGE">Megan Ramp</a> l &copy; Company 2015</p>
      </footer>
    </div> <!-- /container -->


    </div>
 
    

    <!-- jQuery Version 1.11.1 -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
          
    <script src="js/lightbox.js"></script>
        
    <script>
        $(document).ready(function(){
            $("#myBtn").click(function(){
                $("#myModal").modal();
            });
            
             $('[data-toggle="popover"]').popover();
            
             $('[data-toggle="tooltip"]').tooltip();
        });
        
         $(document).delegate('*[data-toggle="lightbox"]', 'click',   function(event) {
      event.preventDefault();
      $(this).ekkoLightbox();
     }); 
    </script>


</body>

</html>
