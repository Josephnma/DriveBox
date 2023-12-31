<?php 
    session_start();
    $error = "";
    //connect to database
    include 'inc/connectdb.php';
    
    if (isset($_POST['login_button'])){
        $email = mysqli_real_escape_string($db, $_POST['email']);
        $password = mysqli_real_escape_string($db, $_POST['password']);
        
        $password = md5($password);
        $email = strtolower($email); //set the email to lowercase letters
        $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result = mysqli_query($db, $sql);
        if (mysqli_num_rows($result) == 1){
            //get the name to personalise page
            $sql = "SELECT name FROM users WHERE email='$email'";
            $result2 = mysqli_query($db, $sql);
            $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
            $_SESSION['name'] = $row['name'];
            $_SESSION['email'] = $email;
            header("location: dashboard.php"); 
        }
        else{
            $error = "Username/password combination incorrect";
        }
    }


?>

<html>
    <head>
        <title>Mybox - Login</title>
        <link rel="icon" href="favicon.ico" type="image/x-icon">
        <link rel="stylesheet" type="text/css" href="css/mystyle.css">
        <script type="text/javascript" src="js/myscripts.js"></script> 
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
                      <li><a href="index.php">Back to Home</a></li>
                    </ul>
                </div>
                
            </div>
            <div id="main">
                <div class="login-getstarted">
                    <div class="login-inner-container">
                        

                            <p><b>User Login<br/></b></p>
                            <form action="login.php" method="POST" >
                            <input type="email" name="email" placeholder="Enter Email" required><br>
                            <input type="password" name="password" placeholder="Enter Password" required><br>
                            <input type="submit" value="Login" name="login_button" class="login_button">
                                <div style="color: red; font-size: 20px;"><?php echo $error; ?></div>
                            </form>

                    </div>
                </div>
                
            </div>
            <footer id="footer">
                <p class="footer-content"></p>
                <p class="footer-content"><b id="contactus">Contact Us</b>
                    <br>+234 813-856-3840<br>info@nextgenhub.com.ng<br><br> <img src="images/email-xxl.png"> <img src="images/dotsmall.png" class="dot" height="30px" width="12px"> <img src="images/twitter-xxl.png" height="35px" width="35px"> <img src="images/dotsmall.png" class="dot" height="30px" width="12px"> <img src="images/facebook-3-xxl.png" height="35px" width="35px"> <img src="images/dotsmall.png" class="dot" height="30px" width="12px"> <img src="images/instagram-xxl.png" height="35px" width="35px"> </p>
                <p class="footer-content"></p>
            </footer>
            <div id="copyright-container">
                <div class="copyright-inner-container">
                    <p style="color: #b2c7e8;" >@2023 powered by JOSEPH_NMA_ICTG_Test</p>
                </div>
            </div>
        </div>
        
        
    </body>
</html>