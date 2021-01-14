<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
     <link rel="stylesheet" href="Css/Recover%20Password%20page.css">
     <link rel="shortcut icon" href="Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Login%20and%20Sign%20up/Recover%20Password%20page.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css"> 
    
</head>
 
   <header class="header-class">
           
             <div style="float: left">
            <a href="<?php echo site_url();?>">
            <img class="logo" src="<?php echo base_url();?>/public/assets/Images/Header%20and%20Footer/Logo.png"></a>
                </div>
        
        
          <div class="topnav">
          <a href="<?php echo site_url();?>login">Login</a>
            <a href="<?php echo site_url();?>register">Register</a></div> 
       
            </header>
           
<body>
   <div class="login-form-container" align="center">
   <form action="<?php echo site_url()?>front/forgetpasswordaction" method="POST">
        <div id="rounded-corner" align="center" class="form-table">
              <div align="center">
              <div style="width: 85%;">
              <label><h3 class="login-label">Please put in your Email</h3></label>

              <?php if(!empty(session()->getFlashdata('success'))){ ?>

                <div class="w3-pale-green" style="">
                    <?php echo session()->getFlashdata('success');?>
                </div>
                    
                <?php } ?>

                <?php if(!empty(session()->getFlashdata('error'))){ ?>

                    <div class="w3-pale-red">
                        <ul style="">
                            <?php foreach (session()->getFlashdata('error') as $error) { ?>
                                <li><?php echo $error ?></li>
                            <?php } ?> 
                        </ul>
                    </div>

                <?php } ?>
 
              <label style="font-family: sans-serif; color: black; font-weight: 510; float:left; padding-bottom: 10px">Email or Phone number</label>
              <input class="form-input" type="text" id="user-email-or-phone-number" name="user-email-or-phone-number" placeholder="" required>
              <br>
              <br> 
              <label align="center" class="remember-me-ondevice" for=""> We will send you a link to reset your password</label>
              <br>
              <br>
              <div>
              <button type="" action="" class="login-button" id="">Send Link</button>
              <br> 
                  <!-- <p><a href="" class="forgot-password" action="">Re-send link</a> <br><br> -->
                  <br>
                  <a  class="create-account" href="<?php echo site_url();?>login">Back to Login</a></p>
              </div>
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
        
        <div class="content-holder">
            <div class="footer-table-content">
                <h4>Support</h4>
                Email: Support@kokoruns.com<br><br>
                Phone: 08090175928<br><br>
                Skype: Kokoruns.com<br><br>
                Twitter: Kokoruns.com<br><br>
                Facebook: fb.me/kokoruns.com<br><br>
                Web support: <a style="text-decoration: none; color:darkblue" href="Help%20and%20Support.html">Help and Support</a><br><br>
            </div>
            <div class="footer-table-content">
                <h4>Contact Address</h4>
                100242,<br><br>
                Lagos to Ibadan Express Rd.<br><br>
                Alapere - Ojota,<br><br>
                Xceed Hub Nigeria,<br><br>
                Lagos, Nigeria.<br><br>
            </div>
            </div>
        
        <p align="center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kokoruns.com </p>
        
        </div>
    
</html>