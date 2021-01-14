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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Login%20and%20Sign%20up/Login%20page.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css"> 

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
        
        
        
                <div class="login">
    <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</a><br style="line-height: 1.3;">
    <div class="login-dropdown">
    <a href="<?php echo site_url(); ?>login">User</a><br>
    <a href="<?php echo site_url(); ?>clogin">Company</a><br>
    <a href="<?php echo site_url(); ?>slogin">School</a><br>
    <a href="<?php echo site_url(); ?>alogin">Association</a>    
    </div>    
    </div>
        
       
        
    <div class="sign-up">
    <a href="">    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Register</a><br style="line-height: 1.3;">
    <div class="sign-up-dropdown">
    <a href="<?php echo site_url(); ?>register">User</a><br>
    <a href="<?php echo site_url(); ?>cregister">Company</a><br>
    <a href="<?php echo site_url(); ?>sregister">School</a><br>
    <a href="<?php echo site_url(); ?>aregister">Association</a>    
    </div>     
    </div>
        

        
    </header>
<body>
   <div class="login-form-container" align="center">
   <form action="<?php echo site_url()?>front/aloginaction" method="POST">
        <div id="rounded-corner" align="center" class="form-table">
              <div align="center">
              <label><h2 class="login-label">Login&nbsp;<b class="label-tag">Associations</b></h2></label>
            

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


                  <div class="input-container" align="center">
              <label class="email-phone-compname-label">Email</label>
              <br><br>
              <input class="form-input" type="email" id="user-email-or-phone-number" name="user-email-or-phone-number" placeholder="" required>
              <br><br><br>
              <label class="password-label">Password</label> <a onclick="TogglePassword()" class="float-right cursor" id="toggle_text">Show Password</a>
              <br><br>
              <input class="form-input" type="password" id="password" name="password" placeholder="" required>
              <br><br><br> 
              <input  class="remember-me-check-box" type="checkbox" id="" name="" value="">
              <label align="center" class="remember-me-ondevice" for="">Remember me on this device</label>
              <br>
              <br>
                </div>  
              <div align="center">
              <button type="" class="login-button" id="">Login</button>
              <br>
                  <p><a class="forgot-password" href="<?php echo site_url();?>forgot">Forgot Password?</a>
                      <br><br>
                  <a  class="create-account" href="<?php echo site_url();?>aregister">Create Account</a></p>
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

    
</html>