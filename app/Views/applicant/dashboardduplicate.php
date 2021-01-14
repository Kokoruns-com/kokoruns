<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
    
    
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/Education.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/Experience.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/Online%20Links.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/Portfolio%20Images.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/Skills.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/css/User%20Info.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Header%20&%20Nav%20Bar.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/Footer.css">
    
    
     <link rel="shortcut icon" href="<?php echo base_url();?>/public/assets/Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css"> 

     <style>

        /* The container <div> - needed to position the dropdown content */
        .dropdown {
        position: relative;
        display: inline-block;
        }

        /* Dropdown Content (Hidden by Default) */
        .dropdown-content {
        display: none;
        position: absolute;
        left:-136px;
        top: 29px;
        /* right: 0; */
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        }

        /* Links inside the dropdown */
        .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        }

        /* Change color of dropdown links on hover */
        /* .dropdown-content a:hover {background-color: #f1f1f1} */

        /* Show the dropdown menu on hover */
        .dropdown:hover .dropdown-content {
        display: block;
        }

        /* Change the background color of the dropdown button when the dropdown content is shown */
        .dropdown:hover .dropbtn {
        background-color: #3e8e41;
        }

        .dropdown-divider {
            height: 0;
            margin: .5rem 0;
            overflow: hidden;
            border-top: 1px solid #e9ecef;
        }

        .text-white{
            color: #fff !important;
        }

     </style>


    
</head>
    
    <header class="header-class">
           
             <div style="float: left">
            <a href="index.html">
            <img class="logo" src="<?php echo base_url();?>/public/assets/Images/Logo.png"></a>
                </div>
        
        
          <div class="topnav">
            <a href="<?php echo site_url();?>logout">Logout</a>
       
            </header>
    
    <body style="margin: 0px; background: #fcfcfc;">
        
        <!--USER INFO-->
        
        <section class="user-info-container">    
            
            <div class="banner">
            
            <div class="icons-div w3-right"> 
            
            <!-- <a href=""><img class="inbox" src="<?php echo base_url();?>/public/assets/Images/Inbox%20logo.png"></a> -->
                
                
                

                <div class="dropdown">
                <i class="fa fa-bars w3-text-white cursor" style="font-size: 26px !important;"></i>
                <div class="dropdown-content">
                    <a href="#" onclick="SearchFunction()">Search</a>
                    <!-- <div class="dropdown-divider"></div> -->
                    <a href="#"  onclick="TeamFunction()">Teams</a>
                    <a href="#"  onclick="MessagesFunction()">Messages</a>
                    <a href="#"  onclick="JobDashFunction()">JobDash</a>
                    <a href="#" onclick="EventsFunction()">Events</a>
                    <a href="#"  onclick="AllAboutYouFunction()">All About You</a>
                    <a href="#"  onclick="JobBoardFunction()">Jobs Board</a>
                    <a href="#"  onclick="RecommendationsFunction()">Recommendations</a>
                    <a href="#">Logout</a>
                    <a href="#"  onclick="SettingsFunction()">Settings</a>
                </div>
            </div>
             
            
            </div>
            
       <div align="center" class="dp-div"> <img class="dp" src="<?php echo base_url();?>/public/assets/Css/Css%20Images/User%20DP.png"> 
            </div>
            
            <a style="text-decoration: none" href=""><div align="center" class="user-link">kokoruns.com/<?php echo $applicant_details['fapplicant_id']; ?></div></a>
            
        <div align="center" class="user-name"><?php echo ucwords(strtolower($applicant_details['ffirst_name'])); ?> <?php echo ucwords(strtolower($applicant_details['flast_name'])); ?> <img src="" class="verification"> </div> 
            
        <div align="center" class="user-profession">Accountant | Physician | Chemist | Engineer | Cook</div>
            
        <div id="view-bio-div" onclick="ViewBio()" align="center" class="view-bio-div">
        <button align="center" class="view-bio-button cursor">View Bio</button></div>
                
        <div id="hide-bio-div" onclick="HideBio()" align="center" class="hide-bio-div">
             <button align="center" class="hide-bio-button">Hide Bio</button></div>            
         
        <!--display-inline-block;-->    
        <div id="user-bio" align="center" class="user-bio"> 

                
            <div class="bio-info">
            <label class="bio-info-label">Recommendations </label><br>
            <a href="a">47</a><br><br>
            <label class="bio-info-label">Phone Number</label><br>
            <input type="number" class="w3-input profile_setup"  name="" id="phone" value="<?php echo $applicant_details['fphone']; ?>">
            <input type="hidden" name="id" id="appl_id" value="<?php echo $applicant_details['frecno']; ?>">
            <br>
            <label class="bio-info-label">Academic Level</label><br> 
            <select class="w3-select profile_setup" name="" id="certificate">
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
            <br><br>
            <label class="bio-info-label">Company / Brand</label><br>   
            ABC Corrporation<br><br>
            <label class="bio-info-label">Minimum Salary(&#8358;)</label><br>
           <input class="w3-input profile_setup" type="number" name="minimum_salary" id="minimum_salary" value="<?php echo $applicant_details['fminimum_salary']; ?>">
            <br>
            <label class="bio-info-label">Location</label> <?php echo $applicant_details['flga']; ?>, <?php echo $applicant_details['fstate']; ?><br>
            <button onclick="document.getElementById('id03').style.display='block'">Change</button>


            <!-- The Modal -->
            <div id="id03" class="w3-modal" style="width:100%">
            <div class="w3-modal-content w3-card-4">
            <header class="w3-container w3-padding-large">
                <span onclick="document.getElementById('id01').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
                <h2>Change Location</h2>
            </header>
                <div class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
                <form action="<?php echo site_url();?>applicant/changelocation" method="post">
                <input type="hidden" name="id" id="id" value="<?php echo $applicant_details['frecno']; ?>">
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

                   
                </div>
                <br>
                    <footer class="w3-container w3-padding ">
                            <button class="w3-button w3-black w3-right" type="submit">Save</button>
                    </footer>
                </form>
            </div>
            </div>


             
<br><br>
            <label class="bio-info-label">Email</label><br>    
            <input type="email" class="w3-input profile_setup" name="" id="email" value="<?php echo $applicant_details['femail']; ?>"> 
            <br>   
            </div>
            
            <br> <br>
            
            </div>
    
                  
            <div align="center" class="sections">
                
            <button id="exp-b" onclick="ExperienceFunction()" class="sections-div cursor">Experience</button>
                
                &nbsp;    
            <button id="edu-b" onclick="EducationFunction()" class="sections-div cursor">Education</button>
             
              &nbsp;    
            <button id="skill-b" onclick="SkillsFunction()" class="sections-div cursor">Skills</button>
             
              &nbsp;    
            <button id="port-b" onclick="PortfolioFunction()" class="sections-div cursor">Portfolio</button>
              
              &nbsp;    
            <button id="link-b" onclick="LinksFunction()" class="sections-div cursor">Links</button> 
                
            </div>
                
                </div>
            
        </section> 

        
        <!--EXPERIENCE-->
        
        <section id="user-experience" class="user-experience">
            
            <h2 align="center" class="user-experience-header">Work Experience   <small><button onclick="document.getElementById('id01').style.display='block'" class="exp-update-button cursor">Add New</button></small>   </h2>
            

          

            <!-- The Modal -->
            <div id="id01" class="w3-modal" style="padding-top: 0px !important;">
                <div class="w3-modal-content" style="background:#fff;">
                <header class="w3-container">
                <span onclick="document.getElementById('id01').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
                <h4>Add Job Experience</h4>
                </header>
                <div class="w3-container">
                
                <div id="exp-update-form-div" class="exp-update-form-dfiv">
            
            <div class="exp-update-form-container">
                
               <form class="exp-update-form" id="add-experience-form">
               <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
               <div style="display: flex">
               <label class="exp-duration-label" style="flex-grow: 1">From</label>  <label class="exp-duration-label" style="flex-grow: 1">Till</label>
               </div>
                       
                    <br>
                   
                     <div style="display: flex">
                   
                    <select class="exp-duration" style="margin-right:5px;" name="start_month" required>
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
                   
                    <select id="year1" class="exp-duration" style="margin-right:5px;" name="start_year" required>
                        <option value="">Year</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                   </select>

                 

                   <select class="exp-duration"  style="margin-right:5px;" name="end_month" required>
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
                   
                    <select id="year2" class="exp-duration" name="end_year">
                        <option value="">Year</option>
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                   </select>

                </div>
                       
                   
                    <br>
                    <label class="company-label">Company&nbsp;or&nbsp;Business</label><br>
                    <input id="company-or-business" class="company-or-business"  type="text" name="ex-company-name" id="" placeholder="" required>
                    
                    <br><br>
                    
                    <label class="position-label">
                    Position</label><br>
                    <input class="position"  type="text" name="exposition" id="positon" placeholder="" required>
                    <br>
                    <button class="letter-button">Add Employment Letter</button>
                   
                   <br><br>
            
                       
                    <label class="roles-and-respon-label">Roles&nbsp;and&nbsp;Responsibilities</label>
                   
                   <br>
                   
                   <textarea  name="ex-roles[]" class="roles-text-area" placeholder=""></textarea><br class="br-area" required>
                   <textarea  name="ex-roles[]" class="roles-text-area" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area" placeholder=""></textarea><br class="br-area">
                   <textarea  name="ex-roles[]" class="roles-text-area" placeholder=""></textarea><br class="br-area">
                   
                   
                   <br>
                       
                   <div class="exp-button-container">
                     
                        <div class="exp-button-right">
                            
                   <button onclick="CancelExperience()" class="exp-cancel-button" action="">Cancel</button>
                            
                   <button class="exp-finish-button w3-right" type="submit">Save</button>
                            
                            </div>
                       
                       </div>
                   
                </form> 
                
                </div> 
                    
            </div> 



                </div>
                <footer class="w3-container">
                    &nbsp;
                </footer>
               
                </div>
            </div>


            <?php if(empty($applicant_experiences)) { ?>
                   
                   <div class="">
                       <p style="text-align:center">Seems you have no job history yet. Add a new record to get started.</p>
                   </div>
                             
               <?php } else {  foreach($applicant_experiences as $experience) {?>


            <div class="experience-post-container">
              
                <div class="exp-cont w3-white" style="border: 4px solid #ADD8E6;">
                <div class="experience_box"> 
                <span><strong><?php echo date('F Y', strtotime($experience['fstart'])); ?></strong></span><span> - </span><span><strong> <?php echo date('F Y', strtotime($experience['fend'])); ?></strong></span><br><br>
            
            <span class="company"><?php echo $experience['fcompany_name']; ?></span><br>
            
            <span class="exp-position"> &nbsp;&nbsp; <i> <?php echo ucwords(strtolower($experience['fposition'])); ?> </i> </span>  
            <!-- <button class="position-button">View</button><br><br> -->

            <?php $roles_array = explode(",", $experience['frole']); ?>

           <ul class="roles-and-respon" style="list-style-type: disc !important;">
                <?php foreach($roles_array as $role){?>
                        <li><?php echo $role; ?></li>
                <?php } ?>
           </ul>
                    
            <br>
               
              </div>  
        <div>
         
            <i class="fa fa-edit w3-text-blue" id="<?php echo $experience['frecno']; ?>" onclick="EditExperienceForm(this.id)" style="cursor:pointer;"></i>
         
            <i class="exp-delete fa fa-trash w3-text-red cursor" data-exp_id="<?php echo $experience['frecno']; ?>"></i>
        </div>


            <div id="exp-edit-form-div_<?php echo $experience['frecno']; ?>" class="exp-update-form-div">
            
            <div class="exp-update-form-container2">
                
               <form class="exp-update-form" id="update-experience-form">
               <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
               <div style="display: flex">
               <label class="exp-duration-label" style="flex-grow: 1">From</label>  <label class="exp-duration-label" style="flex-grow: 1">Till</label>
               </div>
                       
                    <br>
                   
                     <div style="display: flex">
                   <?php 
                  
                        $date1  = strtotime($experience['fstart']);
                        $day1   = date('d',$date1);
                        $month1 = date('m',$date1);
                        $year1  = date('Y',$date1);
                    ?>
                    <select class="exp-duration" style="margin-right:5px;" name="start_month" required>
                        <option value="">Month</option>
                        <option value="01" <?php if($month1 == "01"){ echo "selected";} ?>>January</option>
                        <option value="02" <?php if($month1 == "02"){ echo "selected";} ?>>February</option>
                        <option value="03" <?php if($month1 == "03"){ echo "selected";} ?>>March</option>
                        <option value="04" <?php if($month1 == "04"){ echo "selected";} ?>>April</option>
                        <option value="05" <?php if($month1 == "05"){ echo "selected";} ?>>May</option>
                        <option value="06" <?php if($month1 == "06"){ echo "selected";} ?>>June</option>
                        <option value="07" <?php if($month1 == "07"){ echo "selected";} ?>>July</option>
                        <option value="08" <?php if($month1 == "08"){ echo "selected";} ?>>August</option>
                        <option value="09" <?php if($month1 == "09"){ echo "selected";} ?>>September</option>
                        <option value="10" <?php if($month1 == "10"){ echo "selected";} ?>>October</option>
                        <option value="11" <?php if($month1 == "11"){ echo "selected";} ?>>November</option>
                        <option value="12" <?php if($month1 == "12"){ echo "selected";} ?>>December</option>

                   </select>
                   
                    <select id="year1" class="exp-duration" style="margin-right:5px;" name="start_year" required>
                        <option value="">Year</option>
                        <option value="2010" <?php if($year1 == "2010"){ echo "selected";} ?>>2010</option>
                        <option value="2011" <?php if($year1 == "2011"){ echo "selected";} ?>>2011</option>
                        <option value="2012" <?php if($year1 == "2012"){ echo "selected";} ?>>2012</option>
                        <option value="2013" <?php if($year1 == "2013"){ echo "selected";} ?>>2013</option>
                        <option value="2014" <?php if($year1 == "2014"){ echo "selected";} ?>>2014</option>
                        <option value="2015" <?php if($year1 == "2015"){ echo "selected";} ?>>2015</option>
                   </select>

                   <?php 
                  
                    $date2  = strtotime($experience['fend']);
                    $day2   = date('d',$date2);
                    $month2 = date('m',$date2);
                    $year2  = date('Y',$date2);
                ?>

                   <select class="exp-duration"  style="margin-right:5px;" name="end_month" required>
                        <option value="">Month</option>
                        <option value="01" <?php if($month2 == "01"){ echo "selected";} ?>>January</option>
                        <option value="02" <?php if($month2 == "02"){ echo "selected";} ?>>February</option>
                        <option value="03" <?php if($month2 == "03"){ echo "selected";} ?>>March</option>
                        <option value="04" <?php if($month2 == "04"){ echo "selected";} ?>>April</option>
                        <option value="05" <?php if($month2 == "05"){ echo "selected";} ?>>May</option>
                        <option value="06" <?php if($month2 == "06"){ echo "selected";} ?>>June</option>
                        <option value="07" <?php if($month2 == "07"){ echo "selected";} ?>>July</option>
                        <option value="08" <?php if($month2 == "08"){ echo "selected";} ?>>August</option>
                        <option value="09" <?php if($month2 == "09"){ echo "selected";} ?>>September</option>
                        <option value="10" <?php if($month2 == "10"){ echo "selected";} ?>>October</option>
                        <option value="11" <?php if($month2 == "11"){ echo "selected";} ?>>November</option>
                        <option value="12" <?php if($month2 == "12"){ echo "selected";} ?>>December</option>
                   </select>
                   
                    <select id="year2" class="exp-duration" name="end_year">
                        <option value="">Year</option>
                        <option value="2010" <?php if($year2 == "2010"){ echo "selected";} ?>>2010</option>
                        <option value="2011" <?php if($year2 == "2011"){ echo "selected";} ?>>2011</option>
                        <option value="2012" <?php if($year2 == "2012"){ echo "selected";} ?>>2012</option>
                        <option value="2013" <?php if($year2 == "2013"){ echo "selected";} ?>>2013</option>
                        <option value="2014" <?php if($year2 == "2014"){ echo "selected";} ?>>2014</option>
                        <option value="2015" <?php if($year2 == "2015"){ echo "selected";} ?>>2015</option>
                   </select>

                </div>
                       
                   
                    <br>
                    <label class="company-label">Company&nbsp;or&nbsp;Business</label><br>
                    <input id="company-or-business" class="company-or-business"  type="text" name="ex-company-name" id="" value="<?php echo $experience['fcompany_name']; ?>" required>
                    <input type="hidden" name="frecno" value="<?php echo $experience['frecno']; ?>">
                    <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                    <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                    <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                    <br><br>
                    
                    <label class="position-label">
                    Position</label><br>
                    <input class="position"  type="text" name="exposition" id="positon" value="<?php echo $experience['fposition']; ?>" required>
                    <br>
                    <button class="letter-button">Add Employment Letter</button>
                   
                   <br><br>
            
                       
                    <label class="roles-and-respon-label">Roles&nbsp;and&nbsp;Responsibilities</label>
                   
                   <br>
                   <?php $roles_array = explode(",", $experience['frole']); ?>
                   <input type="text"  name="ex-roles[]" class="roles-text-area" value="<?php if(!empty($roles_array[0])){echo $roles_array[0];} ?>"><br class="br-area" required>
                   <input type="text"  name="ex-roles[]" class="roles-text-area" value="<?php if(!empty($roles_array[1])){echo $roles_array[1];} ?>"><br class="br-area">
                   <input type="text"  name="ex-roles[]" class="roles-text-area" value="<?php if(!empty($roles_array[2])){echo $roles_array[2];} ?>"><br class="br-area">
                   <input type="text"  name="ex-roles[]" class="roles-text-area" value="<?php if(!empty($roles_array[3])){echo $roles_array[3];} ?>"><br class="br-area">
                   <input type="text"  name="ex-roles[]" class="roles-text-area" value="<?php if(!empty($roles_array[4])){echo $roles_array[4];} ?>"><br class="br-area">
                   <input type="text"  name="ex-roles[]" class="roles-text-area" value="<?php if(!empty($roles_array[5])){echo $roles_array[5];} ?>"><br class="br-area">
                   <input type="text"  name="ex-roles[]" class="roles-text-area" value="<?php if(!empty($roles_array[6])){echo $roles_array[6];} ?>"><br class="br-area">
                   <input type="text"  name="ex-roles[]" class="roles-text-area" value="<?php if(!empty($roles_array[7])){echo $roles_array[7];} ?>"><br class="br-area">
                   
                   
                   <br>
                       
                   <div class="exp-button-container">
                     
                        <div class="exp-button-right">
                            
                   <button onclick="CancelExperience()" class="exp-cancel-button" action="">Cancel</button>
                            
                   <button class="exp-finish-button w3-right cursor" type="submit">Update</button>
                            
                            </div>
                       
                       </div>
                   
                </form> 
                
                </div> 
                    
            </div> 

           </div>   

    
        </div>


        <?php } } ?>
            
    
        </section>
            
    
        <!--EDUCATION-->
        
        <section id="user-education" class="user-education" style="display:none;">
            
            <h2 align="center" class="user-education-header">Education <small> <button onclick="document.getElementById('id02').style.display='block'" class="exp-update-button">Add New</button></small></h2>
            


        <!-- Add Education Modal -->
        <div id="id02" class="w3-modal" style="padding-top: 0px !important;">
                <div class="w3-modal-content" style="background:#fff;">
                <header class="w3-container">
                <span onclick="document.getElementById('id02').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
                <h4>Add Education</h4>
                </header>
                <div class="w3-container">
      
                <div id="edu-update-form-div" class="edu-update-form-div4">
            
            <div class="edu-update-form-container">
                
               <form class="edu-update-form" id="add_education-form">
                    
               <div style="display: flex">
               <label class="exp-duration-label" style="flex-grow: 1">From *</label>  <label class="exp-duration-label" style="flex-grow: 1">Till*</label>
               </div>
           
               <br>
                   
                   <div style="display: flex">
                 
                  <select class="exp-duration" style="margin-right:5px;" name="start_month" required>
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
                 
                  <select id="year1" class="exp-duration" style="margin-right:5px;" name="start_year" required>
                      <option value="">Year</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                 </select>

               

                 <select class="exp-duration"  style="margin-right:5px;" name="end_month" required>
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
                 
                  <select id="year2" class="exp-duration" name="end_year">
                      <option value="">Year</option>
                      <option value="2010">2010</option>
                      <option value="2011">2011</option>
                      <option value="2012">2012</option>
                      <option value="2013">2013</option>
                      <option value="2014">2014</option>
                      <option value="2015">2015</option>
                 </select>

              </div> 
                   
                    <br>
                    <label class="school-label">School&nbsp;or&nbsp;institution</label><br>
                    <input id="edu-position" class="school-or-institution"  type="" name="school" id="" placeholder="" required>
                    <input type="hidden" id="applicant_id" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                    <input type="hidden" id="user_name" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                    <br><br>
                    
                    <label class="degree-label">
                    Course of Study</label><br>
                    <input class="degree-certificate"  type="" name="course"  placeholder="" required>

                    <br><br>
                    
                    <label class="degree-label">
                    Degree&nbsp;or&nbsp;Certificate</label><br>
                    <input class="degree-certificate"  type="" name="class_of_degree"  placeholder="" required>
                    <br>
                    <button class="certificate-button">Add Certificate</button>
                   
                   <br><br>
            
                       
                    <label class="skills-and-topics-label">Skills&nbsp;and&nbsp;Topics&nbsp;Learned</label>
                   
                   <br>
                   
                  <span> 1. <input type="text" id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></span>
                  <span> 2.  <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""></textarea><br class="br-area"></span>
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


                </div>
                <footer class="w3-container">
                    &nbsp;
                </footer>
               
                </div>
            </div>




            <?php if(empty($applicant_educations)) { ?>
                   
                   <div class="">
                       <p style="text-align:center">Seems you have no education history yet. Add a new record to get started.</p>
                   </div>
                             
               <?php } else { foreach($applicant_educations as $education) {?>


            <div class="education-post-container">
                
                <div class="edu-cont w3-white" style="border: 4px solid #ADD8E6;">
            
                <span><strong><?php echo date('F Y', strtotime($education['fstart'])); ?></span></strong><span> - </span><span><strong> <?php echo date('F Y', strtotime($education['fend'])); ?></strong></span><br><br>
            
            <span class="school"><?php echo $education['fschool']; ?></span><br>
            
            <span class="degree"><i><?php echo $education['fclass_of_degree']; ?>  in  <?php echo $education['fcourse']; ?></i></span>&nbsp;
            &nbsp;&nbsp;&nbsp; <a class=""> <u> view uploaded certificate </u></a>
            <br>
        

           <?php $skills_array = explode(",", $education['fskills_learned']); ?>

            <ul class="skills-topics">
                <?php foreach($skills_array as $skill){?>
                        <li><?php echo $skill; ?></li>
                <?php } ?>
            </ul>
                    
                
                
        <div>
            <i class="fa fa-edit w3-text-blue" id="<?php echo $education['frecno']; ?>"  onclick="EditEducationForm(this.id)" style="cursor:pointer;"></i>
            <i class="edu-delete fa fa-trash w3-text-red cursor" data-edu_id="<?php echo $education['frecno']; ?>"></i>
        </div>

            <div id="edu-update-form-div_<?php echo $education['frecno']; ?>" class="edu-update-form-div">
            
            <div class="edu-update-form-containert">
                
               <form class="edu-update-form" id="update-education-form">
                    
               <div style="display: flex">
               <label class="exp-duration-label" style="flex-grow: 1">From</label>  <label class="exp-duration-label" style="flex-grow: 1">Till</label>
               </div>


               <br>
    
                   
                   <div style="display: flex">
                 <?php 
                
                      $dateEdu1  = strtotime($education['fstart']);
                      $dayEdu1   = date('d',$dateEdu1);
                      $monthEdu1 = date('m',$dateEdu1);
                      $yearEdu1  = date('Y',$dateEdu1);
                  ?>
                  <select class="exp-duration" style="margin-right:5px;" name="start_month" required>
                      <option value="">Month</option>
                      <option value="01" <?php if($monthEdu1 == "01"){ echo "selected";} ?>>January</option>
                      <option value="02" <?php if($monthEdu1 == "02"){ echo "selected";} ?>>February</option>
                      <option value="03" <?php if($monthEdu1 == "03"){ echo "selected";} ?>>March</option>
                      <option value="04" <?php if($monthEdu1 == "04"){ echo "selected";} ?>>April</option>
                      <option value="05" <?php if($monthEdu1 == "05"){ echo "selected";} ?>>May</option>
                      <option value="06" <?php if($monthEdu1 == "06"){ echo "selected";} ?>>June</option>
                      <option value="07" <?php if($monthEdu1 == "07"){ echo "selected";} ?>>July</option>
                      <option value="08" <?php if($monthEdu1 == "08"){ echo "selected";} ?>>August</option>
                      <option value="09" <?php if($monthEdu1 == "09"){ echo "selected";} ?>>September</option>
                      <option value="10" <?php if($monthEdu1 == "10"){ echo "selected";} ?>>October</option>
                      <option value="11" <?php if($monthEdu1 == "11"){ echo "selected";} ?>>November</option>
                      <option value="12" <?php if($monthEdu1 == "12"){ echo "selected";} ?>>December</option>

                 </select>
                 
                  <select id="year1" class="exp-duration" style="margin-right:5px;" name="start_year" required>
                      <option value="">Year</option>
                      <option value="2010" <?php if($yearEdu1 == "2010"){ echo "selected";} ?>>2010</option>
                      <option value="2011" <?php if($yearEdu1 == "2011"){ echo "selected";} ?>>2011</option>
                      <option value="2012" <?php if($yearEdu1 == "2012"){ echo "selected";} ?>>2012</option>
                      <option value="2013" <?php if($yearEdu1 == "2013"){ echo "selected";} ?>>2013</option>
                      <option value="2014" <?php if($yearEdu1 == "2014"){ echo "selected";} ?>>2014</option>
                      <option value="2015" <?php if($yearEdu1 == "2015"){ echo "selected";} ?>>2015</option>
                 </select>

                 <?php 
                
                $dateEdu2  = strtotime($education['fend']);
                $dayEdu2   = date('d',$dateEdu2);
                $monthEdu2 = date('m',$dateEdu2);
                $yearEdu2  = date('Y',$dateEdu2);
              ?>

                 <select class="exp-duration"  style="margin-right:5px;" name="end_month" required>
                      <option value="">Month</option>
                      <option value="01" <?php if($monthEdu2 == "01"){ echo "selected";} ?>>January</option>
                      <option value="02" <?php if($monthEdu2 == "02"){ echo "selected";} ?>>February</option>
                      <option value="03" <?php if($monthEdu2 == "03"){ echo "selected";} ?>>March</option>
                      <option value="04" <?php if($monthEdu2 == "04"){ echo "selected";} ?>>April</option>
                      <option value="05" <?php if($monthEdu2 == "05"){ echo "selected";} ?>>May</option>
                      <option value="06" <?php if($monthEdu2 == "06"){ echo "selected";} ?>>June</option>
                      <option value="07" <?php if($monthEdu2 == "07"){ echo "selected";} ?>>July</option>
                      <option value="08" <?php if($monthEdu2 == "08"){ echo "selected";} ?>>August</option>
                      <option value="09" <?php if($monthEdu2 == "09"){ echo "selected";} ?>>September</option>
                      <option value="10" <?php if($monthEdu2 == "10"){ echo "selected";} ?>>October</option>
                      <option value="11" <?php if($monthEdu2 == "11"){ echo "selected";} ?>>November</option>
                      <option value="12" <?php if($monthEdu2 == "12"){ echo "selected";} ?>>December</option>
                 </select>
                 
                  <select id="year2" class="exp-duration" name="end_year">
                      <option value="">Year</option>
                      <option value="2010" <?php if($yearEdu2 == "2010"){ echo "selected";} ?>>2010</option>
                      <option value="2011" <?php if($yearEdu2 == "2011"){ echo "selected";} ?>>2011</option>
                      <option value="2012" <?php if($yearEdu2 == "2012"){ echo "selected";} ?>>2012</option>
                      <option value="2013" <?php if($yearEdu2 == "2013"){ echo "selected";} ?>>2013</option>
                      <option value="2014" <?php if($yearEdu2 == "2014"){ echo "selected";} ?>>2014</option>
                      <option value="2015" <?php if($yearEdu2 == "2015"){ echo "selected";} ?>>2015</option>
                 </select>

              </div> 

                   
                   
                    <br>
                    <label class="school-label">School&nbsp;or&nbsp;institution</label><br>
                    <input id="edu-position" class="school-or-institution"  type="text" name="school" id="" value="<?php echo $education['fschool']; ?>" required>
                    <br>
                    <input type="hidden" name="frecno" value="<?php echo $education['frecno']; ?>">
                    <input type="hidden" id="applicant_id" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                    <input type="hidden" id="user_name" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                    <br>
                    
                    <label class="degree-label">
                    Course of Study</label><br>
                    <input class="degree-certificate"  type="text" name="course" value="<?php echo $education['fcourse']; ?>" required>
                    <br><br>
                    <label class="degree-label">
                    Degree&nbsp;or&nbsp;Certificate</label><br>
                    <input class="degree-certificate"  type="text" name="class_of_degree" id="edu-company-name" value="<?php echo $education['fclass_of_degree']; ?>" required>
                    <br>
                    <button class="certificate-button">Add Certificate</button>
                   
                   <br>
            
                       
                    <label class="skills-and-topics-label">Skills&nbsp;and&nbsp;Topics&nbsp;Learned</label>
                   
                   <br>
                   
                

                   <?php $skills_array = explode(",", $education['fskills_learned']); ?>
                   <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""><?php if(!empty($skills_array[0])){echo $skills_array[0];} ?></textarea><br class="br-area" required>
                   <textarea id="edu-text-area" name="skills[]" class="skills-topics-text-area" placeholder=""><?php if(!empty($skills_array[1])){echo $skills_array[1];} ?></textarea><br class="br-area">
                   <textarea  name="skills[]" class="skills-topics-text-area" placeholder=""><?php if(!empty($skills_array[2])){echo $skills_array[2];} ?></textarea><br class="br-area">
                   <textarea  name="skills[]" class="skills-topics-text-area" placeholder=""><?php if(!empty($skills_array[3])){echo $skills_array[3];} ?></textarea><br class="br-area">
                   <textarea  name="skills[]" class="skills-topics-text-area" placeholder=""><?php if(!empty($skills_array[4])){echo $skills_array[4];} ?></textarea><br class="br-area">
                   <textarea  name="skills[]" class="skills-topics-text-area" placeholder=""><?php if(!empty($skills_array[5])){echo $skills_array[5];} ?></textarea><br class="br-area">
                   <textarea  name="skills[]" class="skills-topics-text-area" placeholder=""><?php if(!empty($skills_array[6])){echo $skills_array[6];} ?></textarea><br class="br-area">
                   <textarea  name="skills[]" class="skills-topics-text-area" placeholder=""><?php if(!empty($skills_array[7])){echo $skills_array[7];} ?></textarea><br class="br-area">

                   
                   <br>
                       
                   <div class="edu-button-container">
                     
                        <div class="edu-button-right">
                            
                   <button onclick="CancelEducation()" class="ed-cancel-button" action="">Cancel</button>
                            
                   <button class="ed-finish-button w3-right" type="submit" >Update</button>
                            
                            </div>
                       
                       </div>
                   
                </form> 
                
                </div> 
                    
            </div> 


           </div>
 
        </div>

        <?php } } ?>
            
       
          
            
            
        </section>
        
        <!--SKILLS-->
        
     <section id="user-skills" class="user-skills">
    
          <h1 class="skills-header" align="center">Skills</h1>      
                
            
            <div class="skills-container w3-white" style="border: 4px solid #ADD8E6;">

                <div style="margin: 0px;" id="add-skill-button">
    
                    <h2 class="professional-label other-label" style="font-weight: 400;">Professional Skills <button onclick="AddProfSkill()" class="add-skill-button w3-right" >Add skill +</button >
                    </h2>  
                    <div id="form-div-prof" class="form-div">
                        
                    <form class="add-skill-form" id="add-skill-form">
                    
                    <input class="skills-input" type="text" name="pro_skill" id="skill-input-prof" required>&nbsp;
                    <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                    <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                        
                        <button type="submit" class="finish-add-skill">Save</button>
                        
                        </form>
                    </div>     
                    <hr>
            </div>
            <div id="proskills-div">
            <?php if(empty($pro_skills)) { ?>
                
                   <div class="">
                       <p style="text-align:center">Seems you have no professional skills yet. Add a new record to get started.</p>
                   </div>
                             
               <?php } else { foreach($pro_skills as $skill) {?>

        
                    <div class="skill-padding skill-padding-div" >
                    
                        <div class="skill proskill">
                            <?php echo $skill['fskill']; ?>&nbsp;<button class="delete-skill-button cursor" data-skill_id="<?php echo $skill['frecno']; ?>">x</button></div>
                    </div>
            
                <?php }  } ?>
    
            </div>
            
            </div> 
                <br><br><br><br>
            
                
            
            
            <div class="skills-container w3-white" style="border: 4px solid #ADD8E6;">
                
            <h2 class="other-label">Other Skills <button onclick="AddOtherSkill()" class="add-skill-button w3-right">Add skill +</button ></h2>  
            <div id="form-div-other" class="form-div">
                
                <form class="add-skill-form" id="add-other-skill-form">
                <input class="skills-input" type="text" name="other_skill" id="skill-input-other" required>&nbsp;
                <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                    
                    <button onclick="CancelAddOtherSkill()" class="cancel-add-skill">Cancel</button>
                    
                    <button  class="finish-add-skill" type="submit">Save</button>
                    
                    </form>
                </div>  
        <hr>


        <?php if(empty($other_skills)) { ?>
                   
                   <div class="">
                       <p style="text-align:center">Seems you have no professional skills yet. Add a new record to get started.</p>
                   </div>
                             
               <?php } else { foreach($other_skills as $skill) {?>

            <div class="skill-padding "><div class="skill"><?php echo $skill['fskill']; ?>&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <?php }  } ?>   

            </div>
                
                </section>
        
        <!--PORTFOLIO-->
        
      <section id="user-portfolio" class="user-portfolio">
        
            <h1 align="center" class="portfolio-header">Portfolio</h1> 
            <!-- <form id="image_upload_form">
                <br> 
               Add Image
                <input id='fileid' name="fileid" type='file' />
                <input type="hidden" id="applicant_id" name="applicant_id" value="<?php //echo $applicant_details['fapplicant_id']; ?>">
                <input type="hidden" id="user_name" name="user_name" value="<?php //echo $applicant_details['fuser_name']; ?>">
                <button type="submit" id="upload_btn">Upload</button>
            </form> -->

       
          
         

                <!-- <a class="image-padding" href="Images/Sample%20Image.jpg">
                    <img class="image" src="<?php //echo site_url('public/portfoliopics/'.$portfolio['fimage']);?>">
                </a> -->



                <div class="porfolio-container-images" align="center">
            
                <h2 class="images-label">Images</h2>
                
                <br><br><br><br><br>

                <button onclick="" class="delete-image-button">
                    <img class="image" onclick='openfile("#file-input-images")' src="<?php echo site_url();?>public/assets/Images/add%20image.png">
                    <input type="file" id="file-input-images" name="fileUp" style="display:none;" accept="image/*">
                </button>
            
                <?php foreach ($applicant_portfolios as $portfolio) {?>
                
                    <a class="image-padding" href="<?php echo site_url();?>public/assets/Images/Sample%20Image.jpg">
                        <img class="image" src="<?php echo site_url('public/portfoliopics/'.$portfolio['fimage']);?>">
                    </a>
                   
                <?php } ?>

                
        
            </div>


            </div>
            
            
            <div class="porfolio-container-documents" align="center">
            
            <h2 class="images-label">Documents</h2>
            
            <br><br><br><br><br>

            <button onclick="" class="delete-image-button">
                <img class="image" onclick='openfile("#file-input-documents")' src="<?php echo base_url();?>/public/assets/Images/add%20document.png">
                <input type="file" id="file-input-documents" name="fileUp" style="display:none;">
            </button>

            <?php foreach ($applicant_documents as $document) {?>


                
           
                <!-- <a class="document-padding" href=""><img class="image" src="<?php //echo site_url('public/documentpics/'.$document['ffile_name']);?>"></a> -->

                <a class="document-padding" href="">
                    <!-- <img class="image" src="<?php //echo site_url('public/documentpics/'.$document['ffile_name']);?>"> -->
                    <i class="image fa fa-file-word-o" style="font-size:132px !important;"></i>
                </a>
            
            <?php } ?>
            
            
        
            </div>
          
        
            
            <div style="color: white">Footer Control</div>
        </section>
        
        <!--ONLINE LINKS-->
        
        <section id="user-links" class="user-skills">
    
          <h1 align="center" class="online-links-header">Online Links </h1>      

           


            <div class="skills-container" style="border: 4px solid #ADD8E6;">
            <button onclick="AddProfLink()" class="add-skill-button w3-right">Add Link +</button>

            <div id="form-div-prof-link" class="form-div">
                
                <form class="add-skill-form" id="add-links-form">
                    
                <input class="link-title" name="title" placeholder="Title" type="text" id="skill-input-prof-link">
                    
                <input class="link-url" name="weblink" type="url" id="skill-input-prof-link" placeholder="URL (e.g http://www.kokoruns.com/)"> 
                <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">  
                    
                    <br>
                    
                    <button onclick="CancelAddProfLink()" class="cancel-add-skill">Cancel</button>
                    
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



           
            
                
        </section>


        <section id="search-box-div" class="user-experience" style="display:none">
    
            <h1 class="skills-header" align="center">Search</h1>      
          


        <div id="" class="experience-post-container">
            
            <div class="exp-cont w3-white">

            <div class="experience_box"> 
                
               <form class="">

        
                 <div class="w3-row">
                    <div class="w3-col s10">
                        <input type="search" class="w3-input w3-border"  placeholder="Search" name="" id="">
                    </div>
                    <div class="w3-col s2">
                        <button class="w3-button w3-black ">Search</button>
                    </div>
                </div>
                    <br>
                   
                </form> 

                </div>

                </div> 

                    
            </div> 
            
        </section>

        <section id="team-box-div" class="user-experience" style="display:none">
        <h1 class="skills-header w3-center">
            Teams
              
            </h1>


        <div id="" class="experience-post-container">
            
            <div class="exp-cont w3-white">

            <div class="experience_box"> 

            <h3>Create A Team</h3>
                
            <form class="" id="create-team">


                <div class="w3-row">

                    <div class="w3-col s12">
                        <label for="">Team Name *</label>
                        <input type="text" class="w3-input w3-border" name="team_name" id="" required>
                        <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                    </div>

                </div>
                <br> 

                <div class="w3-row">
                    <label for="">Team Description *</label> <br>
                    <textarea class="w3-input w3-border" name="team_description" id="" cols="30" rows="5" required></textarea>
                </div>
                <br>
                <div class="w3-row">

                    <div class="w3-col s12">
                        <label for="">Set Team Privacy *</label> <br>
                        <input type="radio" class="w3-radio" name="team_privacy" value="0" required> Public <br>
                        <input type="radio" class="w3-radio" name="team_privacy" value="1"> Private
                    </div>
                    
                    
                </div>
                <br>
                <div class="w3-row">
                    <div class="w3-col s12 w3-text-right">
                                    
                        <button type="submit" class="w3-button w3-black w3-right">Create</button>
                            
                    </div>
                </div>
                    <br>
                
                </form> 

                </div>

                </div> 

                    
            </div> 


            <div id="" class="experience-post-container">
            
            <div class="exp-cont w3-white">

            <div class="experience_box"> 
                
            <form class="">

            <h3>Teams I Admin</h3>

                <table class="w3-table w3-bordered w3-border">
                    <tr>
                        <th>Team Name</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach($my_teams as $team){ ?>
                        <tr>
                            <td><?php echo $team['fteam_name']; ?></td>
                            <td data-team_id="<?php echo $team['fteam_id']; ?>" onclick="OpenTeamChat()">View</td>
                        </tr>
                    <?php } ?>
                </table>
                
                </form> 

                <div id="team_chat" class="experience-post-container">
            
                    <div class="exp-cont w3-white">

                    <div class="experience_box"> 

                    <h4>Team Chats for </h4>
                        
                    <form class="">


                        <div class="w3-row">
                            <div class="w3-col s4">
                            <form id="add-team-member">
                                <div class="w3-row w3-margin">
                                    <div class="w3-col s10">
                                        <input type="search" name="" class="w3-input w3-border search_applicants">
                                        <div class="suggestion-box w3-light-grey">
                                        
                                        </div>
                                    </div>
                                    <div class="w3-col s2">
                                        <button class="w3-button w3-black">Add</button> 
                                    </div>
                                </div>
                            </form>
                            <h4>Team Members</h4>
                            <ul>
                                <li>Adam</li>
                                <li>Jane</li>
                                <li>Mary</li>
                            </ul>
                            </div>
                            <div class="w3-col s8">
                            <textarea name="" class="w3-input w3-border" id="" cols="30" rows="15"></textarea>
                                <button class="w3-button w3-black ">SEND</button>
                            </div>
                        </div>
                        <br>
                        
                        
                        </form> 

                        </div>

                </div> 

                    
            </div> 

<hr>

                <h3>Teams I Belong To</h3>

                <table class="w3-table w3-bordered w3-border">
                    <tr>
                        <th>Team Name</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>NeedGroup</td>
                        <td>View</td>
                    </tr>
                </table>


               
                
              

                </div>

                <br>

                </div> 

                <br>
                <br>
                    
            </div> 

            

            <div id="" class="experience-post-container">
            
            <div class="exp-cont w3-white">

            <div class="experience_box"> 

            <h1>Discover Teams</h1>
                
            <form class="">


                <div class="w3-row">
                    <div class="w3-col s10">
                        <input type="search" class="w3-input w3-border search_teams" placeholder="Find Teams" name="" id="">
                        <div class="suggestion-box w3-light-grey" >
                                        
                        </div>
                    </div>
                    <div class="w3-col s2">
                        <button class="w3-button w3-black ">Ask To Join</button>
                    </div>
                    
                </div>
                <br>
                
                
                </form> 

                </div>

                </div> 

                    
            </div> 
            
        </section>



        
        <section id="messages-box-div" class="user-experience" style="display:none">
    
            <h1 class="skills-header" align="center">Messages</h1>      
          


        <div id="" class="experience-post-container">
            
            <div class="exp-cont w3-white">

            <div class="experience_box"> 

            <h1>Create New Message</h1>
                
               <form class="">

        
                   <div class="w3-row">

                        <div class="w3-col s12">
                        <label for="">To</label>
                            <input type="text" class="w3-input w3-border search_applicants"  name="" id="">
                            <div class="suggestion-box w3-light-grey">
                            
                            </div>

                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col s12">
                        <label for="">Topic</label>
                            <input type="text" class="w3-input w3-border" name="" id="">
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col s12">
                            <textarea name="" class="w3-input w3-border" id="" cols="30" rows="5"></textarea>
                        </div>
                    </div>
                    <br>
                    <div class="w3-row">
                        <div class="w3-col s2">
                                        
                            <button class="w3-button w3-black">Send</button>
                                
                        </div>
                       
                    </div>
                    <br>
                   
                </form> 

                </div>

                </div> 

                    
            </div> 


            
            <div id="" class="experience-post-container">
            
            <div class="exp-cont w3-white">

                <div class="experience_box"> 
                    
                <table class="w3-table w3-bordered">
                    <tr>
                        <th>Subject</th>
                        <th>Date</th>
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Life</td>
                        <td>Sep 2</td>
                        <td>View Delete</td>
                    </tr>
                </table>

                </div>

                </div> 

                    
            </div> 


 
        </section>




        <section id="jobdash-box-div" class="user-experience" style="display:none">
    
                <h1 class="skills-header" align="center">Job dash</h1>      
            
                
                <div id="" class="experience-post-container">
                
                <div class="exp-cont w3-white">

                    <div class="experience_box"> 
                        
                            <table class="w3-table w3-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 25%">Company</th>
                                    <th>Job Title</th>
                                    <th>Status</th>
                                    <th>Date Submitted</th>
                                    <th>Message</th>
                                </tr>
                                </thead>
                                <tbody>

                               <?php foreach($jobs as $job){ ?>

                                <tr>
                                    <td> <img src="" alt=""></td>
                                    <td>ggg</td>
                                    <td>Not Selected</td>
                                    <td>Sep 12, 202</td>
                                    <td><i class="fa fa-comments job_messages cursor" data-job_id="<?php echo $job['fjob_id']; ?>"></td>
                                </tr>

                               <?php } ?>

                                </tbody>
                            </table>

                    </div>

                    </div> 

                        
                </div> 


                
            <div id="job_messages-div" class="experience-post-container" style="display:none;">
                
                <div class="exp-cont w3-white">

                <div class="experience_box"> 

                <h4>Replies</h4>
                    
                <form class="">

                        <div class="w3-row">
                            <div class="w3-col s12">
                                    <div id="chat-area"></div>
                            </div>
                        </div>
                        <br>
                        <div class="w3-row">
                            <div class="w3-col s11">
                            <textarea name="" id="" cols="30" rows="1" class="w3-input w3-border"></textarea>
                            </div>
                            <div class="w3-col s1">
                                           
                                    <button class="w3-button w3-black">Send</button>
    
                            </div>
                        
                        </div>
                        <br>
                    
                    </form> 

                    </div>

                    </div> 

                        
                </div>



            </section>



            
         <section id="event-box-div" class="user-experience" style="display:none">
    
                <h1 class="skills-header" align="center">Events</h1>      



            <div id="" class="experience-post-container">
                
                <div class="exp-cont w3-white">

                <div class="experience_box"> 

                <h1>Create New Event</h1>
                    
                <form class="" id="add-event-form">
                <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">

                    <div class="w3-row">

                
                        <div class="w3-row">
                            <div class="w3-col s6">
                            <label for="">From</label>
                                <input type="datetime-local" class="w3-input w3-border" name="from" id="from" required>
                            </div>
                            <div class="w3-col s6">
                            <label for="">To</label>
                                <input type="datetime-local" class="w3-input w3-border" name="to" id="to" required>
                            </div>
                        </div>

                        <br>
                        <div class="w3-row">
                            <div class="w3-col s12">
                            <label for="">Title</label>
                                <input type="text" class="w3-input w3-border" name="title" id="title" required>
                            </div>
                        </div>
                        <br>
                        <div class="w3-row">
                            <div class="w3-col s12">
                                <label for="">Description</label>
                                <textarea class="w3-input w3-border" name="description" id="description" cols="30" rows="5" required></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="w3-row">
                            <div class="w3-col s10">
                                <label for="">Select Invitees</label>
                                <input type="search" name="" id="" class="w3-input w3-border search_applicants">
                                <div class="suggestion-box w3-light-grey"></div>
                                <br>
                            </div>
                            <div class="w3-col s2">
                               <button>Add</button>   
                            </div>
                        </div> 
                              <div>

                                    <?php $i = 1; foreach($applicants as $applicant){ ?>
                                        <input name="invitees[]" value="<?php echo $applicant['ffirst_name'] ;?> <?php echo $applicant['flast_name'] ;?>" readonly>
                                    <?php $i++; } ?>
                                
                                </div>
                        </div>
                        </div>
                        <br>
                        <div class="w3-row">
                            <div class="w3-col s2">
                                            
                                <button type="submit" class="w3-button w3-black">Create</button>
                                    
                            </div>
                        
                        </div>
                        <br>
                    
                    </form> 

                    </div>

                    </div> 

                        
                </div> 


                
                <div id="" class="experience-post-container">
                
                <div class="exp-cont w3-white">

                <h2>My Events</h2>

                    <div class="experience_box"> 
                        
                            <table class="w3-table w3-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 25%">Event Title</th>
                                    <th>Event Start</th>
                                    <th>Event End</th>
                                    <th>Event Description</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($my_events as $event){ ?>
                                    <tr>
                                        <td> <a href=""> <?php echo $event['ftitle']; ?> </a></td>
                                        <td><?php echo $event['ffrom']; ?></td>
                                        <td><?php echo $event['fto']; ?></td>
                                        <td><?php echo $event['fdescription']; ?></td>
                                        <td>d</td>
                                    </tr>
                                <?php } ?>
                                
                                </tbody>
                            </table>

                    </div>

                    </div> 

                        
                </div> 



                <div id="" class="experience-post-container">
                
                <div class="exp-cont w3-white">

                <h3>My Invites</h3>

                    <div class="experience_box"> 
                        
                            <table class="w3-table w3-bordered">
                                <thead>
                                <tr>
                                <th style="width: 25%">Event Title</th>
                                    <th>Event Start</th>
                                    <th>Event End</th>
                                    <th>Event Description</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php foreach($my_event_invites as $event){ ?>
                                    <tr>
                                        <td> <a href=""> <?php echo $event['ftitle']; ?> </a></td>
                                        <td><?php echo $event['ffrom']; ?></td>
                                        <td><?php echo $event['fto']; ?></td>
                                        <td><?php echo $event['fdescription']; ?></td>
                                        <td>d</td>
                                    </tr>
                                <?php } ?>
                                
                                </tbody>
                            </table>

                    </div>

                    </div> 




            </section>




<section id="allaboutyou-box-div" class="user-experience" style="display:none">
    
    <h1 class="skills-header" align="center">All About You</h1>      



<div id="" class="experience-post-container">
    
    <div class="exp-cont w3-white">

    <div class="experience_box"> 

    <h1>KOKORUNS free </h1>
        
  

        </div>

        </div> 

            
    </div> 


    
    <div id="" class="experience-post-container">
    
    <div class="exp-cont w3-white">

        <div class="experience_box"> 
            
        KOKORUNS app

        </div>

        </div> 

            
    </div> 



</section>



    <section id="jobboard-box-div" class="user-experience" style="display:none">
        
        <h1 class="skills-header" align="center">Job Boards</h1>      



    <div id="" class="experience-post-container">
        
       
        <div id="" class="experience-post-container">
        
        <div class="exp-cont w3-white">

            <div class="experience_box"> 
                
                    <table class="w3-table w3-bordered">
                        <thead>
                        <tr>
                            <th style="width: 25%">Company</th>
                            <th>Job Title</th>
                            <th>Status</th>
                            <th>Date Submitted</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td> <a href=""> John Doe </a></td>
                            <td></td>
                            <td>Not Selected</td>
                            <td>Sep 12, 2020</td>
                        </tr>
                        <tr>
                            <td><a href="">Mary King</a></td>
                            <td><a href=""></a></td>
                            <td>In-Progress</td>
                            <td>Aug 8, 2020</td>
                        </tr>
                        <tr>
                            <td><a href="">Dorcas Smith</a></td>
                            <td><a href="">Sales</i></a></td>
                            <td>Closed</td>
                            <td>July 27, 2020</td>
                        </tr>
                        </tbody>
                    </table>

            </div>

            </div> 

                
        </div> 



    </section>




    <section id="recommendations-box-div" class="user-experience" style="display:none">
    
    <h1 class="skills-header" align="center">Recommendations</h1>      



<div id="" class="experience-post-container">
    
    <div class="exp-cont w3-white">

    <div class="experience_box"> 

    <h2>Request Recommendation</h2>
        
    <form class="">


        <div class="w3-row">

            <div class="w3-row">
                <div class="w3-col s12">
                <label for="">To</label>
                    <input type="text" class="w3-input w3-border" name="" id="">
                </div>
            </div>
            
            <br>
            <div class="w3-row">
                <div class="w3-col s12">
                <label for="">Topic</label>
                    <input type="text" class="w3-input w3-border" name="" id="" value="Recommendation Request" disabled>
                </div>
            </div>
            <br>
            <div class="w3-row">
                <div class="w3-col s12">
                <label for="">Message</label>
                    <textarea name="" class="w3-input w3-border" id="" cols="30" rows="5" disabled> I wish to have your recommendation</textarea>
                </div>
            </div>
            <br>
            <div class="w3-row">
                <div class="w3-col s2">
                                
                    <button class="w3-button w3-black">Send</button>
                        
                </div>
            
            </div>
            <br>
        
        </form> 

        </div>

        </div> 

            
    </div> 


    
    <div id="" class="experience-post-container">
    
    <div class="exp-cont w3-white">

        <div class="experience_box"> 

        <h2>Recommendations</h2>
            
                <table class="w3-table w3-bordered">
                    <thead>
                    <tr>
                        <th style="width: 25%">Recommender</th>
                        <th>Job Designation</th>
                        
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td> <a href=""> John Doe </a></td>
                        <td></td>
                        
                        <td><button>Accept</button> <button>Reject</button></td>
                    </tr>
                    <tr>
                        <td><a href="">Mary King</a></td>
                        <td><a href=""></a></td>
                        
                        <td><button>Accept</button> <button>Reject</button></td>
                    </tr>
                    <tr>
                        <td><a href="">Dorcas Smith</a></td>
                        <td><a href="">Sales</i></a></td>
                        
                        <td><button>Accept</button> <button>Reject</button></td>
                    </tr>
                    </tbody>
                </table>

        </div>

        </div> 

            
    </div> 


    <div id="" class="experience-post-container">
            
            <div class="exp-cont w3-white">

            <div class="experience_box"> 


        <h2>Search and Recommend</h2>
                
               <form class="">

        
                 <div class="w3-row">
                    <div class="w3-col s10">
                        <input type="search" class="w3-input w3-border"  placeholder="Search" name="" id="">
                    </div>
                    <div class="w3-col s2">
                        <button class="w3-button w3-black ">Recommend</button>
                    </div>
                </div>
                    <br>
                   
                </form> 

                </div>

                </div> 

                    
            </div> 



</section>



<section id="settings-box-div" class="user-experience" style="display:none">
    
    <h1 class="skills-header" align="center">Settings</h1>      

    

<div id="" class="experience-post-container">
    
    <div class="exp-cont w3-white">

    <div class="experience_box"> 

    <h1>Verify your account</h1>
        
    <form class="">


        <div class="w3-row">
        
        NIN and Bank account details
    
           <input type="file" name="" id="">
            <div class="w3-row">
                <div class="w3-col s2">
                                
                    <button class="w3-button w3-black">Send</button>
                        
                </div>
            
            </div>
            <br>
        
        </form> 

        </div>

        </div> 

            
    </div> 

    </div> 



    <div id="" class="experience-post-container">
    
    <div class="exp-cont w3-white">

    <div class="experience_box"> 

    <h1>Subscribe and Upgrade</h1>
        
    


       

        </div> 

            
    </div> 

    </div> 


    
    <div id="" class="experience-post-container">
    
    <div class="exp-cont w3-white">

        <div class="experience_box"> 

        Your Languages <br>
            
              <input type="checkbox" name="" id=""> English
              <input type="checkbox" name="" id=""> Hausa
              <input type="checkbox" name="" id=""> Yoruba
              <input type="checkbox" name="" id=""> Igbo
              <input type="checkbox" name="" id=""> Pidgin English
              <input type="checkbox" name="" id=""> French
              <input type="checkbox" name="" id=""> Tiv
              <input type="checkbox" name="" id=""> Kanuri
              <input type="checkbox" name="" id=""> Fulfulde
              <input type="checkbox" name="" id=""> Efik-Ibibio
              <input type="checkbox" name="" id=""> Ijaw/Izon
              <input type="checkbox" name="" id=""> Urhobo
              <input type="checkbox" name="" id=""> Sign Language (English)
              <input type="checkbox" name="" id=""> Sign Language (Hausa)
              <input type="checkbox" name="" id=""> Edo
              <input type="checkbox" name="" id=""> Igala
              <input type="checkbox" name="" id=""> Nupe-Ebira
              <input type="checkbox" name="" id=""> Birom
              <input type="checkbox" name="" id=""> Idoma
              <input type="checkbox" name="" id=""> Itsekiri
              <input type="checkbox" name="" id=""> British English
              <input type="checkbox" name="" id=""> Spanish
              <input type="checkbox" name="" id=""> Mandarin

        </div>

        </div> 

            
    </div> 



</section>



    </body>
    
   <footer >
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


<script src="<?php echo base_url();?>/public/assets/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<!--USER PROFILE CATEGORIES INTERACTION SCRIPT-->
<script>
        
        function ShowEducationForm() {
           document.getElementById("edu-update-form-div").style.display="block";
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
           document.getElementById("exp-update-form-div") .style.display="block";
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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

        document.getElementById("recommendations-box-div").style.display="none";

        document.getElementById("settings-box-div").style.display="none";

        document.getElementById("events-box-div").style.display="none";

        
        
    } 



    function JobBoardFunction() {
        
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

        document.getElementById("jobboard-box-div").style.display="block";

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

        document.getElementById("jobboard-box-div").style.display="none";

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

        document.getElementById("jobboard-box-div").style.display="none";

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
        //alert("edit-form-container_"+clicked_id);
        }



        function EditEducationForm(clicked_id) {

        var x = document.getElementById("edu-update-form-div_"+clicked_id);
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
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


    $("#add-experience-form").submit(function(e){
    
        e.preventDefault();

    var querystring = $(this).serialize();
    
    //alert(querystring);

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
                    $("#id01").hide();
                    //$("#add-experience-form").reset();
                    toastr.success('<p>Job experience added successfully</p>', {timeOut: 1000});
                    $(".experience-post-container").load(location.href + " .experience-post-container");
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
                   
                   // $("#add-experience-form").reset();
                    toastr.success('<p>Job experience updated successfully</p>', {timeOut: 1000});
                    $(".exp-update-form-div").hide();
                    $(".update-experience-form").reset();
                    // $(".experience_box").load(location.href + " .experience_box");
                    $(".experience-post-container").load(location.href + " .experience-post-container");
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

    $('.exp-delete').click(function (e) { 
            e.preventDefault();

            var exp_id = $(this).data('exp_id');
           
            alert(exp_id);

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
                        $(".experience-post-container").load(location.href + " .experience-post-container");
                        //$(".porfolio-container-images").load(location.href + " .porfolio-container-images");
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
                //alert(response.success);
                //CancelExperience();
                 $("#id02").hide();
                $("#add_education-form").reset();
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
                    toastr.success('<p>Education updated successfully</p>', {timeOut: 1000});
                    $(".edu-update-form-div").hide();
                    $(".update-education-form").reset();
                    //$(".experience_box").load(location.href + " .experience_box");
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

    $('.edu-delete').click(function (e) { 
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
                        //alert(response.success);
                        //$(".experience-post-container").load(location.href + " .experience-post-container");
                        //$(".porfolio-container-images").load(location.href + " .porfolio-container-images");
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
                //CancelExperience();
                //  $("#id02").hide();
                // $("#add_education-form").reset();
                $("#add-skill-form").hide();
                $("#pro-skill-padding").load(location.href + " #pro-skill-padding");
                $("#add-skill-button").load(location.href + " #add-skill-button");
                toastr.success('<p>Pro Skill added successfully</p>', {timeOut: 1000});
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

$(".delete-skill-button").click(function(e){
    
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
                        //alert(response.success);
                        $("#proskills-div").load(location.href + " #proskills-div");
                        //$("#add-skill-button").load(location.href + " #add-skill-button");
                        $(".proskill").load(location.href + " .proskill");
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
             toastr.success('<p>Other Skill added successfully</p>', {timeOut: 1000});
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
                        //alert(response.success);
                        $("#image_upload_form").trigger("reset");
                        $(".porfolio-container-imagesc").load(location.href + " .porfolio-container-imagesc"); 
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

        $('.delete-image-button2').click(function (e) { 
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
                    alert(response.success);
                    if(response.success == true)
                    {
                        toastr.success('<p>Portfolio Image deleted successfully</p>', {timeOut: 1000});
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
                //  $("#id02").hide();
                // $("#add_education-form").reset();
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
                        $("#image_upload_form").trigger("reset");
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

$("#create-team").submit(function(e){
    
    e.preventDefault();

var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>applicant/createteamaction',
        type: "POST",
        data: querystring,
        dataType: "json",
        success: function(response) {
            //code to execute
            alert(response);
            // if(response.success == true)
            // {
            //  alert(response);
            //     //CancelExperience();
            //     //  $("#id02").hide();
            //     // $("#add_education-form").reset();
            //  //toastr.success('<p>Team created successfully</p>', {timeOut: 1000});
            // }
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




</html>
