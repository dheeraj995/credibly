<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Credibly.Me</title>
        <meta name="description" content="OffersInfinite, a Mobile Advertising company empowers Advertisers to achieve best returns on Ad spend & Publishers in maximizing their revenue by monetizing.">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="img/fav.png"/>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/tooplate-style.css">
         <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
         <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    </head>

<body onclick="takeMeHome2();">
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-light justify-content-center" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" aria-controls="main-nav" data-toggle="collapse" data-target="#main-nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="https://www.credibly.me/" class="navbar-brand scroll-top">
                        <div class="logo">
                            <img src="img/logo.webp">
                        </div>
                    </a>
                </div>
                <!--/.navbar-header-->
                <div id="main-nav" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a href="https://www.credibly.me/" class="scroll-top">Home</a></li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Solution
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="https://www.credibly.me/how-it-works">How it Works?</a>
                              <a class="dropdown-item" href="https://www.credibly.me/demo">Demo</a>
                              <a class="dropdown-item" href="https://www.credibly.me/faq">FAQs</a>
                              <a class="dropdown-item" href="#">Verify Credentials</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Benefits
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="https://www.credibly.me/students">Students</a>
                              <a class="dropdown-item" href="https://www.credibly.me/universities">Universities</a>
                              <a class="dropdown-item" href="https://www.credibly.me/recruiters">Reruiters</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Why Us?
                            </a>
                            <div class="dropdown-menu">
                              <a class="dropdown-item" href="https://www.credibly.me/product-features">Product Features</a>
                              <a class="dropdown-item" href="https://www.credibly.me/tech-capabilities">Tech Capabilities</a>
                              <a class="dropdown-item" href="https://www.credibly.me/our-approach">Our Approach</a>
                              <a class="dropdown-item" href="#">Privacy Policy</a>
                            </div>
                        </li>
                        <li><a href="https://www.credibly.me/about-us" class="scroll-top">About Us</a></li>
                        <li><a href="https://www.credibly.me/contact-us" class="scroll-top">Contact Us</a></li>
                    </ul>
                </div>
                <!--/.navbar-collapse-->
            </nav>
            <!--/.navbar-->
        </div>
        <!--/.container-->
    </div>
    <!--/.header-->



    <div class="container" id="about">
        <!-- /*About Us/ -->            
        <div id="aboutus" class="cd-full-width">
            <div class="section-heading">
                <h2>Verify a Test Document</h2>
                <p>Download and verify a test document</p>

                <center class="download">
                    <a href="download.php?file=valid2">  <span class="pd_file"> <i class="far fa-file-pdf"></i> Download a valid demo certificate </span></a><br/> <br>

                    <a href="download.php?file=not approved"> <i class="far fa-file-pdf"></i> <span class="pd_file">Download a manipulated demo certificate</span></a>
                </center> 


                <div class="row">
                    <div class="col-md-10 col-sm-12 col-xs-12 col-md-offset-1">
                        <form action="upload_file.php" method="post" enctype="multipart/form-data">
    
                            <input type="file" name="file" id="file" class="inputfile" data-multiple-caption="{count} files selected" multiple />
                            <!-- <input type="file" name="pdfa" /> -->

                            <label for="file">Click to select a PDF document from your device.</label>
                            <br />
                            <button type="submit" class="item2">Verify</button>
                            
                        </form>
                    </div> 
                </div>
            </div>                   
        </div> <!-- .cd-full-width -->
	    <!-- /*Two Columns/ -->
		
    </div>


   <!--  <div class="footer" id="foot">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-lg-5 col-sm-6">
                    <img src="img/logo.webp">
                    <h4>Credibly.me © 2020</h4>
                </div>
                <div class="col-md-1 col-lg-2 col-sm-2">
                    <h4>Solution</h4>
                    <ul style="list-style: none;">
                        <li>How it Works</li>
                        <li>Demo</li>
                        <li>FAQs</li>
                        <li>Verify Credentials</li>
                    </ul>
                </div>
                <div class="col-md-1 col-lg-2 col-sm-2">
                    <h4>Benefits</h4>
                    <ul style="list-style: none;">
                        <li>Students</li>
                        <li>Universities</li>
                        <li>Reruiters</li>
                    </ul>
                </div>
                <div class="col-md-1 col-lg-2 col-sm-2">
                    <h4>Why Us?</h4>
                    <ul style="list-style: none;">
                        <li>Product Features</li>
                        <li>Tech Capabilities</li>
                        <li>Our Approach</li>
                        <li>Privacy Policy</li>
                    </ul>
                </div>
                <div class="col-md-1 col-lg-1 col-sm-1">
                    <h4></h4>
                    <ul style="list-style: none;">
                        <li><i class="fab fa-facebook-square"></i></li>
                        <li><i class="fab fa-twitter"></i></li>
                        <li><i class="fab fa-linkedin"></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </div> -->

    <div class="modal fade" id="myModal" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
    
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="takeMeHome();">&times;</button>
                <h4 class="modal-title"><img src="img/Valid.png"> Valid.pdf</h4>
              </div>
              <div class="modal-body">
                <h2>This file is authentic and from a verified issuer</h2>
              <h5>Issuer</h5>
              <h3>Amity University</h3>
              <p>This Certificate has been registered in this exact form on the blockchain by the above issuer using CrediblyMe.</p>
              <p>The issuer's identity has been verified by CrediblyMe or our trusted partners.</p>
              </div>
              <div class="modal-footer">
                <center>
                <button class="item" data-dismiss="modal" onclick="takeMeHome();">Go Back</button></center>
              </div>
            </div>
      
        </div>
    </div>




    <div class="modal fade" id="myModal1" role="dialog" aria-labelledby="myModal1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
    
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" onclick="takeMeHome();">&times;</button>
                <h4 class="modal-title"> <img src="img/Invalid.png"> Not Valid.pdf</h4>
              </div>
              <div class="modal-body">
                <h3>File could not be verified</h3>
                <p>This file could not be found in the University's blockchain records.</p>
                <p>Please note that this is not a proof that the file is not original. For more details please contact the issuer indicated in the file.</p>
              </div>
              <div class="modal-footer">
                <center>
                <button class="item" data-dismiss="modal" onclick="takeMeHome();">Go Back</button></center>
              </div>
            </div>
      
        </div>
    </div>
    <!-- <button id="myBtn" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

    <!-- Verticals Section -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
<?php
if(isset($_GET['ref'])&&$_GET['ref']=='valid'){
    echo "<script type='text/javascript'>
            $(document).ready(function(){
                $('#myModal').modal('show');
            });
        </script>";
}
else if(isset($_GET['ref'])&&$_GET['ref']=='invalid'){
    echo "<script type='text/javascript'>
            $(document).ready(function(){
                $('#myModal1').modal('show');
            });
        </script>";
}

?>
<script type="text/javascript">
    var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  /*modal.style.display = "window.location";*/
}

// When the user clicks anywhere outside of the modal, close it

window.onclick = function(event) {
  if (event.target == modal) {
    /*modal.style.display = "none";*/
  }
}
function takeMeHome(){
    window.location = "index.php";
}

function takeMeHome2(){
    if($('#myModal').is(':visible')||$('#myModal1').is(':visible'))
        window.location = "index.php";
}
</script>