<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
     <link rel="shortcut icon" href="<?php echo base_url();?>/public/assets/Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
    
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Login%20and%20Sign%20up/Profilesetup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">
    
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
    
    <div align="center" class="profile-setup-form-container">



    <?php if(!empty(session()->getFlashdata('success'))){ ?>

        <div class="w3-panel w3-pale-green">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
            <?php echo session()->getFlashdata('success');?>
        </div>

        <?php } ?>

        <?php if(!empty(session()->getFlashdata('error'))){ ?>

        <div class="w3-panel w3-pale-red">
            <?php echo session()->getFlashdata('error');?>
        </div>

        <?php } ?>


    <form action="<?php echo site_url()?>front/profilesetupaction" method="POST">
        <div id="rounded-corner" align="center" class="form-table">
            <div><div align="center"><label><h1 class="login-label">Profile Setup</h1></label></div></div>
            <p>You are required to set up your profile. This is a one-time initial set up and you can always change them later in future from your dashboard. All fields marked * are mandatory</p>
              <div class="display-inline-flex">
                  
              <div align="center">
                <h3 align="left" class="h3-label">First Name *</h3>  
              <input class="form-input" type="text" id="first_name" name="first_name" placeholder="First Name" required>
              <br>
                  <h3 align="left" class="h3-label">Last Name (Surname) *</h3>
              <input class="form-input" type="text" id="last_name" name="last_name" placeholder="Last Name" required>
              <br>
                  <h3 align="left" class="h3-label">Email</h3>
              <input class="form-input" type="email" id="user_email" name="user_email" placeholder="Email">
              <br>
                  <h3 align="left" class="h3-label">Phone Number *</h3>
              <input class="form-input" type="number" id="user_phonenum" name="user_phonenum" placeholder="Phone Number" required>
              <br>
                  <h3 align="left" class="h3-label">Date of Birth *</h3>
              <input class="form-input" type="date" id="user_dob" name="user_dob" placeholder="Date of Birth" required>
              <br>
                  <!-- <h3 align="left" class="h3-label">Street / Estate Name</h3>
              <input class="form-input" type="text" id="user_street/estate" name="user_street/estate" placeholder="Street / Estate Name" required> -->
              <h3 align="left" class="h3-label">House No.</h3>
              <input class="form-input" type="number" id="house_no" name="house_no" placeholder="Street / Estate Name">
              <br>
                  <h3 align="left" class="h3-label">Street / Estate Name</h3>
              <input class="form-input" type="text" id="user_street/estate" name="user_street/estate" placeholder="Street / Estate Name">
              <br>
                  <h3 align="left" class="h3-label">Profession / craft</h3>
             
                <select class="form-select" id="profession_or_craft" name="profession_or_craft" required>
                  <option value="">Select Profession / Craft</option>
                    <?php foreach($professions as $profession){?>
                        <option value="<?php echo $profession['fname']; ?>"><?php echo $profession['fname']; ?></option>
                    <?php } ?>
                </select>
                <br>
                  <h3 align="left" class="h3-label">Educational Qualification *</h3>
             
                  <select name="educational_qualification" id="" class="form-select" required>
                        <option value="Any">Select one</option>
                        <option value="First School Leaving Certificate">First School Leaving Certificate</option>
                        <option value="Junior Secondary School Certificate">Junior Secondary School Certificate</option>
                        <option value="Senior Secondary School Certificate">Senior Secondary School Certificate</option>
                        <option value="National Certificate of Education">National Certificate of Education</option>
                        <option value="Ordinary National Diploma">Ordinary National Diploma</option>
                        <option value="Higher National Diploma">Higher National Diploma</option>
                        <option value="Bachelor's Degree">Bachelor's Degree</option>
                        <option value="Master's Degree">Master's Degree</option>
                        <option value="Doctorate's Degree">Doctorate's Degree</option>
                    </select>
              <br>
                  <h3 align="left" class="h3-label">Desired Employment Type</h3>
                  <select class="form-select" id="employment_type" name="employment_type" required>
                        <option value="">Select one</option>
                        <option value="Full Time">Full Time</option>
                        <option value="Part Time">Part Time</option>
                        <option value="Remote">Remote</option>
                        <option value="Contract">Contract</option>
                        <option value="Internship">Internship</option>
                </select>
              <br>
              <h3 align="left" class="h3-label">State Of Residence *</h3>
                  <select class="form-select"  id="state" name="state" required>
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
              <br>
              <h3 align="left" class="h3-label">Local Government Area Of Residence *</h3>
                  <select class="form-select" id="lga" name="lga" required>
                        <option value="">Select LGA</option>
                   </select>         
              <br>
              
            </div>       
            </div> 
            
            <div colspan="2" align="center">
                <br>
              <button type="" class="profile-setup-proceed-button" id="">Proceed</button>
              <br>
                  <p>
                  <a class="back-to-home" href="<?php echo site_url();?>">Back to Home</a></p>
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


        <script src="<?php echo base_url();?>/public/assets/jquery.min.js"></script>

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