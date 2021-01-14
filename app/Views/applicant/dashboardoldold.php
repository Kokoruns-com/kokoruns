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

        width: 300px;
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

            <div class="w3-row">
                <div class="w3-col s6">
                  
                    <i class="inbox fa fa-envelope w3-text-white" style="font-size:25px !important; padding:0px;"></i>
                       
                </div>
                <div class="w3-col s6">
                    <div class="dropdown w3-right">
                    <i class="fa fa-bars w3-text-white cursor" style="font-size: 26px !important;"></i>&nbsp;&nbsp;
                        <div class="dropdown-content">
                            <a href="<?php echo site_url();?>applicant/search">Search</a>
                            <a href="<?php echo site_url();?>applicant/teams">Teams</a>
                            <a href="<?php echo site_url();?>applicant/messages" >Messages</a>
                            <a href="<?php echo site_url();?>applicant/jobdash" >JobDash</a>
                            <a href="<?php echo site_url();?>applicant/events">Events</a>
                            <a href="<?php echo site_url();?>applicant/allaboutyou">All About You</a>
                            <a href="<?php echo site_url();?>applicant/jobboard">Jobs Board</a>
                            <a href="<?php echo site_url();?>applicant/recommendations">Recommendations</a>
                            <a href="<?php echo site_url();?>applicant/settings">Settings</a>
                            <a href="<?php echo site_url();?>applicant/logout">Logout</a>
                           
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
            
        <div align="center" class="user-profession">Accountant | Physician | Chemist | Engineer | Cook</div>
            
        <div id="view-bio-div" onclick="ViewBio()" align="center" class="view-bio-div">
        <button align="center" class="view-bio-button cursor">View Bio</button></div>
                
        <div id="hide-bio-div" onclick="HideBio()" align="center" class="hide-bio-div">
             <button align="center" class="hide-bio-button cursor">Hide Bio</button></div>            
         
        <!--display-inline-block;-->    
        <div id="user-bio" align="center" class="user-bio"> 

                
            <div class="bio-info">
            <label class="bio-info-label">Recommendations </label><br>
            <a href="a">47</a><br><br>
            <label class="bio-info-label">Employment Choice</label><br>
            Volunteer<br><br>    
            <label class="bio-info-label">Phone Number</label>
            <input type="number" class="w3-input profile_setup w3-border"  name="" id="phone" value="<?php echo $applicant_details['fphone']; ?>"><br>
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
            <!-- &#8358; 200,000<br> -->
            <input class="w3-input profile_setup w3-border" type="number" name="minimum_salary" id="minimum_salary" value="<?php echo $applicant_details['fminimum_salary']; ?>"><br>
            <label class="bio-info-label">Location</label><br>
             <?php echo $applicant_details['flga']; ?>, <?php echo $applicant_details['fstate']; ?> State<br>
            <button onclick="document.getElementById('id03').style.display='block'">Change</button>
            <br><br>
            <label class="bio-info-label">Email</label><br>    
            <input type="email" class="w3-input profile_setup w3-border" name="" id="email" value="<?php echo $applicant_details['femail']; ?>"> <br>     


            <!-- The Modal -->
            <div id="id03" class="w3-modal" style="width:100%">
            <div class="w3-modal-content w3-card-4">
            <header class="w3-container w3-padding-large">
                <span onclick="document.getElementById('id04').style.display='none'"
                class="w3-button w3-display-topright">&times;</span>
                <h2>Change Location</h2>
            </header>
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
            
            <br>
            
            </div>
    
                  
        </div>
            
        </section> 
        
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
                            
                            <select id="year2" class="exp-duration form-control" style="border-radius:5px; width:100%;" name="start_year" required>
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
                    <input id="company-or-business" class="company-or-business"  type="text" name="ex-company-name"  placeholder="" required>
                    
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
                                    
                                    <select id="year2" class="exp-duration form-control" style="border-radius:5px; width:100%;" name="start_year" required>
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
                                <label class="school-label">School&nbsp;or&nbsp;institution *</label><br>
                                <input id="edu-position" class="school-or-institution"  type="" name="school"  placeholder="" required>
                                <input type="hidden" id="applicant_id" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                                <input type="hidden" id="user_name" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                                <br><br>
                                
                                <label class="degree-label">
                                Course of Study *</label><br>
                                <input class="degree-certificate"  type="" name="course"  placeholder="" required>

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




            <?php if(empty($applicant_educations)) { ?>
                   
                   <div class="">
                       <p style="text-align:center">Seems you have no education history yet. Add a new record to get started.</p>
                   </div>
                             
               <?php } else { foreach($applicant_educations as $education) {?>



            <div class="education-post-container" id="education-post-container">
                
                 
                
            </div>




        <?php } } ?>


            
            <br>
         
            
            <br><br>
            
            
        </section>
        
        <!--SKILLS-->
        
     <section id="user-skills" class="user-skills">
    
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
                
                </section>



        
        <!--PORTFOLIO-->
        
      <section id="user-portfolio" class="user-portfolio">
        
            <h1 align="center" class="portfolio-header">Portfolio</h1> 
                

        <div class="porfolio-container-images" align="center">
            
            <h2 class="images-label">Images</h2>
            
            <br><br><br>
           
               
            
                <div class="row">
                    <div class="col-sm-4 pr-5 mb-5">
                        <button onclick="" class="delete-image-button">
                            <form id="image_upload_form">
                                <img class="image" onclick='openfile("#file-input-images")' src="<?php echo site_url();?>public/assets/Images/User%20Profile/add%20image.png">
                                <input type="file" id="file-input-images" name="fileUp" style="display:none;" accept="image/*">
                            </form>
                        </button>
                    </div>
                    <?php foreach ($applicant_portfolios as $portfolio) {?>
                    
                        <div class="col-sm-4 mb-5">
                            <img class="image" src="<?php echo site_url('public/portfoliopics/'.$portfolio['fimage']);?>" width="100%">
                            <span data-img-id="<?php echo $portfolio['frecno'];?>" class="fa fa-times text-danger cursor" style="position:relative;top:-90px;right:35px;"></span>
                        </div>
                       

                    <?php } ?>

                </div>
        
            </div>
            
            
            <div class="porfolio-container-documents" align="center">
            
            <h2 class="images-label">Documents</h2>
            
            <br><br><br><br><br>

            <div class="row">
                <div class="col-sm-4 pr-5">
           
                    <button onclick="" class="delete-image-button">
                        <img class="image" onclick='openfile("#file-input-documents")' src="<?php echo base_url();?>/public/assets/Images/User%20Profile/add%20document.png">
                        <input type="file" id="file-input-documents" name="fileUp" style="display:none;">
                    </button>
                </div>

            <?php foreach ($applicant_documents as $document) {?>

                <div class="col-sm-4 mb-5">
                    <!-- <img class="image" src="<?php //echo site_url('public/documentpics/'.$document['ffile_name']);?>"> -->
                    <i class="image fa fa-file-word-o" style="font-size:132px !important;"></i>
                </div>
            
            <?php } ?>
            
        
            </div>
            
        </section>



        
        <!--ONLINE LINKS-->
        
        <section id="user-links" class="user-skills weblinks">
    
          <h1 align="center" class="online-links-header">Online Links</h1>  
            
            <br>
                
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
           if (div2.style.display == 'none') {
            div2.style.display = 'block'
            } else {
                div2.style.display = 'none'
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
                if (div1.style.display == 'none') {
                div1.style.display = 'block'
                } else {
                    div1.style.display = 'none'
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

            //alert(x.style.display);
        
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
