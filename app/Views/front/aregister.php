<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Registercompany.css">
     <link rel="shortcut icon" href="<?php echo base_url();?>/public/assets/Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    
    
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Login%20and%20Sign%20up/Registercompany.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">
    
</head>
 
    
 <header class="header-class">
           
             <div style="float: left">
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
   
    
 <div align="center" class="company-reg-form-container">
  <form action="<?php echo site_url()?>front/aregisteraction" method="POST">
        <div id="rounded-corner" align="center" class="form-table">
            <div><div align="center"><label><h1 class="login-label">Association Registration</h1></label></div></div>



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
              <div class="display-inline-flex">
                  
                  
                  
              <div style="display: grid;" align="center">
                  
                  
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Association Name<b>*</b></div>
            <input class="form-input" type="text" id="association_name" name="association_name" placeholder="" required>  
            </div>
                  
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            CAC Registration Number<b></b></div>
            <input class="form-input" type="text" id="cac" name="cac" placeholder="" required>  
            </div>
                  
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Contact Email<b>*</b></div>
            <input class="form-input" type="text" id="association_email" name="association_email" placeholder="" required>  
            </div>

            
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Password<b>*</b>(Minimum of 8 characters)</div>
            <input class="form-input" type="password" id="association_pword" name="association_pword" placeholder="" required>  
            </div>

            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Confirm Password<b>*</b></div>
            <input class="form-input" type="password" id="confrim_association_pword" name="confrim_association_pword" placeholder="" required>  
            </div>
                  
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Contact Phone Number<b>*</b></div>
            <input class="form-input" type="number" id="association_number" name="association_number" placeholder="" required>  
            </div>  
                  
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Main Office Location<b>*</b></div>
                
                <div class="main-office-location">

                <select class="company-select-state"  id="state" name="state" required>
                  <option value="" selected="selected"> Select State </option>
                  <option value="Abia">Abia</option>
                  <option value="Adamawa">Adamawa</option>
                  <option value="AkwaIbom">AkwaIbom</option>
                  <option value="Anambra">Anambra</option>
                  <option value="Bauchi">Bauchi</option>
                  <option value="Bayelsa">Bayelsa</option>
                  <option value="Benue">Benue</option>
                  <option value="Borno">Borno</option>
                  <option value="Cross River">Cross River</option>
                  <option value="Delta">Delta</option>
                  <option value="Ebonyi">Ebonyi</option>
                  <option value="Edo">Edo</option>
                  <option value="Ekiti">Ekiti</option>
                  <option value="Enugu">Enugu</option>
                  <option value="FCT">FCT</option>
                  <option value="Gombe">Gombe</option>
                  <option value="Imo">Imo</option>
                  <option value="Jigawa">Jigawa</option>
                  <option value="Kaduna">Kaduna</option>
                  <option value="Kano">Kano</option>
                  <option value="Katsina">Katsina</option>
                  <option value="Kebbi">Kebbi</option>
                  <option value="Kogi">Kogi</option>
                  <option value="Kwara">Kwara</option>
                  <option value="Lagos">Lagos</option>
                  <option value="Nasarawa">Nasarawa</option>
                  <option value="Niger">Niger</option>
                  <option value="Ogun">Ogun</option>
                  <option value="Ondo">Ondo</option>
                  <option value="Osun">Osun</option>
                  <option value="Oyo">Oyo</option>
                  <option value="Plateau">Plateau</option>
                  <option value="Rivers">Rivers</option>
                  <option value="Sokoto">Sokoto</option>
                  <option value="Taraba">Taraba</option>
                  <option value="Yobe">Yobe</option>
                  <option value="Zamfara">Zamfara</option>
                </select>
                    
                    &nbsp;&nbsp;&nbsp;
                    
            <select class="company-select-lga" id="lga" name="lga" required>
                   <option value="0">Select LGA:</option>
                </select>
                </div>
                
            </div>          
                  
              <br>
                  
            </div>
                        
                  
            </div> 
            
            <div colspan="2" align="center">
             
              <button type="" class="Register-company-button" id="">Register Association</button>
              <br>
              <br>
    </form>
                  <p>
                  <a class="back-to-home" href="<?php echo site_url(); ?>login">Login</a></p>
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
            $('#state').change(function(){
                    var state = $('#state').val();
                    //alert(state);
                    if(state != '')
                    {
                        //alert("Hi");
                        $.ajax({
                            url:"<?php echo site_url(); ?>front/getAllLGAs",
                            method:"POST",
                            data:{state:state},
                            success:function(data)
                            {
                                //alert(data);
                                $('#lga').html(data);
                            },
                            error: function(xhr, textStatus, errorThrown) {
                            //code to execute
                                //alert(xhr.responseText);
                            //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                            },
                        });
                        
                    }
                    else
                    {
                        // $('#state').html('<option value="">Select State</option>');
                        // $('#city').html('<option value="">Select City</option>');
                    }
                });
        </script>
    
</html>