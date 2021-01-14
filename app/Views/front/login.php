<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Login%20page.css">
     <link rel="shortcut icon" href="<?php echo base_url();?>/public/assets/Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css"> 
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
     
    
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Login%20and%20Sign%20up/Login%20page.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">

    <style>
    .cursor
    {
        cursor:pointer;
    }
    </style>
    
    
</head>
 
 <header class="header-class">
           
        <div style="float: left;">
            <a href="<?php echo site_url();?>">
            <img class="logo" src="<?php echo base_url();?>/public/assets/Images/Header%20and%20Footer/Logo.png"></a>
                </div>
    
        
    </header>
<body>
   <div class="login-form-container" align="center">
   <form action="<?php echo site_url()?>front/loginaction" method="POST">
  

        <div id="rounded-corner" align="center" class="form-table">
  

              <div align="center">
              <label><h2 class="login-label">Login&nbsp;<b class="label-tag">User</b></h2></label>


              <?php if(!empty(session()->getFlashdata('success'))){ ?>

                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> <?php echo session()->getFlashdata('success');?>
                    </div>
                        
                    <?php } ?>

                    <?php if(!empty(session()->getFlashdata('error'))){ ?>
                       
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong></strong> <?php echo session()->getFlashdata('error');?>
                        </div>

                    <?php } ?>



                    <div class="other-buttons-div">
            
                    <button class="google-button">
                    <div><img class="icons" src="<?php echo base_url();?>/public/assets/Images/Index/Google%20Logo.png"></div><div style="padding-top: 2px;">
<!--                     
                        <a href="<?php echo $loginButton; ?>"> 
                            Continue with Google
                        </a> -->

                        <a href="<?php echo $loginButton; ?>"> 
                            Continue with Google
                        </a>
                        
                        </div></button>
                    <br><br>     
                    <button class="facebook-button">
                        <div>
                        <img class="icons" src="<?php echo base_url();?>/public/assets/Images/Index/Facebook%20Logo.png"></div>
                        <div style="padding-top: 2px;">
                            <!-- <a href="<?php echo $facebook_login_url;?>"> 
                                Continue with Facebook
                            </a> -->
                            <a href="<?php echo $facebook_login_url;?>"> 
                                Continue with Facebook
                            </a>
                            </div>
                    </button>
                    <br><br> 
                    <!-- <button class="apple-button" id="appleid-signin" data-type="sign in">
                <div style="padding-top: 4px;" >Sign up with Apple</div>
                    </button>    
                    <div id="appleid-signin" data-color="black" data-border="true" data-type="sign in"></div> -->
                    <button class="apple-button">
                            <div><img class="icons" src="<?php echo base_url();?>/public/assets/Images/Index/Apple%20Logo.png"></div><div style="padding-top: 4px;"><a href="javascript:void;"> Sign up with Apple</a></div></button>  
                    </div> 

                    <div class="hr-div">
        Or use Email / Phone number<hr class="line"> 
        </div>

                  <?php echo session()->code; ?>
                  <div class="input-container" align="center">
              <label class="email-phone-compname-label">Email or Phone number</label>
           
              <input class="form-input" type="text" id="user-email-or-phone-number" name="user-email-or-phone-number" placeholder="" required>
              <br>
              <br>
              <label class="password-label">Password </label> <a onclick="TogglePassword()" class="float-right cursor" id="toggle_text">Show Password</a>
             
              <input class="form-input" type="password" id="password" name="password" placeholder="" required>
              <br><br> 
              <input  class="remember-me-check-box" type="checkbox" id="" name="" value="">
              <label align="center" class="remember-me-ondevice" for="">Remember me on this device</label>
              <br>
              <br>
                </div>


              <div align="center">
              <button type="submit" class="login-button" id="">Login</button>
              <br>
              <br>
                  <p><a class="forgot-password" href="<?php echo site_url();?>forgot">Forgot Password?</a>
                      <br><br>
                  <a  class="create-account" href="<?php echo site_url();?>register">Create Account</a></p>
              </div>
              </div>
        </div>
    </form>
    </div>
    
</body>
    
<div class="footer-container">
        
        <div align="left">
            <a href="" class="fa fa-facebook"></a>
            <a href="" class="fa fa-instagram"></a>
            <a href="" class="fa fa-twitter"></a>
            <a href="" class="fa fa-google"></a>
    </div>
    
    <br>
        
        <div align="center" class="content-holder">
         
            <div class="footer-table-content">
             Contact&nbsp;Us 
            </div>
            
            <div class="footer-table-content">
             Advertise  
            </div>
            
            <div class="footer-table-content">
             Subscriptions  
            </div>
            
            <div class="footer-table-content">
             Terms&nbsp;of&nbsp;Service 
            </div>
            
            <div class="footer-table-content">
             Help&nbsp;&&nbsp;Support 
            </div>
            
            
            </div>
    
    <p align="center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kokoruns.com </p> 
        
        </div>


        <script src="<?php echo base_url();?>/public/assets/jquery.min.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <script>
        function TogglePassword() 
        {
          var x = document.getElementById("password");
            if (x.type === "password") 
            {
                x.type = "text";
                document.getElementById("toggle_text").innerHTML = "Hide Password";

            } 
            else 
            {
                x.type = "password";
                document.getElementById("toggle_text").innerHTML = "Show Password";
            }
        }

        </script>
    
</html>