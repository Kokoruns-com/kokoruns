<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Profilesetup.css">
     <link rel="shortcut icon" href="<?php echo base_url();?>/public/assets/Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Login%20and%20Sign%20up/Profilesetup.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css"> 

</head> 
 
   <header class="header-class">
           
        <div style="float: left;">
            <a href="index.html">
            <img class="logo" src="<?php echo base_url();?>/public/assets/Images/Header%20and%20Footer/Logo.png"></a>
                </div>
        
        
        
    <div class="login">
    <a href="">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Login</a><br style="line-height: 1.3;">
    <div class="login-dropdown">
    <a href="">User</a><br>
    <a href="">Company</a><br>
    <a href="">School</a><br>
    <a href="">Association</a>    
    </div>    
    </div>
        
       
        
    <div class="sign-up">
    <a href="">    
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign&nbsp;Up</a><br style="line-height: 1.3;">
    <div class="sign-up-dropdown">
    <a href="">User</a><br>
    <a href="">Company</a><br>
    <a href="">School</a><br>
    <a href="">Association</a>    
    </div>     
    </div>
        

        
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
                <div class="w3-pale-red">
                    <ul style="">
                        <?php foreach (session()->getFlashdata('error') as $error) { ?>
                            <li><?php echo $error ?></li>
                        <?php } ?> 
                    </ul>
                </div>
        </div>

        <?php } ?>


    <form action="<?php echo site_url()?>front/profilesetupaction" method="POST">
        <div id="rounded-corner" align="center" class="form-table">
            <div><div align="center"><label><h1 class="login-label">Profile Setup</h1></label></div></div>
            <p>You are required to set up your profile. This is a one-time initial set up and you can always change them later in future from your dashboard. All fields marked * are mandatory</p>
              <div class="display-inline-flex">
                  
              <div style="display: grid;" align="center">
                  
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            First Name<b>*</b></div>
            <input class="form-input" type="text" id="first_name" name="first_name" placeholder="" required>  
            </div>  
              
              
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Last Name (Surname)<b>*</b></div>
            <input class="form-input" type="text" id="last_name" name="last_name" placeholder="" required>    
            </div>
                  
             <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Age Range<b>*</b></div>
            <select class="form-select" id="age-range" name="age_range" required>
                  <option value=""></option>
                  <option value="15-18">15-18</option>
                  <option value="19-25">19-25</option>
                  <option value="26-35">26-35</option>
                  <option value="36-50">36-50</option>
                  <option value="51-70">51-70</option>
                  <option value="71+">71+</option>
                </select>    
            </div>      
              
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Email</div>
            <input class="form-input" type="email" id="user_email" name="user_email" placeholder="">
            </div>
              
              
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Phone Number<b>*</b></div>
            <input class="form-input" type="number" id="user_phonenum" name="user_phonenum" placeholder="" required>      
            </div>
              
            <!--div align="left" class="h3-label"><div style="padding-bottom: 10px">
            Street / Estate Name</div>
            <input class="form-input" type="text" id="user_street/estate" name="user_street/estate" placeholder="" required>    
            </div-->
                  
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Academic Level<b>*</b></div>
                    <select name="educational_qualification" id="" class="form-select" required>
                        <option value="">Select one</option>
                        <option value="None">None</option>
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
            </div>
              
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Profession<b>*</b></div>
                
           
                
            <!-- <select class="form-select" id="profession_or_craft" name="profession_or_craft" required>
                  <option value="">Select one</option>
                    <?php //foreach($professions as $profession){?>
                        <option value="<?php //echo $profession['fname']; ?>"><?php //echo $profession['fname']; ?></option>
                    <?php //} ?>
                </select> -->

                <input type="text" class="form-select" name="profession_or_craft" id="profession_or_craft" value="<?php echo $applicant_details['fprofession']; ?>" autocomplete="off"> 
                <div class="job-options-box" style="overflow: auto;">
                </div>

                 <input type="text" class="form-select" id="prof1" name="other_professions1" value="<?php echo $applicant_details['fprofession']; ?>" autocomplete="off"> 
                <div class="job-options-box2" style="overflow: auto;">
                </div> 

                 <input type="text" class="form-select" id="prof2" name="other_professions2" value="<?php echo $applicant_details['fprofession']; ?>" autocomplete="off"> 
                <div class="job-options-box3" style="overflow: auto;">
                </div>  

                <input type="text" class="form-select" id="prof3" name="other_professions3" value="<?php echo $applicant_details['fprofession']; ?>" autocomplete="off"> 
                <div class="job-options-box4" style="overflow: auto;">
                </div> 

                <input type="text" class="form-select" id="prof4" name="other_professions4" value="<?php echo $applicant_details['fprofession']; ?>" autocomplete="off"> 
                <div class="job-options-box5" style="overflow: auto;">
                </div> 
                
            <button id="profbutton1" align="left" class="add-professions-button" onclick="ProfessionButton1(); return false;">
            Add Profession +    
            </button>
                
            <script>
            
 function ProfessionButton1() {
     document.getElementById("prof1").style.display="grid";
                    
    document.getElementById("profbutton2").style.display="block";
    document.getElementById("profbutton1").style.display="none";        
                }
                
            </script>    
                
                
            <button id="profbutton2" align="left" class="add-professions-button" onclick="ProfessionButton2(); return false;">
            Add Profession +    
            </button>
                
                   <script>
            
function ProfessionButton2() {
     document.getElementById("prof2").style.display="grid";
                    
    document.getElementById("profbutton3").style.display="block";
    document.getElementById("profbutton2").style.display="none"; 
                    
                }
                
            </script>                    
   
                
            <button id="profbutton3" align="left" class="add-professions-button" onclick="ProfessionButton3(); return false;">
            Add Profession +    
            </button>
                
                    <script>
            
  function ProfessionButton3() {
     document.getElementById("prof3").style.display="grid";
                    
    document.getElementById("profbutton4").style.display="block";
      
  document.getElementById("profbutton3").style.display="none"; 
                    
                }
                
            </script>      
                
                
            <button id="profbutton4" align="left" class="add-professions-button" onclick="ProfessionButton4(); return false;">
            Add Profession +    
            </button>
                
                 <script>
            
    function ProfessionButton4() {
     document.getElementById("prof4").style.display="grid";
        
 document.getElementById("profbutton4").style.display="none";     
                    
                }
                
            </script>         
                
            </div>      
        
                  
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Desired Employment Type<b>*</b></div>
    
            <select class="form-select" id="employment_type" name="employment_type" required>
                <option value="">Select one</option>
                <option value="Full Time">Full Time</option>
                <option value="Part Time">Part Time</option>
                <option value="Remote">Remote</option>
                <option value="Contract">Contract</option>
                <option value="Internship">Internship</option>
        </select>
                
            <script>
           function ShowEmployerInput() {
               var x = document.getElementById("EmploymentStatusInput").value;
               if(x == 2){
                document.getElementById("CompBrandInput").style.display="grid";  
               }
               else if(x == 4) {
                document.getElementById("CompBrandInput2").style.display="grid";   
               }
               
               else {
                 document.getElementById("CompBrandInput").style.display="none";    
                 
                document.getElementById("CompBrandInput2").style.display="none";    
               }
           }
                
                
            </script>
                
                </select>    
            </div>          
              
              
            <div align="left" class="h3-label">
            <div style="padding-bottom: 10px">
            Current Location<b>*</b></div>
                
                <div class="state-lga">
                <select class="form-select-state"  id="state" name="state" required>
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
                    
                <select class="form-select-lga" id="lga" name="lga" required>
                   <option value="0">Select LGA:</option>
                </select>
                </div>
                
            </div>
                      
              <br>
              
            </div>       
            </div> 
            
            <div colspan="2" align="center">
                <br>
              <button type="" class="profile-setup-proceed-button" id="">Proceed</button>
              <br>
                  <p>
                  <a class="back-to-home" href="index.html">Back to Home</a></p>
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


<script>

$("#profession_or_craft").keyup(function(){

    var keyword = $(this).val();
    var textbox_no = 9;
     
  if(keyword.length == 2)
	{

		$.ajax({

        url: '<?php echo site_url(); ?>applicant/searchprofessions',
        type: "POST",
        data: {keyword:keyword, textbox_no:textbox_no},
        dataType: "json",
        beforeSend: function()
        {
          $("#profession_or_craft").css("background","#FFF url(<?php echo base_url();?>/public/assets/Images/LoaderIcon.gif) no-repeat 16px");
		    },
        success: function(data) {
            //code to execute
            //console.log(data.professions);
            
            //$(".suggestion-box").show();
              $(".job-options-box").html(data.professions);
              $("#profession_or_craft").css("background","#FFF");
            //console.log(data);
        
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                //alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

  }


	});

</script>


<script>

$("#search_professions2").keyup(function(){

    var keyword = $(this).val();
    var textbox_no = 2;
    //alert(keyword)

    if(keyword.length == 2)
	{


		$.ajax({

        url: '<?php echo site_url(); ?>applicant/searchprofessions',
        type: "POST",
        data: {keyword:keyword, textbox_no:textbox_no},
        dataType: "json",
        beforeSend: function(){
			$("#search_applicants").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
        success: function(data) {
            //code to execute
            //console.log(data.professions);
            
            //$(".suggestion-box").show();
             $(".suggestion-box2").html(data.professions);
            //console.log(data);
        
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                //alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

      }
	});

</script>

<script>

$("#search_professions3").keyup(function(){

    var keyword = $(this).val();
    var textbox_no = 3;

    //alert(keyword)
    if(keyword.length == 2)
	{


		$.ajax({

        url: '<?php echo site_url(); ?>applicant/searchprofessions',
        type: "POST",
        data: {keyword:keyword, textbox_no:textbox_no},
        dataType: "json",
        beforeSend: function(){
			$("#search_applicants").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
        success: function(data) {
            //code to execute
            //console.log(data.professions);
            
            //$(".suggestion-box").show();
             $(".suggestion-box3").html(data.professions);
            //console.log(data);
        
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

      }

	});

</script>


<script>

$("#search_professions4").keyup(function(){

    var keyword = $(this).val();
    var textbox_no = 4;
    //alert(keyword)

    if(keyword.length == 2)
	{


		$.ajax({

        url: '<?php echo site_url(); ?>applicant/searchprofessions',
        type: "POST",
        data: {keyword:keyword, textbox_no:textbox_no},
        dataType: "json",
        beforeSend: function(){
			$("#search_applicants").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
        success: function(data) {
            //code to execute
            //console.log(data.professions);
            
            //$(".suggestion-box").show();
             $(".suggestion-box4").html(data.professions);
            //console.log(data);
        
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

      }

	});

</script>


</html>