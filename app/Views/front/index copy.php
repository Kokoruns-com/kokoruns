<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
     <link rel="shortcut icon" href="<?php echo base_url();?>/public/assets/Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">

    
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Index/index.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">

    <meta name="appleid-signin-client-id" content="[CLIENT_ID]">
    <meta name="appleid-signin-scope" content="[SCOPES]">
    <meta name="appleid-signin-redirect-uri" content="[REDIRECT_URI]">
    <meta name="appleid-signin-state" content="[STATE]">
    <meta name="appleid-signin-nonce" content="[NONCE]">
    <meta name="appleid-signin-use-popup" content="true"> <!-- or false defaults to false -->
    
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
    
    <div align="center" class="home-page-container">
    
    <div align="center" class="login-form-container">
        
        <div class="form-header">Join Kokoruns!</div>
        
        <div class="other-buttons-div">
            
        <button class="google-button">
        <div><img class="icons" src="<?php echo base_url();?>/public/assets/Images/Index/Google%20Logo.png"></div><div style="padding-top: 2px;">
        
            <a href="<?php echo $loginButton; ?>"> 
                Continue with Google
            </a>
            
            </div></button>
          <br><br>     
        <button class="facebook-button">
            <div>
            <img class="icons" src="<?php echo base_url();?>/public/assets/Images/Index/Facebook%20Logo.png"></div>
            <div style="padding-top: 2px;">
                <a href="<?php echo $facebook_login_url;?>"> 
                    Continue with Facebook
                </a>
                </div>
        </button>
           <br><br> 
        <button class="apple-button" id="appleid-signin" data-type="sign in">
        <!-- <div style="padding-top: 4px;" >Sign up with Apple</div> -->
        </button>    
        <!-- <div id="appleid-signin" data-color="black" data-border="true" data-type="sign in"></div> -->
        </div>
        
        
        <div class="hr-div">
        Or use Email / Phone number<hr class="line"> 
        </div>
        
    
            <h4>Register As</h4> 

            <br>

            <div class="row">
                <div class="col">
                    <a href="<?php echo site_url();?>register" class="btn btn-primary btn-block">User</a>
                </div>
                <div class="col">
                    <a href="<?php echo site_url();?>cregister" class="btn btn-primary btn-block">Company</a>
                </div>
                <div class="col">
                    <a href="<?php echo site_url();?>sregister" class="btn btn-primary btn-block">School</a>
                </div>
                <div class="col">
                    <a href="<?php echo site_url();?>aregister" class="btn btn-primary btn-block">Association</a>
                </div>
            </div>
            
                
            
                
            <?php echo session()->userid; ?>
                
           

        <br>    
        <br>
        
        <div class="login-button-div">
        <div class="label-2">Already have an account?&nbsp;
           
            <div class="dropdown">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                    Login
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?php echo site_url(); ?>login">As User</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url(); ?>clogin">As Company</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url(); ?>slogin">As School</a>
                        <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="<?php echo site_url(); ?>alogin">As Association</a>
                </div>
            </div>
        </div>     
        </div>
        
        
    
    </div>
   
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
             <a class="text-white" href="<?php echo site_url();?>terms">Terms&nbsp;of&nbsp;Service </a> 
            </div>

          
            <div class="footer-table-content">
             <a class="text-white" href="<?php echo site_url();?>privacy">Privacy Policy</a> 
            </div>
            
            
            </div>
    
    <p align="center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kokoruns.com </p> 
        
        </div>

  <script src="<?php echo base_url();?>/public/assets/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="https://appleid.cdn-apple.com/appleauth/static/jsapi/appleid/1/en_US/appleid.auth.js"></script>

  <script type="text/javascript">
            AppleID.auth.init({
                clientId : 'excanny@yahoo.com',
                scope : '[SCOPES]',
                redirectURI : '[REDIRECT_URI]',
                state : '[STATE]',
                nonce : '[NONCE]',
                usePopup : true //or false defaults to false
            });
        </script>
    
</html>