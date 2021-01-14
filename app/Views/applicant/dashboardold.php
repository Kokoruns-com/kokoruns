<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
    
    
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/User%20Profile/Education.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/User%20Profile/Experience.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/User%20Profile/Online%20Links.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/User%20Profile/Portfolio%20Images.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/User%20Profile/Skills.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/User%20Profile/User%20Info.css">
    <link rel="stylesheet" href="">
     
    
    
     <link rel="shortcut icon" href="<?php echo base_url();?>/public/assets/Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css"> 
    
     <style>
      

        .text-white{
            color: #fff !important;
        }

        .cursor{
          cursor:pointer;
        }

     </style>

</head>
    
    <header class="header-class">
           
             <div style="float: left">
            <a href="<?php echo site_url();?>">
            <img class="logo" src="<?php echo base_url();?>/public/assets/Images/Header%20and%20Footer/Logo.png"></a>
                </div>
        
        
          <div class="topnav">
            <a href="<?php echo site_url();?>logout">Logout</a>
       
            </header>
    
    <body style="margin: 0px; background-color: #f5f5f5">
        
        <!--USER INFO-->
        
        <section class="user-info-container">    
            
            <div class="banner">
            
            <div class=""> 

            <div class="row">
                <div class="col">
                  
                    <i class="inbox fa fa-envelope w3-text-white" style="font-size:25px !important; padding:0px;"></i>
                       
                </div>

                <div class="col">
                    <div class="dropdown dropleft float-right">
                        <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                            Dropdown button
                        </button> -->
                        <i class="fa fa-bars text-white cursor" data-toggle="dropdown" style="font-size: 26px !important;"></i>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/experiences">Experiences</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/educations">Educations</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/portfolios">Portfolios</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/search">Search</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/teams">Teams</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/messages/inbox" >Messages</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/jobdash" >JobDash</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/events">Events</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/allaboutyou">All About You</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/jobs">Jobs Board</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/recommendations">Recommendations</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/settings">Settings</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/logout">Logout</a>
                        </div>
                    </div>
                </div>

            </div>
             
           
                
  <!--          <a href=""><img class="settings" src="<?php //echo base_url();?>/public/assets/Images/User%20Profile/Settings%20Icon.png"></a>     -->


            


            
            </div>
            
       <div align="center" class="dp-div"> <img class="dp" src="<?php echo base_url();?>/public/assets/Images/User%20Profile/User%20DP.png"> 
            </div>
            
            <!--a style="text-decoration: none" href=""><div align="center" class="user-link">kokoruns.com/alfredgreg</div></a-->
            
        <div align="center" class="user-name"><?php echo ucwords(strtolower($applicant_details['ffirst_name'])); ?> <?php echo ucwords(strtolower($applicant_details['flast_name'])); ?> <img src="" class="verification"> </div> 
            
        <div align="center" class="user-profession">Accountant </div>
            
        <div id="view-bio-div" onclick="ViewBio()" align="center" class="view-bio-div">
        <button align="center" class="view-bio-button cursor">View Bio</button></div>
                
        <div id="hide-bio-div" onclick="HideBio()" align="center" class="hide-bio-div">
             <button align="center" class="hide-bio-button cursor">Hide Bio</button></div>            
         
        <!--display-inline-block;-->    
        <!-- <div id="user-bio" align="center" class="user-bio"> 

                
            <div class="bio-info">
            <label class="bio-info-label">Recommendations </label><br>
            <a href="a">47</a><br><br>
            <label class="bio-info-label">Employment Choice</label><br>
            Volunteer<br><br>    
            <label class="bio-info-label">Phone Number</label>
            <input type="number" class="w3-input profile_setup w3-border"  name="" id="phone" value="<?php //echo $applicant_details['fphone']; ?>"><br>
            <label class="bio-info-label">Academic Level</label><br>   
            <select class="w3-select profile_setup w3-border" name="" id="certificate">
                <option value="">Select one</option>
                <option value="First School Leaving Certificate">First School Leaving Certificate</option>
                <option value="Junior Secondary School Certificate">Junior Secondary School Certificate</option>
                <option value="Senior Secondary School Certificate">Senior Secondary School Certificate</option>
                <option value="National Certificate of Education">National Certificate of Education</option>
                <option value="Ordinary National Diploma">Ordinary National Diploma</option>
                <option value="Higher National Diploma">Higher National Diploma</option>
                <option value="Bachelor's Degree">Bachelor's Degree</option>
                <option value="Master's Degree">Master's Degree</option>
                <option value="Doctorate's Degree">Doctorate's Degree</option>
            </select> <br><br>
            <label class="bio-info-label">Company / Brand</label><br>   
            ABC Corrporation<br><br>
            <label class="bio-info-label">Minimum Salary (&#8358;)</label><br>
            <!-- &#8358; 200,000<br>
            <input class="w3-input profile_setup w3-border" type="number" name="minimum_salary" id="minimum_salary" value="<?php //echo $applicant_details['fminimum_salary']; ?>"><br>
            <label class="bio-info-label">Location</label><br>
             <?php //echo $applicant_details['flga']; ?>, <?php //echo $applicant_details['fstate']; ?> State<br>
            <button onclick="document.getElementById('id03').style.display='block'">Change</button>
            <br><br>
            <label class="bio-info-label">Email</label><br>    
            <input type="email" class="w3-input profile_setup w3-border" name="" id="email" value="<?php //echo $applicant_details['femail']; ?>"> <br>     


            <!-- The Modal -->
            <!-- <div id="id03" class="w3-modal" style="width:100%">
            <div class="w3-modal-content w3-card-4">
            <header class="w3-container w3-padding-large">
                <span onclick="document.getElementById('id04').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
                <h2>Change Location</h2>
            </header> --> 
                <!-- <div class="w3-container">
                <span onclick="document.getElementById('id04').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
                <form action="<?php //echo site_url();?>applicant/changelocation" method="post">
                <input type="hidden" name="id" id="id" value="<?php //echo $applicant_details['frecno']; ?>">
                        <select class="form-select w3-select"  id="state" name="state" required>
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

                    <select class="form-select w3-select" id="lga" name="lga" required>
                        <option value="">Select LGA</option>
                   </select> 
            </div> -->




                    <!--display-inline-block;-->    
        <div id="user-bio" align="center" class="user-bio"> 

                
            <div id="bio-info" class="bio-info">
                
            <label class="bio-info-label">Recommendations    
            </label><br>
            <a href="#">47</a><br style="line-height:2.0">
                
            <label class="bio-info-label">Gender    
            </label><br>
            <?php echo $applicant_details['fgender']; ?><br style="line-height:2.0">
                
            <label class="bio-info-label">Married    
            </label><br>
            <?php echo $applicant_details['fmarital_status']; ?><br style="line-height:2.0">    
                
            <label class="bio-info-label">Academic Level    
            </label><br>
            <?php echo $applicant_details['feducational_qualification']; ?><br style="line-height:2.0">
                
            <label class="bio-info-label">Other Professions
            </label><br>
            <?php echo $applicant_details['fother_professions1']; ?> | <?php echo $applicant_details['fother_professions1']; ?> <br style="line-height:2.0"> 

            <label class="bio-info-label">Languages
            </label><br>
            <?php echo $applicant_details['flanguages1']; ?> <?php echo $applicant_details['flanguages2']; ?> <?php echo $applicant_details['flanguages3']; ?> <?php echo $applicant_details['flanguages4']; ?> <?php echo $applicant_details['flanguages5']; ?><br style="line-height:2.0">    
                
            <label class="bio-info-label">Company / Brand    
            </label><br>
            <?php echo $applicant_details['fcurrent_employer']; ?><br style="line-height:2.0"> 
                
            <label class="bio-info-label">Location    
            </label><br>
            <?php echo $applicant_details['flga']; ?>, <?php echo $applicant_details['fstate']; ?><br style="line-height:2.0">
                
            <label class="bio-info-label">Job Preference    
            </label>
            <ul>
            <li>Type - <?php echo $applicant_details['femployment_type']; ?></li>
            <li>Options - <?php echo $applicant_details['fother_professions1']; ?>, <?php echo $applicant_details['fother_professions2']; ?>, <?php echo $applicant_details['fother_professions3']; ?>, <?php echo $applicant_details['fother_professions4']; ?></li>
            <li>Preferred Location - <?php echo $applicant_details['fpreferred_job_location_lga']; ?>, <?php echo $applicant_details['fpreferred_job_location_state']; ?></li>   
            </ul>

            <label class="bio-info-label">Disabled?    
            </label><br>
            <?php echo $applicant_details['fdisabled']; ?><br style="line-height:2.0"> 
                
            <label class="bio-info-label">Available Start Date    
            </label><br>
            <?php 
                if($applicant_details['favailability_start_date'] == '2000-01-01')
                {
                    echo "Immediately";
                }
                else if($applicant_details['favailability_start_date'] == null)
                {
                    echo "Not Yet";
                }
                else
                {
                    echo date('F j, Y', strtotime($applicant_details['favailability_start_date']));
                }
            
             
             ?><br style="line-height:2.0">    

            <div class="edit-bio-button-div">
            <button onclick="ShowEditBioForm(); return false;" class="edit-bio-button">Edit Bio</button> 
            </div>
                
            <script>
                
            function ShowEditBioForm() {
            document.getElementById("bio-info").style.display="none"; 
                
            document.getElementById("bio-form-div").style.display="grid"; 
            }
                
                
            </script>    
                
            </div>



            <div id="bio-form-div" class="bio-info-form-div">
            <form class="bio-info-form" id="bio-info-form">


            <input type="hidden" name="id" value="<?php echo $applicant_details['frecno']; ?>">

            <div class="gender-div">
                
            <div class="gender-padding-right">   
            <div class="bio-form-label">Your Gender<b>*</b></div> 
            <input type="radio" id="male" name="gender" value="Male" <?php if($applicant_details['fgender'] == "Male"){ echo "checked"; }?>>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="Female" <?php if($applicant_details['fgender'] == "Female"){ echo "checked"; }?>>
            <label for="female">Female</label> 
            </div>
                
            <div>    
            <div class="bio-form-label">Married<b>*</b></div> 
            <input type="radio" id="male" name="marital_status" value="Yes" <?php if($applicant_details['fmarital_status'] == "Yes"){ echo "checked"; }?>>
            <label for="male">Yes</label><br>
            <input type="radio" id="female" name="marital_status" value="No" <?php if($applicant_details['fmarital_status'] == "No"){ echo "checked"; }?>>
            <label for="female">No</label>
            </div>    
                
            </div>
                
            <div class="disabled-div">
            <div class="bio-form-label">Disabled<b>*</b></div>
            <input type="radio" id="yes" name="disabled" value="Yes" <?php if($applicant_details['fdisabled'] == "Yes"){ echo "checked"; }?>>
            <label for="yes">Yes</label>
            <input type="radio" id="no" name="disabled" value="No" <?php if($applicant_details['fdisabled'] == "No"){ echo "checked"; }?>>
            <label for="no">No</label>     
                
            </div>    
                
            <div class="bio-form-div">
            <div class="bio-form-label">Your Academic Level<b>*</b></div> 
            <select class="bio-form-select" name="certificate" id="certificate">
                <option value="">Select one</option>
                <option value="First School Leaving Certificate" <?php if($applicant_details['feducational_qualification'] == "First School Leaving Certificate"){ echo "selected"; }?>>First School Leaving Certificate</option>
                <option value="Junior Secondary School Certificate" <?php if($applicant_details['feducational_qualification'] == "Junior Secondary School Certificate"){ echo "selected"; }?>>Junior Secondary School Certificate</option>
                <option value="Senior Secondary School Certificate" <?php if($applicant_details['feducational_qualification'] == "Senior Secondary School Certificate"){ echo "selected"; }?>>Senior Secondary School Certificate</option>
                <option value="National Certificate of Education" <?php if($applicant_details['feducational_qualification'] == "National Certificate of Education"){ echo "selected"; }?>>National Certificate of Education</option>
                <option value="Ordinary National Diploma" <?php if($applicant_details['feducational_qualification'] == "Ordinary National Diploma"){ echo "selected"; }?>>Ordinary National Diploma</option>
                <option value="Higher National Diploma" <?php if($applicant_details['feducational_qualification'] == "Higher National Diploma"){ echo "selected"; }?>>Higher National Diploma</option>
                <option value="Bachelor's Degree" <?php if($applicant_details['feducational_qualification'] == "Bachelor's Degree"){ echo "selected"; }?>>Bachelor's Degree</option>
                <option value="Master's Degree" <?php if($applicant_details['feducational_qualification'] == "Master's Degree"){ echo "selected"; }?>>Master's Degree</option>
                <option value="Doctorate's Degree" <?php if($applicant_details['feducational_qualification'] == "Doctorate's Degree"){ echo "selected"; }?>>Doctorate's Degree</option>
            </select>    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Other Profession 1</div> 
                <select class="bio-form-select" name="other_professions1">
                    <option value="">Select one</option>
                    <?php foreach ($professions as $profession) { ?>
                      
                    <option value="<?php echo $profession['fname']; ?>" <?php if($applicant_details['fother_professions1'] == $profession['fname']){ echo "selected"; }?>><?php echo $profession['fname']; ?></option>
                   
                    <?php } ?>

                </select> 
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Other Profession 2</div> 
            <select class="bio-form-select" name="other_professions2">
                    <option value="">Select one</option>
                    <?php foreach ($professions as $profession) { ?>
                      
                    <option value="<?php echo $profession['fname']; ?>" <?php if($applicant_details['fother_professions2'] == $profession['fname']){ echo "selected"; }?>><?php echo $profession['fname']; ?></option>
                   
                    <?php } ?>

                </select> 
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Other Profession 3</div> 
            <select class="bio-form-select" name="other_professions3">
                    <option value="">Select one</option>
                    <?php foreach ($professions as $profession) { ?>
                      
                        <option value="<?php echo $profession['fname']; ?>" <?php if($applicant_details['fother_professions3'] == $profession['fname']){ echo "selected"; }?>><?php echo $profession['fname']; ?></option>
                   
                    <?php } ?>

                </select>   
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Other Profession 4</div> 
                <select class="bio-form-select" name="other_professions4">
                    <option value="">Select one</option>
                    <?php foreach ($professions as $profession) { ?>
                      
                        <option value="<?php echo $profession['fname']; ?>" <?php if($applicant_details['fother_professions4'] == $profession['fname']){ echo "selected"; }?>><?php echo $profession['fname']; ?></option>
                   
                    <?php } ?>

                </select>     
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 1<b>*</b></div> 
            <select class="bio-form-select" name="languages1">
                    <option value="">Select one</option>
                    <?php foreach ($languages as $language) { ?>
                      
                        <option value="<?php echo $language['fname']; ?>" <?php if($applicant_details['flanguages1'] == $language['fname']){ echo "selected"; }?>><?php echo $language['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>   
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 2</div> 
            <select class="bio-form-select" name="languages2">
                    <option value="">Select one</option>
                    <?php foreach ($languages as $language) { ?>
                      
                        <option value="<?php echo $language['fname']; ?>" <?php if($applicant_details['flanguages2'] == $language['fname']){ echo "selected"; }?>><?php echo $language['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 3</div> 
            <select class="bio-form-select" name="languages3">
                    <option value="">Select one</option>
                    <?php foreach ($languages as $language) { ?>
                      
                        <option value="<?php echo $language['fname']; ?>" <?php if($applicant_details['flanguages3'] == $language['fname']){ echo "selected"; }?>><?php echo $language['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 4</div> 
            <select class="bio-form-select" name="languages4">
                    <option value="">Select one</option>
                    <?php foreach ($languages as $language) { ?>
                      
                        <option value="<?php echo $language['fname']; ?>" <?php if($applicant_details['flanguages4'] == $language['fname']){ echo "selected"; }?>><?php echo $language['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 5</div> 
            <select class="bio-form-select" name="languages5">
                    <option value="">Select one</option>
                    <?php foreach ($languages as $language) { ?>
                      
                        <option value="<?php echo $language['fname']; ?>" <?php if($applicant_details['flanguages5'] == $language['fname']){ echo "selected"; }?>><?php echo $language['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>    

            <div class="bio-form-div">
            <div class="bio-form-label">Current Employer (Company / Brand)<b>*</b></div> 
            <input class="bio-form-input" name="current_employer" value="<?php echo $applicant_details['fcurrent_employer']; ?>">    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Your State<b>*</b></div> 
            <select class="bio-form-select"  id="state" name="state" required>
                <option value="" selected="selected"> Select State </option>
                <option value="Abia" <?php if($applicant_details['fstate'] == "Abia"){ echo "selected"; }?>>Abia</option>
                <option value="Adamawa" <?php if($applicant_details['fstate'] == "Adamawa"){ echo "selected"; }?>>Adamawa</option>
                <option value="AkwaIbom" <?php if($applicant_details['fstate'] == "AkwaIbom"){ echo "selected"; }?>>AkwaIbom</option>
                <option value="Anambra" <?php if($applicant_details['fstate'] == "Anambra"){ echo "selected"; }?>>Anambra</option>
                <option value="Bauchi" <?php if($applicant_details['fstate'] == "Bauchi"){ echo "selected"; }?>>Bauchi</option>
                <option value="Bayelsa" <?php if($applicant_details['fstate'] == "Bayelsa"){ echo "selected"; }?>>Bayelsa</option>
                <option value="Benue" <?php if($applicant_details['fstate'] == "Benue"){ echo "selected"; }?>>Benue</option>
                <option value="Borno" <?php if($applicant_details['fstate'] == "Borno"){ echo "selected"; }?>>Borno</option>
                <option value="Cross River" <?php if($applicant_details['fstate'] == "Cross River"){ echo "selected"; }?>>Cross River</option>
                <option value="Delta" <?php if($applicant_details['fstate'] == "Delta"){ echo "selected"; }?>>Delta</option>
                <option value="Ebonyi" <?php if($applicant_details['fstate'] == "Ebonyi"){ echo "selected"; }?>>Ebonyi</option>
                <option value="Edo" <?php if($applicant_details['fstate'] == "Edo"){ echo "selected"; }?>>Edo</option>
                <option value="Ekiti" <?php if($applicant_details['fstate'] == "Ekiti"){ echo "selected"; }?>>Ekiti</option>
                <option value="Enugu" <?php if($applicant_details['fstate'] == "Enugu"){ echo "selected"; }?>>Enugu</option>
                <option value="FCT" <?php if($applicant_details['fstate'] == "FCT"){ echo "selected"; }?>>FCT</option>
                <option value="Gombe" <?php if($applicant_details['fstate'] == "Gombe"){ echo "selected"; }?>>Gombe</option>
                <option value="Imo" <?php if($applicant_details['fstate'] == "Imo"){ echo "selected"; }?>>Imo</option>
                <option value="Jigawa" <?php if($applicant_details['fstate'] == "Jigawa"){ echo "selected"; }?>>Jigawa</option>
                <option value="Kaduna" <?php if($applicant_details['fstate'] == "Kaduna"){ echo "selected"; }?>>Kaduna</option>
                <option value="Kano" <?php if($applicant_details['fstate'] == "Kano"){ echo "selected"; }?>>Kano</option>
                <option value="Katsina" <?php if($applicant_details['fstate'] == "Katsina"){ echo "selected"; }?>>Katsina</option>
                <option value="Kebbi" <?php if($applicant_details['fstate'] == "Kebbi"){ echo "selected"; }?>>Kebbi</option>
                <option value="Kogi" <?php if($applicant_details['fstate'] == "Kogi"){ echo "selected"; }?>>Kogi</option>
                <option value="Kwara" <?php if($applicant_details['fstate'] == "Kwara"){ echo "selected"; }?>>Kwara</option>
                <option value="Lagos" <?php if($applicant_details['fstate'] == "Lagos"){ echo "selected"; }?>>Lagos</option>
                <option value="Nasarawa" <?php if($applicant_details['fstate'] == "Nasarawa"){ echo "selected"; }?>>Nasarawa</option>
                <option value="Niger" <?php if($applicant_details['fstate'] == "Niger"){ echo "selected"; }?>>Niger</option>
                <option value="Ogun" <?php if($applicant_details['fstate'] == "Ogun"){ echo "selected"; }?>>Ogun</option>
                <option value="Ondo" <?php if($applicant_details['fstate'] == "Ondo"){ echo "selected"; }?>>Ondo</option>
                <option value="Osun" <?php if($applicant_details['fstate'] == "Osun"){ echo "selected"; }?>>Osun</option>
                <option value="Oyo" <?php if($applicant_details['fstate'] == "Oyo"){ echo "selected"; }?>>Oyo</option>
                <option value="Plateau" <?php if($applicant_details['fstate'] == "Plateau"){ echo "selected"; }?>>Plateau</option>
                <option value="Rivers" <?php if($applicant_details['fstate'] == "Rivers"){ echo "selected"; }?>>Rivers</option>
                <option value="Sokoto" <?php if($applicant_details['fstate'] == "Sokoto"){ echo "selected"; }?>>Sokoto</option>
                <option value="Taraba" <?php if($applicant_details['fstate'] == "Taraba"){ echo "selected"; }?>>Taraba</option>
                <option value="Yobe" <?php if($applicant_details['fstate'] == "Yobe"){ echo "selected"; }?>>Yobe</option>
                <option value="Zamfara" <?php if($applicant_details['fstate'] == "Zamfara"){ echo "selected"; }?>>Zamfara</option>
                </select>    
            </div>    
                
            <div class="bio-form-div">
            <div class="bio-form-label">Your LGA<b>*</b></div> 
                <select class="bio-form-select" id="lga" name="lga" required>
                        <option value="">Select LGA</option>
                </select>     
            </div> 
                
            <div class="job-preferences-div">
            <div class="job-preferences-label">Your Job Preferences</div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Type<b>*</b></div> 
            <!-- <select class="bio-form-select"></select>  -->
                <select class="bio-form-select" id="employment_type" name="employment_type" required>
                    <option value="">Select one</option>
                    <option value="Full Time" <?php if($applicant_details['femployment_type'] == "Full Time"){ echo "selected"; }?>>Full Time</option>
                    <option value="Part Time" <?php if($applicant_details['femployment_type'] == "Part Time"){ echo "selected"; }?>>Part Time</option>
                    <option value="Remote" <?php if($applicant_details['femployment_type'] == "Remote"){ echo "selected"; }?>>Remote</option>
                    <option value="Contract" <?php if($applicant_details['femployment_type'] == "Contract"){ echo "selected"; }?>>Contract</option>
                    <option value="Internship" <?php if($applicant_details['femployment_type'] == "Internship"){ echo "selected"; }?>>Internship</option>
                </select>

            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 1<b>*</b></div> 
            <select class="bio-form-select" name="preferred_job1">
                    <option value="">Select one</option>
                    <?php foreach ($professions as $profession) { ?>
                      
                        <option value="<?php echo $profession['fname']; ?>" <?php if($applicant_details['fpreferred_job1'] == $profession['fname']){ echo "selected"; }?>><?php echo $profession['fname']; ?></option>
                   
                    <?php } ?>

                </select>  
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 2</div> 
            <select class="bio-form-select" name="preferred_job2">
                    <option value="">Select one</option>
                    <?php foreach ($professions as $profession) { ?>
                      
                        <option value="<?php echo $profession['fname']; ?>" <?php if($applicant_details['fpreferred_job2'] == $profession['fname']){ echo "selected"; }?>><?php echo $profession['fname']; ?></option>
                   
                    <?php } ?>

                </select> 
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 3</div> 
            <select class="bio-form-select" name="preferred_job3">
                    <option value="">Select one</option>
                    <?php foreach ($professions as $profession) { ?>
                      
                        <option value="<?php echo $profession['fname']; ?>" <?php if($applicant_details['fpreferred_job3'] == $profession['fname']){ echo "selected"; }?>><?php echo $profession['fname']; ?></option>
                   
                    <?php } ?>

                </select>   
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 4</div> 
            <select class="bio-form-select" name="preferred_job4">
                    <option value="">Select one</option>
                    <?php foreach ($professions as $profession) { ?>
                      
                        <option value="<?php echo $profession['fname']; ?>" <?php if($applicant_details['fpreferred_job4'] == $profession['fname']){ echo "selected"; }?>><?php echo $profession['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Preferred State<b>*</b></div> 
              <select class="bio-form-select"  id="state2" name="preferred_job_location_state" required>
              <option value="" selected="selected"> Select State </option>
                <option value="Abia" <?php if($applicant_details['fstate'] == "Abia"){ echo "selected"; }?>>Abia</option>
                <option value="Adamawa" <?php if($applicant_details['fstate'] == "Adamawa"){ echo "selected"; }?>>Adamawa</option>
                <option value="AkwaIbom" <?php if($applicant_details['fstate'] == "AkwaIbom"){ echo "selected"; }?>>AkwaIbom</option>
                <option value="Anambra" <?php if($applicant_details['fstate'] == "Anambra"){ echo "selected"; }?>>Anambra</option>
                <option value="Bauchi" <?php if($applicant_details['fstate'] == "Bauchi"){ echo "selected"; }?>>Bauchi</option>
                <option value="Bayelsa" <?php if($applicant_details['fstate'] == "Bayelsa"){ echo "selected"; }?>>Bayelsa</option>
                <option value="Benue" <?php if($applicant_details['fstate'] == "Benue"){ echo "selected"; }?>>Benue</option>
                <option value="Borno" <?php if($applicant_details['fstate'] == "Borno"){ echo "selected"; }?>>Borno</option>
                <option value="Cross River" <?php if($applicant_details['fstate'] == "Cross River"){ echo "selected"; }?>>Cross River</option>
                <option value="Delta" <?php if($applicant_details['fstate'] == "Delta"){ echo "selected"; }?>>Delta</option>
                <option value="Ebonyi" <?php if($applicant_details['fstate'] == "Ebonyi"){ echo "selected"; }?>>Ebonyi</option>
                <option value="Edo" <?php if($applicant_details['fstate'] == "Edo"){ echo "selected"; }?>>Edo</option>
                <option value="Ekiti" <?php if($applicant_details['fstate'] == "Ekiti"){ echo "selected"; }?>>Ekiti</option>
                <option value="Enugu" <?php if($applicant_details['fstate'] == "Enugu"){ echo "selected"; }?>>Enugu</option>
                <option value="FCT" <?php if($applicant_details['fstate'] == "FCT"){ echo "selected"; }?>>FCT</option>
                <option value="Gombe" <?php if($applicant_details['fstate'] == "Gombe"){ echo "selected"; }?>>Gombe</option>
                <option value="Imo" <?php if($applicant_details['fstate'] == "Imo"){ echo "selected"; }?>>Imo</option>
                <option value="Jigawa" <?php if($applicant_details['fstate'] == "Jigawa"){ echo "selected"; }?>>Jigawa</option>
                <option value="Kaduna" <?php if($applicant_details['fstate'] == "Kaduna"){ echo "selected"; }?>>Kaduna</option>
                <option value="Kano" <?php if($applicant_details['fstate'] == "Kano"){ echo "selected"; }?>>Kano</option>
                <option value="Katsina" <?php if($applicant_details['fstate'] == "Katsina"){ echo "selected"; }?>>Katsina</option>
                <option value="Kebbi" <?php if($applicant_details['fstate'] == "Kebbi"){ echo "selected"; }?>>Kebbi</option>
                <option value="Kogi" <?php if($applicant_details['fstate'] == "Kogi"){ echo "selected"; }?>>Kogi</option>
                <option value="Kwara" <?php if($applicant_details['fstate'] == "Kwara"){ echo "selected"; }?>>Kwara</option>
                <option value="Lagos" <?php if($applicant_details['fstate'] == "Lagos"){ echo "selected"; }?>>Lagos</option>
                <option value="Nasarawa" <?php if($applicant_details['fstate'] == "Nasarawa"){ echo "selected"; }?>>Nasarawa</option>
                <option value="Niger" <?php if($applicant_details['fstate'] == "Niger"){ echo "selected"; }?>>Niger</option>
                <option value="Ogun" <?php if($applicant_details['fstate'] == "Ogun"){ echo "selected"; }?>>Ogun</option>
                <option value="Ondo" <?php if($applicant_details['fstate'] == "Ondo"){ echo "selected"; }?>>Ondo</option>
                <option value="Osun" <?php if($applicant_details['fstate'] == "Osun"){ echo "selected"; }?>>Osun</option>
                <option value="Oyo" <?php if($applicant_details['fstate'] == "Oyo"){ echo "selected"; }?>>Oyo</option>
                <option value="Plateau" <?php if($applicant_details['fstate'] == "Plateau"){ echo "selected"; }?>>Plateau</option>
                <option value="Rivers" <?php if($applicant_details['fstate'] == "Rivers"){ echo "selected"; }?>>Rivers</option>
                <option value="Sokoto" <?php if($applicant_details['fstate'] == "Sokoto"){ echo "selected"; }?>>Sokoto</option>
                <option value="Taraba" <?php if($applicant_details['fstate'] == "Taraba"){ echo "selected"; }?>>Taraba</option>
                <option value="Yobe" <?php if($applicant_details['fstate'] == "Yobe"){ echo "selected"; }?>>Yobe</option>
                <option value="Zamfara" <?php if($applicant_details['fstate'] == "Zamfara"){ echo "selected"; }?>>Zamfara</option>
                </select>  
            </div>   
                
            <div class="bio-form-div">
            <div class="bio-form-label">Preferred LGA<b>*</b></div> 
                <select class="bio-form-select" id="lga2" name="preferred_job_location_lga" required>
                        <option value="">Select LGA</option>
                </select>       
            </div>    
                
            </div>  
                
            <div class="start-date-main-div">
            <div class="bio-form-label">Start Date<b>*</b></div>    
            <input type="radio" id="immediately" name="availability_start_date" value="now" onclick="HideStartDate();" required <?php if(isset($applicant_details['availability_start_date']) == "2000-01-01"){ echo "checked"; }?>>
            <label for="immediately">Immediately</label>
            
            <br>
            <input type="radio" id="not_yet" name="availability_start_date" value="not_yet" onclick="HideStartDate();" <?php if(isset($applicant_details['availability_start_date']) == null){ echo "checked"; }?>>
            <label for="not_yet">Not Yet</label><br>    


            <input type="radio" id="select_date" name="availability_start_date" onclick="ShowStartDate();" <?php if(isset($applicant_details['availability_start_date']) != null && isset($applicant_details['availability_start_date']) != "2000-01-01"){ echo "checked"; }?>>
            <label for="select_date">Select Date</label>

            <div id="StartDateDiv" class="start-date-div"> 
            
                <input type="date" name="availability_start_date2" id="">
            </div>  
                
            <script>
            function ShowStartDate() {
            document.getElementById("StartDateDiv").style.display="flex";
            } 
                
            function HideStartDate() {
            document.getElementById("StartDateDiv").style.display="none";   
            }    
                
            </script>    
                
            </div>
                
            <div class="bio-form-button-div">
            <button onclick="CancelBioForm(); return false;" class="cancel-bio-button">Cancel</button>
            <button type="submit" class="submit-bio-button">Finish</button>    
            </div>    
                
            </form>
                    
            <script>
            
                function CancelBioForm() {
                document.getElementById("bio-info").style.display="block"; 
                
                document.getElementById("bio-form-div").style.display="none";    
                }
                
                
                
                
                function FinishBioForm() {
                document.getElementById("bio-info").style.display="block"; 
                
                document.getElementById("bio-form-div").style.display="none";    
                }
                
            </script>    
                
            </div>


            </div>


            
            <br>
            
            </div>
    
                  
        </div>
            
        </section> 
        
        <div align="center" class="sections">
                
            <button id="exp-b" onclick="ExperienceFunction()" class="sections-div cursor">Experience</button>
                
                &nbsp;    
            <button id="edu-b" onclick="EducationFunction()" class="sections-div cursor">Education</button>
             
             
              &nbsp;    
            <a href="<?php echo site_url();?>applicant/portfolios"><button id="port-b"  class="sections-div cursor">Portfolio</button></a>
              
                
            </div>
        
         <br>

        
        <!--EXPERIENCE-->
        
        <section id="user-experience" class="user-experience">
            
            <h2 align="center" class="user-experience-header">Experience <small><button onclick="ShowExperienceForm()" class="exp-update-button cursor" style="font-size: 18px;">Add New</button></small></h2>

                
            <div id="exp-update-form-div" class="exp-update-form-div">
            
            <div class="exp-update-form-container w3-padding-large">
                
               <form class="exp-update-form" id="add-experience-form">
                    <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                    <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">

                    <div class="col-sm-6">
                        <label class="exp-duration-label">From</label>
                    </div>
                    <div style="display: flex">
                            
                            <select class="exp-duration form-control"  style="margin-right:5px;border-radius:5px; width:100%;" name="start_month" required>
                                    <option value="">Month</option>
                                    <option value="01">January</option>
                                    <option value="02">February</option>
                                    <option value="03">March</option>
                                    <option value="04">April</option>
                                    <option value="05">May</option>
                                    <option value="06">June</option>
                                    <option value="07">July</option>
                                    <option value="08">August</option>
                                    <option value="09">September</option>
                                    <option value="10">October</option>
                                    <option value="11">November</option>
                                    <option value="12">December</option>
                            </select>
                            
                            <select id="year1" class="exp-duration form-control" style="border-radius:5px; width:100%;" name="start_year" required>
                                 <option value="" selected disabled hidden>Select Year</option>
                            </select>

                    </div>
                       
                  <br>
                    <div class="col-sm-6">
                        <label class="exp-duration-label">Till</label>
                    </div>
                   
                    <div style="display: flex">
                   
                        <select class="exp-duration form-control rounded"  style="margin-right:5px;border-radius:5px; width:100%;" name="end_month" required>
                                <option value="">Month</option>
                                <option value="01">January</option>
                                <option value="02">February</option>
                                <option value="03">March</option>
                                <option value="04">April</option>
                                <option value="05">May</option>
                                <option value="06">June</option>
                                <option value="07">July</option>
                                <option value="08">August</option>
                                <option value="09">September</option>
                                <option value="10">October</option>
                                <option value="11">November</option>
                                <option value="12">December</option>
                        </select>
                        
                            <select id="year2" class="exp-duration form-control" style="border-radius:5px; width:100%;" name="end_year" required>
                                <option value="" selected disabled hidden>Select Year</option>
                            </select>

                        </div>
                       
                   
                    <br>
                    <label class="company-label">Company&nbsp;or&nbsp;Business</label><br>
                    <input id="company-or-business" class="company-or-business form-control"  type="text" name="ex-company-name"  placeholder="" required>
                    
                    <br><br>
                    
                    <label class="position-label">
                    Position</label><br>
                    <input class="position form-control"  type="text" name="exposition" id="positon" placeholder="" required>
                    <br>
                    <button class="letter-button">Add Employment Letter</button>
                   
                   <br><br>
            
                       
                    <label class="roles-and-respon-label">Roles&nbsp;and&nbsp;Responsibilities</label>
                   
                   <br>
                   
                   <textarea  name="ex-roles[]" class="roles-text-area form-control" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area form-control" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area form-control" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area form-control" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area form-control" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area form-control" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area form-control" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area form-control" placeholder=""></textarea><br class="br-area">
                   
                   
                   <br>
                       
                   <div class="exp-button-container">
                     
                        <div class="exp-button-right">
                            
                            <button onclick="CancelExperience()" class="exp-cancel-button" action="">Cancel</button> 
                            
                            <button type="submit" class="exp-finish-button w3-right cursor">Save</button>

                            
                        </div>
                       
                       </div>
                   
                </form> 
                
                </div> 
                    
            </div> 



            <div class="experience-post-container" id="experience-post-container">

            </div>
                       
       
  
    
  
        </section>
            
    
        <!--EDUCATION-->
        
        <section id="user-education" class="user-education">
            
            
            <h2 align="center" class="user-education-header">Education <small> <button onclick="ShowEducationForm();" class="exp-update-button cursor" style="font-size: 18px;">Add New</button></small></h2>



        
                <div id="edu-update-form-div" class="edu-update-form-div">
                        
                        <div class="edu-update-form-container">
                            
                          <form class="edu-update-form" id="add_education-form">
                                
                       
                          <div class="col-sm-6">
                                <label class="exp-duration-label">From</label>
                            </div>
                            <div style="display: flex">
                                    
                                    <select class="exp-duration form-control"  style="margin-right:5px;border-radius:5px; width:100%;" name="start_month" required>
                                            <option value="">Month</option>
                                            <option value="01">January</option>
                                            <option value="02">February</option>
                                            <option value="03">March</option>
                                            <option value="04">April</option>
                                            <option value="05">May</option>
                                            <option value="06">June</option>
                                            <option value="07">July</option>
                                            <option value="08">August</option>
                                            <option value="09">September</option>
                                            <option value="10">October</option>
                                            <option value="11">November</option>
                                            <option value="12">December</option>
                                    </select>
                                    
                                    <select id="year3" class="exp-duration form-control" style="border-radius:5px; width:100%;" name="start_year" required>
                                        <option value="" selected disabled hidden>Select Year</option>
                                    </select>

                            </div>
                            
                        <br>
                            <div class="col-sm-6">
                                <label class="exp-duration-label">Till</label>
                            </div>
                        
                            <div style="display: flex">
                        
                                <select class="exp-duration form-control rounded"  style="margin-right:5px;border-radius:5px; width:100%;" name="end_month" required>
                                        <option value="">Month</option>
                                        <option value="01">January</option>
                                        <option value="02">February</option>
                                        <option value="03">March</option>
                                        <option value="04">April</option>
                                        <option value="05">May</option>
                                        <option value="06">June</option>
                                        <option value="07">July</option>
                                        <option value="08">August</option>
                                        <option value="09">September</option>
                                        <option value="10">October</option>
                                        <option value="11">November</option>
                                        <option value="12">December</option>
                                </select>
                                
                                    <select id="year4" class="exp-duration form-control" style="border-radius:5px; width:100%;" name="end_year" required>
                                        <option value="" selected disabled hidden>Select Year</option>
                                </select>

                                </div>
                              
                                <br>
                                <label class="school-label">School&nbsp;or&nbsp;institution *</label><br>
                                <input id="edu-position" class="school-or-institution form-control"  type="" name="school"  placeholder="" required>
                                <input type="hidden" id="applicant_id" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                                <input type="hidden" id="user_name" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                                <br><br>
                                
                                <label class="degree-label">
                                Course of Study *</label><br>
                                <input class="degree-certificate form-control"  type="" name="course"  placeholder="" required>

                                <br><br>
                                
                                <label class="degree-label">
                                Degree&nbsp;or&nbsp;Certificate</label><br>
                
                                <select class="degree-certificate form-control" name="class_of_degree" id="certificate" required>
                                    <option value="">Select one</option>
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
                                <button class="certificate-button">Add Certificate</button>
                              
                              <br><br>
                        
                                  
                                <label class="skills-and-topics-label">Skills&nbsp;and&nbsp;Topics&nbsp;Learned</label>
                              
                              <br>
                              
                              <textarea  id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area">
                              <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area">
                              <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area">
                              <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area">
                              <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area">
                              <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area">
                              <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area">
                              <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area">
                              <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area">
                              <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area">
                              
                              <br>
                                  
                              <div class="edu-button-container">
                                
                                    <div class="edu-button-right">
                                        
                              <button onclick="CancelEducation()" class="ed-cancel-button" action="">Cancel</button>
                                        
                              <button class="ed-finish-button w3-right" type="submit">Save</button>
                                        
                                        </div>
                                  
                                  </div>
                              
                            </form> 
                            
                            </div> 
                                
                        </div>



            <div class="education-post-container" id="education-post-container">
                
                 
                
            </div>



        <hr>

        <hr>


            <h1 class="skills-header" align="center">Skills</h1>      
    
    <br>
       
       <div class="skills-container" style="border: 4px solid #ADD8E6;margin-left:20px;margin-right:20px;">
           <div class="row">
               <div class="col-sm-6">
                   <h3 class="professional-label other-label" style="font-weight: 400;">Professional Skills</h3> 
               </div>
               <div class="col-sm-6">
                   <button onclick="AddProfSkill()" class="add-skill-button w3-right cursor" id="add-pro-skill-button">Add skill +</button >
               </div>
           </div>
          
                 

               <div id="form-div-prof" class="form-div">
                   
               <form class="add-skill-form" id="add-skill-form">
               
               <input class="skills-inputg" type="text" name="pro_skill" id="skill-input-prof" required>&nbsp; <br><br>
               <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
               <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                   
           
                   <button onclick="FinishAddProfSkill()" class="finish-add-skill w3-red">Cancel</button>  <button type="submit" class="finish-add-skill cursor">Save</button>
                      
                 

                  
                   
                   </form>
               </div>     
               <hr>  
   
       <div class="skill-padding" id="skill-padding">
       
   
       
       </div>
           
       
       </div>
       
       
           <br><br><br><br>
       
       
       
       
       <div class="skills-container" style="border: 4px solid #ADD8E6;margin-left:20px;margin-right:20px;">
           
       <h2 class="other-label">Other Skills <button onclick="AddOtherSkill()" class="add-skill-button w3-right">Add skill +</button ></h2>  
       <div id="form-div-other" class="form-div">
           
           <form class="add-skill-form" id="add-other-skill-form">
           <input class="skills-inputf" type="text" name="other_skill" id="skill-input-other" required>&nbsp;
           <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
           <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
               
               
               <br><br>
               
               <!-- <button onclick="CancelAddOtherSkill()" class="cancel-add-skill w3-red">Cancel</button> <button  class="finish-add-skill" type="submit">Save</button> -->
               <button onclick="CancelAddOtherSkill()" class="finish-add-skill w3-red">Cancel</button>  <button type="submit" class="finish-add-skill cursor">Save</button>

               
               </form>
           </div>  
   <hr>    
   
       <div class="skill-padding" id="other_skills">
       
       
       
       </div>
           

       </div>



            
            <br>
         
            
            <br><br>
            
            
        </section>
        
        <!--SKILLS-->
        
     <section id="user-skills" class="user-skills">
    
          <!-- <h1 class="skills-header" align="center">Skills</h1>      
                
         <br>
            
            <div class="skills-container" style="border: 4px solid #ADD8E6;margin-left:20px;margin-right:20px;">
                <div class="row">
                    <div class="col-sm-6">
                        <h3 class="professional-label other-label" style="font-weight: 400;">Professional Skills</h3> 
                    </div>
                    <div class="col-sm-6">
                        <button onclick="AddProfSkill()" class="add-skill-button w3-right cursor" id="add-pro-skill-button">Add skill +</button >
                    </div>
                </div>
               
                      

                    <div id="form-div-prof" class="form-div">
                        
                    <form class="add-skill-form" id="add-skill-form">
                    
                    <input class="skills-inputg" type="text" name="pro_skill" id="skill-input-prof" required>&nbsp; <br><br>
                    <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                    <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                        
                
                        <button onclick="FinishAddProfSkill()" class="finish-add-skill w3-red">Cancel</button>  <button type="submit" class="finish-add-skill cursor">Save</button>
                           
                      

                       
                        
                        </form>
                    </div>     
                    <hr>  
        
            <div class="skill-padding" id="skill-padding">
            
        
            
            </div>
                
            
            </div>
            
            
                <br><br><br><br>
            
            
            
            
            <div class="skills-container" style="border: 4px solid #ADD8E6;margin-left:20px;margin-right:20px;">
                
            <h2 class="other-label">Other Skills <button onclick="AddOtherSkill()" class="add-skill-button w3-right">Add skill +</button ></h2>  
            <div id="form-div-other" class="form-div">
                
                <form class="add-skill-form" id="add-other-skill-form">
                <input class="skills-inputf" type="text" name="other_skill" id="skill-input-other" required>&nbsp;
                <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                    
                    
                    <br><br>
                    
                    <!-- <button onclick="CancelAddOtherSkill()" class="cancel-add-skill w3-red">Cancel</button> <button  class="finish-add-skill" type="submit">Save</button> -->
                    <button onclick="CancelAddOtherSkill()" class="finish-add-skill w3-red">Cancel</button>  <button type="submit" class="finish-add-skill cursor">Save</button>
 
                    
                    </form>
                </div>  
        <hr>    
        
            <div class="skill-padding" id="other_skills">
            
            
            
            </div>
                

            </div> -->
                
                </section>



        
        <!--PORTFOLIO-->
        
      <section id="user-portfolio" class="user-portfolio">
        
            <h1 align="center" class="portfolio-header">Portfolio</h1> 
                

        <div class="porfolio-container-images" align="center">
            
            <h2 class="images-label">Images</h2>
            
            <br><br><br>
           
                <div class="row porfolio-container-imagesc">
                    <div class="col-sm-4 pr-5 mb-5">
                        <button class="delete-image-button" id="img-btn">
                            <form id="image_upload_form">
                                <img class="image" onclick='openfile("#file-input-images")' src="<?php echo site_url();?>public/assets/Images/User%20Profile/add%20image.png">
                                <input type="file" id="file-input-images" name="fileUp" style="display:none;" accept="image/*">
                            </form>
                        </button>
                    </div>
                    <?php foreach ($applicant_portfolios as $portfolio) {?>
                    
                        <div class="col-sm-4 mb-5">
                            <img class="image" src="<?php echo site_url('public/portfoliopics/'.$portfolio['fimage']);?>" width="100%">
                            <span data-image_id="<?php echo $portfolio['frecno'];?>" data-image_name="<?php echo $portfolio['fimage'];?>" class="fa fa-times text-danger cursor delete-image" style="position:relative;top:-90px;right:35px;"></span>
                        </div>
                       

                    <?php } ?>

                </div>
        
            </div>
            
            
            <div class="porfolio-container-documents" align="center">
            
            <h2 class="images-label">Documents</h2>
            
            <br><br><br><br><br>

            <div class="row">
                <div class="col-sm-4 pr-5 mb-5">
           
                    <button onclick="" class="delete-image-button">
                        <img class="image" onclick='openfile("#file-input-documents")' src="<?php echo base_url();?>/public/assets/Images/User%20Profile/add%20document.png">
                        <input type="file" id="file-input-documents" name="fileUp" style="display:none;">
                    </button>
                </div>

            <?php foreach ($applicant_documents as $document) {?>

                <div class="col-sm-4 mb-5">
                    <!-- <img class="image" src="<?php //echo site_url('public/documentpics/'.$document['ffile_name']);?>"> -->
                    <i class="image fa fa-file-word-o" style="font-size:132px !important;"></i>
                    <span data-image_id="<?php echo $document['frecno'];?>" data-image_name="<?php echo $document['ffile_name'];?>" class="fa fa-times text-danger cursor delete-image2" style="position:relative;top:-110px;right:35px;"></span>
                </div>
            
            <?php } ?>
            
        
            </div>


            <hr>

            <hr>


            <h1 align="center" class="online-links-header">Online Links</h1>  


            

            <div class="skills-container" style="border: 4px solid #ADD8E6;">
                
                <button onclick="AddProfLink()" class="add-skill-button">Add Link +</button>
    
                <div id="form-div-prof-link" class="form-div ">
                    
                    <form class="add-skill-form" id="add-links-form">
                        
                      <br>
                    <input class="link-urls" name="weblink" type="url" id="skill-input-prof-link" placeholder="URL (e.g http://www.kokoruns.com/)" required> 
                    <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                    <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">  
                        
                        <br> <br>
                        
                        <button onclick="CancelAddProfLink()" class="cancel-add-skill text-danger">Cancel</button>
                        
                        <button class="finish-add-skill" type="submit">Save</button>
                        
                        </form>
                    </div> 
    
                    <hr>
    
    
                  <?php if(empty($applicant_weblinks)) { ?>
                      
                      <div class="posted-link-container">
                          <p style="text-align:center">Seems you have no weblinks yet. Add a new weblink to get started.</p>
                      </div>
                    
                  <?php } else { foreach ($applicant_weblinks as $link) { ?>
                    
                    
                    <a href="<?php echo $link['fweb_link']; ?>"><div class="skill-padding"><div class="skill"><?php echo $link['fweb_link']; ?>&nbsp;<button class="delete-skill-button">x</button></div></div></a>
                    
    
                <?php  } } ?>
        
                </div>


            
        </section>
        
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>


<script>

tippy('.editbtn', {
  content: "Edit",
});

tippy('.delbtn', {
  content: "Delete",
});


</script>


<!--USER PROFILE CATEGORIES INTERACTION SCRIPT-->
<script>
        
        function ShowEducationForm() {
           var div2 = document.getElementById("edu-update-form-div");
           if (div2.style.display == 'block') {
            div2.style.display = 'none'
            } else {
                div2.style.display = 'block'
            }
        }
        
        function CancelEducation() {
           document.getElementById("edu-update-form-div").style.display="none"; 
            
           document.getElementById("edu-duration1")
            .value = '';  
            
           document.getElementById("edu-duration2")
            .value = '';
            
           document.getElementById("edu-position")
            .value = '';
        
           document.getElementById("edu-company-name")
            .value = '';
            
           document.getElementById("edu-text-area")
            .value = '';
                
        }
        
    </script>
    
    
    <!--USER PROFILE CATEGORIES INTERACTION SCRIPT-->
    <script>
        
        function ShowExperienceForm() {
           var div1 = document.getElementById("exp-update-form-div");
                if (div1.style.display == 'block') {
                div1.style.display = 'none'
                } else {
                    div1.style.display = 'block'
                }
        }
        
        function CancelExperience() {
           document.getElementById("exp-update-form-div") .style.display="none"; 
            
           document.getElementById("exp-duration1")
            .value = '';  
            
           document.getElementById("exp-duration2")
            .value = '';
            
           document.getElementById("exp-position")
            .value = '';
        
           document.getElementById("exp-company-name")
            .value = '';
            
           document.getElementById("exp-text-area")
            .value = '';
                
        }
        
    </script>
    
    <!--USER ONLINE LINKS FROM LINKS-->
    <script>  
    
    function AddProfLink() {
           document.getElementById("form-div-prof-link") .style.display="block";
        
         document.getElementById("add-skill-prof-link")
          .style.display="none";
        }
        
        
        function CancelAddProfLink() {
           document.getElementById("form-div-prof-link") .style.display="none"; 
            
           document.getElementById("skill-input-prof-link")
            .value = '';  
            
            document.getElementById("add-skill-prof-link")
          .style.display="block"; 
             }
            
            
          function FinishAddProfLink() {
            document.getElementById("form-div-prof-link").style.display="none"; 
            
           document.getElementById("skill-input-prof-link")
            .value = '';  
            
            document.getElementById("add-skill-prof-link")
          .style.display="block";
          }  
    
    </script>
    
    <!--USER SKILLS FORM-->
    <script>
    
    function AddProfSkill() {
           document.getElementById("form-div-prof") .style.display="flex";
        
         document.getElementById("add-skill-prof")
          .style.display="none";
        }
        
        
        function CancelAddProfSkill() {
           document.getElementById("form-div-prof") .style.display="none"; 
            
           document.getElementById("skill-input-prof")
            .value = '';  
            
            document.getElementById("add-skill-prof")
          .style.display="block"; 
             }
            
            
          function FinishAddProfSkill() {
            document.getElementById("form-div-prof") .style.display="none"; 
            
           document.getElementById("skill-input-prof")
            .value = '';  
            
            document.getElementById("add-skill-prof")
          .style.display="block";
          }  
    
    </script>
    
    <script>
    
    function AddOtherSkill() {
           document.getElementById("form-div-other").style.display="flex";
        
         document.getElementById("add-skill-other")
          .style.display="none";
        }
        
        
        function CancelOtherAddSkill() {
           document.getElementById("form-div-other").style.display="none"; 
            
           document.getElementById("skill-input-other")
            .value = '';  
            
            document.getElementById("add-skill-other")
          .style.display="block"; 
             }
            
            
          function FinishOtherAddSkill() {
            document.getElementById("form-div-other").style.display="none"; 
            
           document.getElementById("skill-input-other")
            .value = '';  
            
            document.getElementById("add-skill-other")
          .style.display="block";
          }  
    
    </script>
    
    <!--VIEW BIO SCRIPT-->
    <script>
    
    function ViewBio() {
      document.getElementById("view-bio-div").style.display="none";
        
      document.getElementById("hide-bio-div").style.display="block"; 
        
      document.getElementById("user-bio").style.display="block";    
    }
    
    function HideBio() {
     
      document.getElementById("view-bio-div").style.display="block";
        
      document.getElementById("hide-bio-div").style.display="none";
    
      document.getElementById("user-bio").style.display="none";    
    }
    
    </script>
    
    
    <!--SECTIONS BUTTONS SCRIPT-->
    
    <script>
    
    function ExperienceFunction() {
      
        document.getElementById("user-experience").style.display="block";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
        
    }
        
    function EducationFunction() {
      
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="block";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
        
    }
        
    function SkillsFunction() {
       
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="block";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";      

    }
        
    function PortfolioFunction() {
       
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="block";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
    
    }
        
    function LinksFunction() {
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="block";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
        
    } 
    
    function SearchFunction() {
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="block";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
        
    } 


    function TeamFunction() {
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="block";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
        
    }
    
    function MessagesFunction() {
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="block";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
        
    } 


     function JobDashFunction() {
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="block";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
        
    } 


    function EventsFunction() {
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("event-box-div").style.display="block";

        //alert("hi");
        
    } 


    function AllAboutYouFunction() {

        document.getElementById("allaboutyou-box-div").style.display="block";
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";

        
    } 



    function jobsFunction() {
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="block";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
        
    }  


    function RecommendationsFunction() {

        document.getElementById("recommendations-box-div").style.display="block";
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
        
    }  


    function SettingsFunction() {

        document.getElementById("settings-box-div").style.display="block";
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="none";

        document.getElementById("messages-box-div").style.display="none";

        document.getElementById("jobdash-box-div").style.display="none";

        document.getElementById("allaboutyou-box-div").style.display="none";

        document.getElementById("jobs-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";
        
    }    
    




    function EditExperienceForm(clicked_id) {

        var x = document.getElementById("exp-edit-form-div_"+clicked_id);
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }

            //alert(x.style.display);
        
        }



        function EditEducationForm(clicked_id) {

        var x = document.getElementById("edu-update-form-div_"+clicked_id);
        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
        //alert("edit-form-container_"+clicked_id);
        }


        function OpenTeamChat() { 
            var x = document.getElementById("team_chat");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
         }
        
        
    
    
</script>



<script>


    $("body").on('submit', '#add-experience-form', function(e){
    
        e.preventDefault();

        var querystring = $(this).serialize();
        
        // alert(querystring);

        //alert("Hi");

        $.ajax({
            url: '<?php echo site_url(); ?>applicant/addexperienceaction',
            type: "POST",
            data: querystring,
            dataType: "json",
            success: function(response) {
                //code to execute
                //alert(response.success);
                if(response.success == true)
                {
                    //CancelExperience();
                    document.getElementById("exp-update-form-div").style.display = "none";
                    $("#add-experience-form").trigger("reset");
                    load_experiences();
                    toastr.success('<p>Job experience added successfully</p>', {timeOut: 1000});
                    
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },
            });

            return false;
    });

</script>


<script>

    function load_experiences()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>applicant/experiences_container",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
           
            $('#experience-post-container').html(data.experiences);
            
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            //alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      load_experiences();

</script>


<script>


    $("body").on('submit' ,'#update-experience-form', function(e){
    
        e.preventDefault();

    var querystring = $(this).serialize();
    
    //alert(querystring);

        $.ajax({
            url: '<?php echo site_url(); ?>applicant/updateexperienceaction',
            type: "POST",
            data: querystring,
            dataType: "json",
            success: function(response) {
                //code to execute
                //alert(response.success);
               
                if(response.success == true)
                {
                    //CancelExperience();
                   // $("#id01").hide();
                   
                   load_experiences();
                    toastr.success('<p>Job experience updated successfully</p>', {timeOut: 1000});
                   
                    $(".update-experience-form").trigger("reset");
                    // $(".experience_box").load(location.href + " .experience_box");
                   
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },
            });

        return false;
    });

</script>


<script>

    $("body").on('click', '.exp-delete', function(e){

            e.preventDefault();

             var exp_id = $(this).data('exp_id');
           
            // alert(exp_id);

           

            $.ajax({
                url: '<?php echo site_url();?>applicant/deletejobexperienceaction',
                method:"POST",
                dataType: "json",
                data: {exp_id:exp_id},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                },
                success: function(response){
                    
                    if(response.success == true)
                    {
                        //alert(response.success);
                        load_experiences();
                        toastr.success('<p>Experience deleted successfully</p>', {timeOut: 1000});
                        
                    } 
                    

                },
                error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    //alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },

            });

            return false;
            
        });


</script>

<script>

$("#add_education-form").submit(function(e){
    
    e.preventDefault();

var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>applicant/addeducationaction',
        type: "POST",
        data: querystring,
        dataType: "json",
        success: function(response) {
            //code to execute
            //alert(response.success);
            if(response.success == true)
            {

                //alert("hi");
                load_educations();
                document.getElementById("edu-update-form-div").style.display = "none";
                $("#add_education-form").trigger("reset");
                 toastr.success('<p>Education added successfully</p>', {timeOut: 1000});
            }
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

    return false;
});

</script>


<script>


    $("body").on('submit' ,'#update-education-form', function(e){
    
        e.preventDefault();

    var querystring = $(this).serialize();
    
    //alert(querystring);

        $.ajax({
            url: '<?php echo site_url(); ?>applicant/updateeducationaction',
            type: "POST",
            data: querystring,
            dataType: "json",
            success: function(response) {
                //code to execute
                // alert(response);
               
                if(response.success == true)
                {
                    //CancelExperience();
                   // $("#id01").hide();
                   
                   // $("#add-experience-form").reset();
                   load_educations();
                    toastr.success('<p>Education updated successfully</p>', {timeOut: 1000});
                }
                    
            },
            error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    //alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },
            });

        return false;
    });

</script>


<script>

  
        $("body").on('click' ,'.edu-delete', function(e){
            e.preventDefault();

            var edu_id = $(this).data('edu_id');
           
            //alert(edu_id);

            $.ajax({
                url: '<?php echo site_url();?>applicant/deleteeducationaction',
                method:"POST",
                dataType: "json",
                data: {edu_id:edu_id},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                },
                success: function(response){
                    
                    if(response.success == true)
                    {
                        load_educations();
                        toastr.success('<p>Education deleted successfully</p>', {timeOut: 1000});
                    } 
                    

                },
                error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },

            });

            
        });


</script>



<script>

    function load_educations()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>applicant/educations_container",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
           
            $('#education-post-container').html(data.educations);

            //alert(data.educations);
            
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      load_educations();

</script>


<script>

$("#add-skill-form").submit(function(e){
    
    e.preventDefault();

    var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>applicant/addproskillaction',
        type: "POST",
        data: querystring,
        dataType: "json",
        success: function(response) {
            //code to execute
            //alert(response.success);
            if(response.success == true)
            {
                //alert(response.success);
                load_pro_skills();
                $("#add-skill-form").hide();
                $("#add-skill-form").trigger("reset");
               // $("#add-pro-skill-button").load(location.href + " #add-pro-skill-button");
                $("#add-pro-skill-button").button("refresh");
               
                //toastr.success('<p>Pro Skill added successfully</p>', {timeOut: 1000});
            }
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

    return false;
});

</script>



<script>


$("body").on('click' ,'.delete-pro-skill-button', function(e){
    
    e.preventDefault();

    var skill_id = $(this).data('skill_id');
    
    //alert(skill_id);

            $.ajax({
                url: '<?php echo site_url();?>applicant/deleteproskillaction',
                method:"POST",
                dataType: "json",
                data: {skill_id:skill_id},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                },
                success: function(response){
                    
                    if(response.success == true)
                    {
                        load_pro_skills();
                        //alert(response.success);
                        // $(".add-skill-button").load(location.href + " .add-skill-button");
                        // $(".skills-container").load(location.href + " .skills-container");
                        
                        // $(".proskill").load(location.href + " .proskill");
                        toastr.success('<p>Pro Skill deleted successfully</p>', {timeOut: 1000});
                    } 
                    

                },
                error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },
        });

    });

</script>


<script>

    function load_pro_skills()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>applicant/pro_skills_container",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
           
            $('#skill-padding').html(data.pro_skills);

            //alert(data.pro_skills);
            
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            //alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      load_pro_skills();

</script>



<script>

$("#add-other-skill-form").submit(function(e){
    
    e.preventDefault();

var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>applicant/addotherskillaction',
        type: "POST",
        data: querystring,
        //dataType: "json",
        success: function(response) {
            //code to execute
            //alert(response);
            if(response.success == true)
            {
                // alert(response);
                //CancelExperience();
                //  $("#id02").hide();
                // $("#add_education-form").reset();
                $("#add-other-skill-form").hide();
                load_other_skills();
                toastr.success('<p>Other Skill added successfully</p>', {timeOut: 1000});
            }
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                //alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

    return false;
});

</script>



<script>

//$(".delete-other-skill-button").click(function(e){
$("body").on('click' ,'.delete-other-skill-button', function(e){
    
    e.preventDefault();

    var skill_id = $(this).data('skill_id');
    
    //alert(skill_id);

            $.ajax({
                url: '<?php echo site_url();?>applicant/deleteotherskillaction',
                method:"POST",
                dataType: "json",
                data: {skill_id:skill_id},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                },
                success: function(response){
                    
                    if(response.success == true)
                    {
                        //alert(response.success);
                        // $("#otherskills-div").load(location.href + " #otherskills");
                        // //$("#add-skill-button").load(location.href + " #add-skill-button");
                        // $(".proskill").load(location.href + " .proskill");
                        load_other_skills();
                        toastr.success('<p>Other Skill deleted successfully</p>', {timeOut: 1000});
                    } 
                    

                },
                error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },
        });

    });

</script>


<script>

    function load_other_skills()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>applicant/other_skills_container",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
           
            $('#other_skills').html(data.other_skills);

            //alert(data.pro_skills);
            
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            //alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      load_other_skills();

</script>


<script>

$('#image_upload_form').submit(function(e) 
        {

            e.preventDefault();

            var form_data = new FormData();
            
            var files = $('#fileid')[0].files[0];
        // alert("Hi");
            
            form_data.append('fileid',files);

            //

            var applicant_id = $('#applicant_id').val();

        

            var username = $('#user_name').val();

            //alert(username);

            form_data.append('applicant_id', applicant_id);

            form_data.append('user_name', username);


                $.ajax({
                    url: '<?php echo site_url();?>applicant/uploadportfolioaction',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(response){
                        alert(response.success);
                        $("#image_upload_form").trigger("reset");
                        $(".porfolio-container-imagesc").load(location.href + " .porfolio-container-imagesc"); 
                        $("#img-btn").load(location.href + " #img-btn"); 
                        toastr.success('<p>Portfolio Image uploaded successfully</p>', {timeOut: 1000});

                    },
                    error: function(xhr, textStatus, errorThrown) {
                        //code to execute
                        //alert(xhr.responseText);
                        //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                    },

                });

        });

</script>

<script>

        $('.delete-image').click(function (e) { 
            e.preventDefault();

            var image_id = $(this).data('image_id');
            var image_name = $(this).data('image_name');
            //alert(image_name);

            $.ajax({
                url: '<?php echo site_url();?>applicant/deleteportfolioaction',
                method:"POST",
                dataType: "json",
                data: {image_id:image_id, image_name:image_name},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                },
                success: function(response){
                    //alert(response.success);
                    if(response.success == true)
                    {
                        toastr.success('<p>Portfolio Image deleted successfully</p>', {timeOut: 1000});
                        $(".porfolio-container-imagesc").load(location.href + " .porfolio-container-imagesc");
                    } 
                    

                },
                error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    //alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },

            });

            
     });


</script>


<script>

        $('.delete-image2').click(function (e) { 
            e.preventDefault();

            var doc_id = $(this).data('doc_id');
            var doc_name = $(this).data('doc_name');
            //alert(image_name);

            $.ajax({
                url: '<?php echo site_url();?>applicant/deleteducumentaction',
                method:"POST",
                dataType: "json",
                data: {doc_id:doc_id, doc_name:doc_name},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                },
                success: function(response){
                    alert(response);
                    if(response.success == true)
                    {
                        toastr.success('<p>Document deleted successfully</p>', {timeOut: 1000});
                        $(".porfolio-container-imagesc").load(location.href + " .porfolio-container-imagesc");
                    } 
                    

                },
                error: function(xhr, textStatus, errorThrown) {
                    //code to execute
                    alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },

            });

            
        });


</script>



<script>

$("#add-links-form").submit(function(e){
    
    e.preventDefault();

var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>applicant/addweblinkaction',
        type: "POST",
        data: querystring,
        dataType: "json",
        success: function(response) {
            //code to execute
            //alert(response);
            if(response.success == true)
            {
             //alert(response);
                //CancelExperience();
            $("#add-links-form").hide();
                // $("#add_education-form").reset();
            //$(".weblinks").load(location.href + " .weblinks");
             toastr.success('<p>Web Link added successfully</p>', {timeOut: 1000});
            }
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

    return false;
});

</script>


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
    $('#state2').change(function(){
			var state = $('#state2').val();
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
					    $('#lga2').html(data);
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
    $('.profile_setup').keyup(function(){

            var id = $('#appl_id').val();
            var phone = $('#phone').val();
            var minimum_salary = $('#minimum_salary').val();
            //var certificate = $('#certificate').val();
            var email = $('#email').val();
           
			//alert(phone);
			 if(state != '')
			 {
				 //alert("Hi");
				$.ajax({
					url:"<?php echo site_url(); ?>applicant/profilesetupaction",
					method:"POST",
					data:{id:id, phone:phone, minimum_salary:minimum_salary, email: email},
					success:function(data)
					{
						//alert(data);
                        //$('#lga').html(data);
                        setTimeout(function() {toastr.success('<p>Profile updated successfully</p>', {timeOut: 1000});}, 3000);
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

    function openfile(a) {
    $(a).trigger('click');
    }

</script>


<script>

    $("#file-input-images").change(function(e){
            //alert("A file has been selected.");
            e.preventDefault();

            var form_data = new FormData();

            var files = $('#file-input-images')[0].files[0];
            // alert("Hi");

            form_data.append('fileid',files);


            var applicant_id = $('#applicant_id').val();


            var username = $('#user_name').val();

            //alert(username);

            form_data.append('applicant_id', applicant_id);

            form_data.append('user_name', username);


            $.ajax({
                    url: '<?php echo site_url();?>applicant/uploadportfolioaction',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(response){
                        //alert(response.success);
                        $("#image_upload_form").trigger("reset");
                        $(".image-padding").load(location.href + " .image-padding"); 
                        $(".porfolio-container-images").load(location.href + " .porfolio-container-images"); 
                        toastr.success('<p>Portfolio Image uploaded successfully</p>', {timeOut: 1000});

                    },
                    error: function(xhr, textStatus, errorThrown) {
                        //code to execute
                        //alert(xhr.responseText);
                        //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                    },

                });

    });

</script>


<script>

    $("#file-input-documents").change(function(e){
            //alert("A file has been selected.");
            e.preventDefault();

            var form_data = new FormData();

            var files = $('#file-input-documents')[0].files[0];
            // alert("Hi");

            form_data.append('docid',files);


            var applicant_id = $('#applicant_id').val();


            var username = $('#user_name').val();

            //alert(username);

            form_data.append('applicant_id', applicant_id);

            form_data.append('user_name', username);

            //alert(form_data);


            $.ajax({
                    url: '<?php echo site_url();?>applicant/uploaddocumentaction',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(response){
                        //alert(response);
                        $("#document_upload_form").trigger("reset");
                        $(".image-padding").load(location.href + " .image-padding"); 
                        $(".porfolio-container-documents").load(location.href + " .porfolio-container-documents"); 
                        toastr.success('<p>Document uploaded successfully</p>', {timeOut: 1000});

                    },
                    error: function(xhr, textStatus, errorThrown) {
                        //code to execute
                        //alert(xhr.responseText);
                        //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                    },

                });

    });

</script>


<script>

$(".search_applicants").keyup(function(){

    var keyword = $(this).val();

    //alert(keyword)

		$.ajax({

        url: '<?php echo site_url(); ?>applicant/searchapplicants',
        type: "POST",
        data: {keyword:keyword},
        dataType: "json",
        beforeSend: function(){
			$(".search_applicants").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
        success: function(response) {
            //code to execute
            //alert(response.applicants);
            
            //$("#suggestion-box").show();
            $(".suggestion-box").html(response.applicants);
            //alert(response.applicants);
        
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });
	});

</script>


<script>

    //$('.name-box').click(function (e) { 
        $('body').on('click', '.name-box', function (){
        //e.preventDefault();

         var applicant_name = $(this).data('applicant_name');

         //alert(applicant_name);
        //alert("hi");

        $(".search_applicants").val(applicant_name);
        $(".suggestion-box").hide();
        
    });

</script>



<script>

$("#search_teams").keyup(function(){

    var keyword = $(this).val();

    //alert(keyword)

		$.ajax({

        url: '<?php echo site_url(); ?>applicant/searchteams',
        type: "POST",
        data: {keyword:keyword},
        dataType: "json",
        beforeSend: function(){
			$("#search_applicants").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
        success: function(response) {
            //code to execute
            //alert(response.teams);
            
            $(".suggestion-box").show();
            $(".suggestion-box").html(response.teams);
            //alert(response.applicants);
        
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });
	});

</script>


<script>

    //$('.name-box').click(function (e) { 
        $('body').on('click', '.name-box2', function (){
        //e.preventDefault();

         var team_name = $(this).data('team_name');

         //alert(team_name);
        //alert("hi");

        $(".search_teams").val(team_name);
        $(".suggestion-box").hide();
        
    });

</script>


<script>

        $('body').on('click', '.job_messages', function (){
        //e.preventDefault();

            var job_id = $(this).data('job_id');

            //alert(job_id);
            //alert("hi");

            // $(".search_teams").val(team_name);
            $("#job_messages-div").toggle();


            $.ajax({

                url: '<?php echo site_url(); ?>applicant/getjobinvitemessages',
                type: "POST",
                data: {job_id:job_id},
                dataType: "json",
                beforeSend: function(){
                    $("#search_applicants").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
                },
                success: function(response) {
                    //code to execute
                    alert(response);
                    
                    // $(".suggestion-box").show();
                    // $(".suggestion-box").html(response.teams);
                    //alert(response.applicants);

                },
                error: function(xhr, textStatus, errorThrown) {
                        //code to execute
                        alert(xhr.responseText);
                        //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                    },
                });       

        
        });

</script>


<script>


$("#add-event-form").submit(function(e){
    
    e.preventDefault();

    var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>applicant/createeventaction',
        type: "POST",
        data: querystring,
        dataType: "json",
        success: function(response) {
            //code to execute
            //alert(response);
            if(response.success == true)
            {
             //alert(response);
                //CancelExperience();
                //  $("#id02").hide();
                // $("#add_education-form").reset();
              toastr.success('<p>Event created successfully</p>', {timeOut: 1000});
            }
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

    return false;
});


</script>


<script>

$("#bio-info-form").submit(function(e){
    
    e.preventDefault();

    var querystring = $(this).serialize();

    //console.log(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>applicant/updatebio',
        type: "POST",
        data: querystring,
        dataType: "json",
        success: function(response) {
            //code to execute
            //console.log(response);
            if(response.success == true)
            {
             //alert(response);
                //CancelExperience();
                //  $("#id02").hide();
                // $("#add_education-form").reset();
             HideBio();
             toastr.success('<p>Profile updated successfully</p>', {timeOut: 1000});
            }
        },
        error: function(xhr, textStatus, errorThrown) {
                //code to execute
                alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

    return false;
});

</script>


<script>
  function setOpt(selector, text, value) {
  var node = document.querySelector(selector);
  var opt = document.createElement("option");
  opt.text = text;
  opt.value = value;
  node.add(opt);
  return false;
}

function T(t) {
  var now = new Date();
  var time;
  switch (t.toLowerCase()) {
    case 'm':
      time = now.getMonth() + 1;
      break;
    case 'd':
      time = now.getDate();
      break;
    case 'y':
      time = now.getFullYear();
      break;
    default:
      break;
  }
  return time;
}
for (let i = 1930; i <= T('y'); i++) {
  setOpt('#year1', i, i);
}
</script>


<script>
  function setOpt(selector, text, value) {
  var node = document.querySelector(selector);
  var opt = document.createElement("option");
  opt.text = text;
  opt.value = value;
  node.add(opt);
  return false;
}

function T(t) {
  var now = new Date();
  var time;
  switch (t.toLowerCase()) {
    case 'm':
      time = now.getMonth() + 1;
      break;
    case 'd':
      time = now.getDate();
      break;
    case 'y':
      time = now.getFullYear();
      break;
    default:
      break;
  }
  return time;
}
for (let i = 1930; i <= T('y'); i++) {
  setOpt('#year2', i, i);
}
</script>



<script>
  function setOpt(selector, text, value) {
  var node = document.querySelector(selector);
  var opt = document.createElement("option");
  opt.text = text;
  opt.value = value;
  node.add(opt);
  return false;
}

function T(t) {
  var now = new Date();
  var time;
  switch (t.toLowerCase()) {
    case 'm':
      time = now.getMonth() + 1;
      break;
    case 'd':
      time = now.getDate();
      break;
    case 'y':
      time = now.getFullYear();
      break;
    default:
      break;
  }
  return time;
}
for (let i = 1930; i <= T('y'); i++) {
  setOpt('#year3', i, i);
}
</script>


<script>
  function setOpt(selector, text, value) {
  var node = document.querySelector(selector);
  var opt = document.createElement("option");
  opt.text = text;
  opt.value = value;
  node.add(opt);
  return false;
}

function T(t) {
  var now = new Date();
  var time;
  switch (t.toLowerCase()) {
    case 'm':
      time = now.getMonth() + 1;
      break;
    case 'd':
      time = now.getDate();
      break;
    case 'y':
      time = now.getFullYear();
      break;
    default:
      break;
  }
  return time;
}
for (let i = 1930; i <= T('y'); i++) {
  setOpt('#year4', i, i);
}
</script>


<script>
  function setOpt(selector, text, value) {
  var node = document.querySelector(selector);
  var opt = document.createElement("option");
  opt.text = text;
  opt.value = value;
  node.add(opt);
  return false;
}

function T(t) {
  var now = new Date();
  var time;
  switch (t.toLowerCase()) {
    case 'm':
      time = now.getMonth() + 1;
      break;
    case 'd':
      time = now.getDate();
      break;
    case 'y':
      time = now.getFullYear();
      break;
    default:
      break;
  }
  return time;
}
for (let i = 1930; i <= T('y'); i++) {
  setOpt('#year5', i, i);
}
</script>


<script>
  function setOpt(selector, text, value) {
  var node = document.querySelector(selector);
  var opt = document.createElement("option");
  opt.text = text;
  opt.value = value;
  node.add(opt);
  return false;
}

function T(t) {
  var now = new Date();
  var time;
  switch (t.toLowerCase()) {
    case 'm':
      time = now.getMonth() + 1;
      break;
    case 'd':
      time = now.getDate();
      break;
    case 'y':
      time = now.getFullYear();
      break;
    default:
      break;
  }
  return time;
}
for (let i = 1930; i <= T('y'); i++) {
  setOpt('#year6', i, i);
}
</script>




</html>
