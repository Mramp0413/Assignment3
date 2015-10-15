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

<body>       <!--NAVBAR ADDED -->
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
    <!-- JAVSCRIPT TOOL TIP 1 POPOVER -->

    <div class="container">
      <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/weddthingThumb.jpg" alt="...">
      <div class="caption">
        <h3>Wedding </h3>
        <p>
         
          <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=25.........................
8x11 print Qauntity=20">
    Large $150</a>
</button>
            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=15.........................
8x11 print Qauntity=10">
    Small $70</a>
</button>
          </p>
      </div>
    </div>
           </div>

            <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/babyThumb.jpg" alt="...">
      <div class="caption">
        <h3>Baby</h3>
        <p>
          <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=20.........................
8x11 print Qauntity=15">
    Large $100</a>
</button>
            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=15.........................
8x11 print Qauntity=6">
    Small $50</a>
</button>
          </p>
      </div>
    </div>
  </div>
 
        <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/concertThumb.jpg" alt="...">
      <div class="caption">
        <h3>Concert</h3>
        <p>      <!--POP OVER JAVASCRIPT WIDGET 1-->
<button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=15.........................
8x11 print Qauntity=8">
    Large $130</a>
</button>
            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=10.........................
8x11 print Qauntity=6">
    Small $80</a>
</button>
          </p>
      </div>
    </div>
  </div>
                </div></div></div>  
            
            
             <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/animalThumb.jpg" alt="...">
      <div class="caption">
        <h3>Animal </h3>
        <p>
          <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=20.........................
8x11 print Qauntity=10">
    Large $100</a>
</button>
            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=10.........................
8x11 print Qauntity=10">
    Small $50</a>
</button></p>
      </div>
    </div>
           </div>

            <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/graduationThumb.jpg" alt="...">
      <div class="caption">
        <h3>Graduation</h3>
        <p>
         <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=20.........................
8x11 print Qauntity=15">
    Large $120</a>
</button>
            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=15.........................
8x11 print Qauntity=10">
    Small $70</a>
</button></p>
      </div>
    </div>
  </div>
 
        <div class="row">
  <div class="col-sm-6 col-md-4">
    <div class="thumbnail">
      <img src="images/modelingThumb.jpg" alt="...">
      <div class="caption">
        <h3>Modeling</h3>
        <p>
            <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=15.........................
8x11 print Qauntity=35">
    Large $170</a>
</button>
            <button type="button" class="btn btn-default" data-container="body" data-toggle="popover" data-placement="left" data-content="
5x7 print Qauntity=10.........................
8x11 print Qauntity=20">
    Small $90</a>
</button></p>
      </div>
    </div>
  </div>
            
            
</div>

                


  <div class="col-xs-12 col-sm-6 col-md-8">
      <!-- Example row of columns -->
      <div class="row">
        <h2>What price is best for you??</h2>
          <div class="table" >
                <table >
                    <tr>
                        <td>
                            Name of shoot
                        </td>
                        <td >
                            Large
                        </td>
                        <td>
                            Small
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Wedding
                        </td>
                        <td>
                            $150
                        </td>
                        <td>
                            $75
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Baby
                        </td>
                        <td>
                            $100
                        </td>
                        <td>
                            $50
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Concert
                        </td>
                        <td>
                            $130
                        </td>
                        <td>
                            $80
                        </td>
                    </tr>
                    <tr>
                        <td >
                            Animal
                        </td>
                        <td>
                            $90
                        </td>
                        <td>
                            $40
                        </td>
                    </tr>
                                        <tr>
                        <td >
                            Graduation
                        </td>
                        <td>
                            $120
                        </td>
                        <td>
                            $70
                        </td>
                    </tr>
                                        <tr>
                        <td >
                            Modeling
                        </td>
                        <td>
                            $170
                        </td>
                        <td>
                            $90
                        </td>
                    </tr>
                </table>
            </div>
              </div>
        </div>
          
          <!-- JAVA SCRIPT WIDGET 2 COLLASPE-->
        
             <div class="row">
  <div class="col-xs-6 col-md-4">
              
              <h2> FAQ</h2>
          <div class="bs-example">
    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Can you comproise prices?</a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                    <p> We shall compromise prices due to the following. What type of shoot, props used, travel, distance traveled,equipment used, weather, etc.</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">What other photoshoots do you do </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>We do a number of different types of  photoshoots. Such as baby gender reveiling, christmas cards, baptism, family reunions, parties, events, and so on. If you have an idea for a certain type of photoshoot we will reason with you!</p>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Cancealation</a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                    <p>If there is a cancelation due to the weather or emergency there will be no fee, and rescheduled for a different time. But if the client fails to show up at the scheduled time of the appointment there will be a $15 fee.</p>
                </div>
            </div>
        </div>
              </div></div></div></div></div></div>
</div>
                 </div></div>
      
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
