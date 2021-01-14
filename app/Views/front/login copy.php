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
     <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"> -->
    
     <script>
        
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += "responsive";}
            else {
                x.className = "topnav";
            }
            }
    </script>
</head>
 
    
 
            <header>
            <nav>
            <a class="logo" href="<?php echo site_url();?>"><img src="<?php echo base_url();?>/public/assets/Images/Logo.png" width="215px"></a>    
            <ul class="topnav" id="myTopnav">
            <li><a href="<?php echo site_url();?>login">Login</a></li>
            <li><a href="<?php echo site_url();?>register">Create account</a></li> 
            <li class="li-for-button a"><a href="<?php echo site_url();?>employerregister"><button type="submit" id="" class="register-company-button">Register a Company</button></a></li>
            <li><a href="javascript:void(0);" class="icon" onclick="myFuction()" ><i class="fa fa-bars"></i></a></li>    
            </ul>
            </nav>
            </header>

           
<body>


<body>
   <div class="login-form-container">
    <form action="<?php echo site_url()?>front/loginaction" method="POST">
    <?= csrf_field() ?>
        <table id="rounded-corner" align="center" class="form-table">
              <tr>
              <td align="center">
              <div style="width: 365px">
              <label><h2 class="login-label">Login</h2></label>
              <?php if(!empty(session()->getFlashdata('success'))){ ?>

                <div class="alert alert-success">
                    <?php echo session()->getFlashdata('success');?>
                </div>
                    
                <?php } ?>
                <?php if(!empty(session()->getFlashdata('error'))){ ?>

                <div class="alert alert-danger">
                    <?php echo session()->getFlashdata('error');?>
                </div>

                <?php } ?>

              <label class="email-phone-compname-label">Email , Phone number or Company name</label>      
              <input class="form-input" type="text" id="user-email-or-phone-number" name="user-email-or-phone-number" placeholder="" required>
              <br><br>
              <label class="password-label">Password</label>    
              <input class="form-input" type="password" id="password" name="password" placeholder="" required>
              <br><br>      
              <input  class="remember-me-check-box" type="checkbox" id="" name="" value="">
              <label align="center" class="remember-me-ondevice" for="">Remember me on this device</label>
              <br>
              <br>
              <div>
              <button type="" class="login-button" id="">Submit</button>
              <br> 
                  <p><a class="forgot-password" href="<?php echo site_url();?>forgot">Forgot Password?</a>
                  <a  class="create-account" href="<?php echo site_url();?>register">Create Account</a></p>
              </div>
              </div>
              </td>
              </tr>
        </table>
    </form>
    </div>
    
</body>

<footer>
    <div class="footer-container">
        
        <div align="left" style="padding-top: ; padding-left: ;">
            <a href="" class="fa fa-facebook"></a>
            <a href="" class="fa fa-instagram"></a>
            <a href="" class="fa fa-twitter"></a>
            <a href="" class="fa fa-google"></a>   
    </div>
        
    <table align="center" class="footer-table">
        <tr class="footer-table-row"> 
            <td class="footer-table-content">
                <h4>Categories</h4>
                Artisans<br><br>
                Beauty & Livestyle<br><br>
                Construction & Housing<br><br>
                Writing & AudioVisual<br><br>
                Research & Professional Services<br><br>
                Web & Mobile<br><br>
                All services<br><br>
            </td>
            <td class="footer-table-content">
                <h4>About</h4>
                Kokoruns.com is an online plafrom<br><br>
                focused on creating a condusive and reliable<br><br>
                avenue for employers and potential employees,<br><br>
                to establish relationships.<br><br>
                <br><br>
                <br><br>
                <br><br>  
            </td>
            <td class="footer-table-content">
                <h4>Support</h4>
                Email: Support@kokoruns.com<br><br>
                Phone: 08090175928<br><br>
                Skype: Kokoruns.com<br><br>
                Twitter: Kokoruns.com<br><br>
                Facebook: fb.me/kokoruns.com<br><br>
                Web support: <a style="text-decoration: none; color:darkblue" href="Help%20and%20Support.html">Help and Support</a><br><br>
                <br><br>
            </td>
            <td class="footer-table-content">
                <h4>Contact Address</h4>
                100242,<br><br>
                Lagos to Ibadan Express Rd.<br><br>
                Alapere - Ojota,<br><br>
                Xceed Hub Nigeria,<br><br>
                Lagos, Nigeria.<br><br>
                <br><br>
                <br><br>
            </td>
        </tr>
    </table>
    <p align="center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kokoruns.com </p>
        </div>
</footer>
</html>