<html>
    <head>
        <title>Drivebox - Files anywhere</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
        <script type="text/javascript" src="js/myscripts.js"></script> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script>
            //script from http://www.w3schools.com/jquery/tryit.asp?filename=tryjquery_eff_animate_smoothscroll
        $(document).ready(function(){
          // Add smooth scrolling to all links
          $("a").on('click', function(event) {

            if (this.hash !== "") {
              // Prevent default anchor click behavior
              event.preventDefault();

              // Store hash
              var hash = this.hash;

              // Using jQuery's animate() method to add smooth page scroll
              // The optional number (800) specifies the number of milliseconds it takes to scroll
                // to the specified area
              $('html, body').animate({
                scrollTop: $(hash).offset().top
              }, 800, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
              });
            } // End if
          });
        });
        </script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <div class="header-inner-container">
                    <div>
                        <a href="register.php" ><p class="header_register">Register</p></a>
                        <a href="index.php"><img src="images/drive_box.jpg" class="header_logo"></a>
                        <a href="login.php" ><p class="header_login">Login</p></a>
                    </div>
                    
                </div>
            </div>
            <div id="navmenu">
                <div class="navmenu-inner-container">
                    <ul>
                      <li><a href="#get-started">Why DriveBox</a></li>
                        <li><a href="#cost">Cost</a></li>
                      <li><a href="#contactus">Questions</a></li>
                    </ul>
                </div>
                
            </div>
            <div id="main">
                <div class="main-getstarted">
                    <div class="main-inner-container">
                        <div class="main-getstarted-container">
                            <p class="main-getstarted-container-text"><br />Do more <strong>wherever</strong> <br /> you go</p>
                            <p>Get to your files from anywhere, on any device, with DriveBox.</p>
                            <a href="register.php"> <p class= "main-getstarted-container-button"> Register for free</p><br/><br/><br/><br/><br/><br/><br/><br/><br/ id="get-started"></a>
                        </div>
                        
                    </div>
                </div>
                
                
                <div id="main-container-leftText-rightImage">
                    <div class="main-2nd-inner-container">
                        <div class="main-inner-container">
                            <p class="main-2nd-container-text" >Take your docs anywhere<br/><br/>
                                <span class="main-text-smaller">Save files on your computer, then access them on
                                any computer</span><br/><br/>
                                <span class="main-text-smaller" ><b>It's that simple.</b></span></p>
                        </div>
                    </div>
                </div>
                <div class="main-2nd-container_image">
                </div>
                
                <div class="main-3rd-container_text">
                    
                    <div class="main-3rd-container_image"> 
                    </div>
                    <div class="space">
                    </div>
                    <p class="main-3rd-container-text">Keep your photos safe<br/><br/><span class="main-text-smaller">Backup vacation photos, your wedding day memories, your kid's first birthday pictures and all other important memories.<br/><br/> Back them up... with DriveBox</span><br/><br/> </p>
                </div>


                <div class="main-4th-background">
                    <div class="main-4th-container">
                        <div class="main-4th-container">
                            
                        </div>
                    </div>
                    
                </div>

                
            </div>
            <footer id="footer">
                <p class="footer-content"></p>
                <p class="footer-content"><b id="contactus">Contact Us</b>
                    <br>+234 813-856-3840<br>info@nextgenhub.com.ng<br><br> <img src="images/email-xxl.png" height="35px" width="35px"> <img src="images/dotsmall.png" class="dot" height="30px" width="12px"> <img src="images/twitter-xxl.png" height="35px" width="35px"> <img src="images/dotsmall.png" class="dot" height="30px" width="12px"> <img src="images/facebook-3-xxl.png" height="35px" width="35px"> <img src="images/dotsmall.png" class="dot" height="30px" width="12px"> <img src="images/instagram-xxl.png" height="35px" width="35px"> </p>
                <p class="footer-content" id="cost"></p>
            </footer>
            <div id="copyright-container">
                <div class="copyright-inner-container">
                    <p style="color: #b2c7e8;" >@2023 powered by JOSEPH_NMA_ICTG_Test</p>
                </div>
            </div>
        </div>
        
        
    </body>
</html>