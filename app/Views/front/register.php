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
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
 
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Login%20and%20Sign%20up/Create%20account%20page.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css"> 
    
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
   <div align="center" class="login-form-container">
   <form action="<?php echo site_url()?>front/registeraction" method="POST">
        <div id="rounded-corner" align="center" class="form-table">


        <?php if(!empty(session()->getFlashdata('success'))){ ?>

            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Success!</strong> <?php echo session()->getFlashdata('success');?>
            </div>
                
            <?php } ?>

            <?php if(!empty(session()->getFlashdata('error'))){ ?>

                <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <ul style="">
                        <?php foreach (session()->getFlashdata('error') as $error) { ?>
                            <li><?php echo $error ?></li>
                        <?php } ?> 
                    </ul>
                </div>

            <?php } ?>


            <label class="label-align"><h2 class="login-label">Register&nbsp;<b class="label-tag">User</b></h2></label>



            <div class="other-buttons-div">
            
            <button class="google-button">
            <div><img class="icons" src="<?php echo base_url();?>/public/assets/Images/Index/Google%20Logo.png"></div><div style="padding-top: 2px;">
<!--                     
                <a href="<?php ///echo $loginButton; ?>"> 
                    Continue with Google
                </a> -->

                <a href="javascript:void;"> 
                    Continue with Google
                </a>
                
                </div></button>
            <br><br>     
            <button class="facebook-button">
                <div>
                <img class="icons" src="<?php echo base_url();?>/public/assets/Images/Index/Facebook%20Logo.png"></div>
                <div style="padding-top: 2px;">
                    <!-- <a href="<?php //echo $facebook_login_url;?>"> 
                        Continue with Facebook
                    </a> -->
                    <a href="javascript:void;"> 
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


              
              <div align="center">


              
            
             
                 
                <div class="input-container" align="center">
              <label class="email-or-phone-number-label" >Email or Phone number</label><span class="signup-error" id="username-msg-error"></span>
                  <br><br>
              <input class="form-input" type="text" id="user-email-or-phone-number" name="user-email-or-phone-number" placeholder="" required>
              <br><br><br>
              <label class="password-label">Password <span  id="password-error" class="eightplus-characters-span" >*8 characters + 1 number</span>
              </label> 
              <span class="signup-error w3-pale-red" id="password-msg-error"></span>       
              <br><br>
              <input class="form-input" type="password" id="myPassword" name="password" placeholder="" required>  
              <br><br><br>
              <label class="confirm-password-label" >Confirm</label>
                <br><br>
              <input class="form-input" type="password" id="myConfirmPassword" name="password2" placeholder="" required>
              <br><br><br>
              <input  class="" type="checkbox" id="" name="" value="">
              <label align="center" class="remember-me-ondevice" for=""> Remember me on this device</label>
              <br>
              <br>
              </div>
              <div align="center">
              <button type="submit" class="login-button" id="submit">Register</button>
              <br> 
              <br>
                  <p><a class="forgot-password" href="<?php echo site_url();?>forgot">Forgot Password?</a>
                      <br><br>
                  <a  class="create-account" href="<?php echo site_url();?>login">Back to Login</a></p>
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

        <!-- <script type="text/javascript" >


function formValidation2(oEvent) 
{ 
    oEvent = oEvent || window.event; 
    var txtField = oEvent.target || oEvent.srcElement; 

    var t1ck=true;
    document.getElementById("username-msg-error").innerHTML = "";
    document.getElementById("password-msg-error").innerHTML = "";
    document.getElementById("confirm-password-error").innerHTML = "";


    if(!document.getElementById("myPassword").value.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,20}$/))
    { 

        document.getElementById("password-msg-error").innerHTML = "<br>Poor Password. Needs Improvement";
        t1ck=false; 

    }

    CheckSatus(t1ck);

}


function formValidation3(oEvent) 
{ 
    oEvent = oEvent || window.event; 
    var txtField = oEvent.target || oEvent.srcElement; 

    var t1ck=true;
    document.getElementById("username-msg-error").innerHTML = "";
    document.getElementById("password-msg-error").innerHTML = "";
    document.getElementById("confirm-password-error").innerHTML = "";

    if(document.getElementById("myPassword").value != document.getElementById("myConfirmPassword").value)
    { 
        document.getElementById("confirm-password-error").innerHTML = "&nbsp;&nbsp;Password Not Matched&nbsp;&nbsp;";
        t1ck=false; 
    }

    CheckSatus(t1ck);

}


function CheckSatus(t1ck) 
{
    if(t1ck)
    {
        document.getElementById("submit").disabled = false;
        document.getElementById("submit").style.background = "#0991FF";

    }
    else
    {
        document.getElementById("submit").disabled = true; 
        document.getElementById("submit").style.background = "#DCDCDC";

    } 
    
}


window.onload = function () { 

    var t1ck=false;
    var submit = document.getElementById("submit"); 

    document.getElementById("submit").disabled = true;
    document.getElementById("submit").style.background = "#DCDCDC";

    var t1 = document.getElementById("user-email-or-phone-number");
    var p1 = document.getElementById("myPassword"); 
    var p2 = document.getElementById("myConfirmPassword"); 

    //t1.onkeyup = formValidation; 
    p1.onkeyup = formValidation2; 
    p2.onkeyup = formValidation3; 

}

</script> -->
    
</html>