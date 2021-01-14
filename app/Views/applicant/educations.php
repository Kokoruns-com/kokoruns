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
         <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css"/>
        <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/themes/bootstrap.min.css"/>
    
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
        
        <?php include 'banner.php'; ?>

        <div align="center" class="sections">
                
        <a href="<?php echo site_url();?>applicant/experiences"><button id="exp-b" class="sections-div cursor">Experience</button></a>
                
                &nbsp;    
                <a href="<?php echo site_url();?>applicant/educations"><button id="edu-b" class="sections-div cursor" style="border-bottom: solid 4px #0991ff;">Education</button></a>
             
             
              &nbsp;    
              <a href="<?php echo site_url();?>applicant/portfolios"><button id="port-b"  class="sections-div cursor">Portfolio</button></a>
              
                
            </div>
        
         <br>

  
    
        <!--EDUCATION-->
        
        <section id="user-education" class="user-education">
            
            
            <h2 align="center" class="user-education-header text-dark">Education <small> <button onclick="ShowEducationForm();" class="exp-update-button cursor" style="font-size: 18px;">Add New</button></small></h2>



        
                <div id="edu-update-form-div" class="edu-update-form-div">

                   
                        
                        <div class="edu-update-form-container">

                       
                            
                          <form class="edu-update-form" id="add_education-form">
                                
                          <p class="text-center">All fields marked <span class="text-danger">*</span> are compulsory</p> 

                          <div class="col-sm-6 pl-0">
                                <label class="exp-duration-label">From <span class="text-danger">*</span></label>
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
                            <div class="col-sm-6 pl-0">
                                <label class="exp-duration-label">Till <span class="text-danger">*</span></label>
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
                                <label class="school-label">School&nbsp;or&nbsp;institution <span class="text-danger">*</span></label><br>
                                <input id="edu-position" class="school-or-institution form-control"  type="" name="school"  placeholder="" required>
                                <input type="hidden" id="applicant_id" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                                <input type="hidden" id="user_name" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
                                <br><br>
                                
                                <label class="degree-label">
                                Course of Study <span class="text-danger">*</span></label><br>
                                <input class="degree-certificate form-control"  type="" name="course"  placeholder="" required>

                                <br><br>
                                
                                <label class="degree-label">
                                Degree&nbsp;or&nbsp;Certificate <span class="text-danger">*</span></label><br>
                
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
                        
                                  
                                <label class="skills-and-topics-label">Skills&nbsp;or&nbsp;Topics&nbsp;Learned</label>
                              
                              <br>
                              
                        

                              <div class="row">
                                    <div class="col-sm-10 col-xs-10">
                                        <input type="text" name="skills[]" class="position bg-white form-control" style="border: 1px solid #ced4da;">
                                    </div>
                                </div>
                              

                              <div id="input-area1" class="row pt-2">
                                
                                </div> 
                                
                                <br>
                                    <div id="add-btn1" class="add-tag-button-div">   
                                        <button type="button" class="add-tag-button" style="border: 1px solid #90EE90; color:#90EE90;background:#fff;border-radius:5px;">+ Add More</button>
                                    </div> 
                                
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

<script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>


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
                //  toastr.success('<p>Education added successfully</p>', {timeOut: 1000});
                 alertify.set('notifier','position', 'top-right');
                 alertify.success('Education added successfully');
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
                    // toastr.success('<p>Education updated successfully</p>', {timeOut: 1000});
                    alertify.set('notifier','position', 'top-right');
                    alertify.success('Education updated successfully');
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
                        // toastr.success('<p>Education deleted successfully</p>', {timeOut: 1000});
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Education deleted successfully');
                        
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
            //alert(xhr.responseText);
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
            //    toastr.success('<p>Pro Skill added successfully</p>', {timeOut: 1000});
                 alertify.set('notifier','position', 'top-right');
                alertify.success('Pro Skill added successfully');

                setTimeout(function() {
                    location.reload(true);
                }, 1000);
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
                        // toastr.success('<p>Pro Skill deleted successfully</p>', {timeOut: 1000});
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Pro Skill deleted successfully');
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
                // toastr.success('<p>Other Skill added successfully</p>', {timeOut: 1000});
                alertify.set('notifier','position', 'top-right');
                alertify.success('Other Skill added successfully');
                
                setTimeout(function() {
                            location.reload(true);
                        }, 1000);
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
                        // toastr.success('<p>Other Skill deleted successfully</p>', {timeOut: 1000});
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Other Skill successfully');
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
                        // toastr.success('<p>Portfolio Image uploaded successfully</p>', {timeOut: 1000});
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Poertfolio added successfully');

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
                        // toastr.success('<p>Portfolio Image deleted successfully</p>', {timeOut: 1000});
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Portfolio Image deleted successfully');
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
                        // toastr.success('<p>Document deleted successfully</p>', {timeOut: 1000});
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Document deleted successfully');
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
            //  toastr.success('<p>Web Link added successfully</p>', {timeOut: 1000});
             alertify.set('notifier','position', 'top-right');
             alertify.success('Web Link added successfully');

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
                        setTimeout(function() {
                            
                            // toastr.success('<p>Profile updated successfully</p>', {timeOut: 1000});
                            alertify.set('notifier','position', 'top-right');
                            alertify.success('Profile updated successfully');
                            
                            }, 3000);
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
                        // toastr.success('<p>Portfolio Image uploaded successfully</p>', {timeOut: 1000});
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Profile Image updated successfully');

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
                        // toastr.success('<p>Document uploaded successfully</p>', {timeOut: 1000});
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Document uploaded successfully');

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
                //alert(xhr.responseText);
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
                //alert(xhr.responseText);
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
                        //alert(xhr.responseText);
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
                alertify.set('notifier','position', 'top-right');
                alertify.success('Event created successfully');
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
            //  toastr.success('<p>Profile updated successfully</p>', {timeOut: 1000});
             alertify.set('notifier','position', 'top-right');
             alertify.success('Profile updated successfully');

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

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>


<script>

    $(".profile_pic_upload_form").change(function(e){
            //alert("A file has been selected.");
            e.preventDefault();

            var form_data = new FormData();

            var files = $('#browse1')[0].files[0];
            // alert("Hi");

            form_data.append('profile_pic_id',files);


            var applicant_id = $('.applicant_id').val();


            var username = $('.user_name').val();

            //alert(username);

            form_data.append('id', applicant_id);

            var old_image_name = $('.old_image_name').val();;

            form_data.append('old_image_name', old_image_name);

            //alert(form_data);

            //  for (var pair of form_data.entries()) {
            //     console.log(pair[0]+ ', ' + pair[1]); 
            // }


            $.ajax({
                    url: '<?php echo site_url();?>applicant/changeprofilepic',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(response){
                        //alert(response);
                        if(response.success == true)
                        {
                            //location.reload(true);

                            // document.addEventListener("DOMContentLoaded", function(){
                            //     //dom is fully loaded, but maybe waiting on images & css files
                            //     //SuccessAlert();
                                
                            // });

                        //     window.addEventListener("load", function(){
                        //     //everything is fully loaded, don't use me if you can use DOMContentLoaded
                        //     alert("Yes");
                        // });
                        SuccessAlert();

                        setTimeout(function() {
                            location.reload(true);
                        }, 1000);
                        
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

    function SuccessAlert() {
        alertify.set('notifier','position', 'top-right');
        var delay = alertify.get('notifier','delay');
        alertify.set('notifier','delay', 10);
        alertify.success('Profile Image Successfully changed');
        alertify.set('notifier','delay', delay);
    }
                          
</script>


<script>

$("#add-btn1").click(function(){
    var i = Math.floor(Math.random() * 10000000);
    $("#input-area1").append('<div class="col-sm-10 col-xs-10"> <input type="text" data-id="'+i+'" id="location_'+i+'" name="ex-roles[]" class="position form-control extra'+i+'"> </div> <div class="col-sm-2 col-xs-2"> <i class="fa fa-minus-circle fa-lg text-danger remove-input cursor" data-id="'+i+'" id="locationbtn_'+i+'"></i></div><br><br>');
   
  });

</script>



<script>

// $("#add-btn2").click(function(){
$("body").on("click", "#add-btn2", function (e) { 

    var i = Math.floor(Math.random() * 10000000);
    $("#input-area2").append('<div class="col-sm-10 col-xs-10"> <input type="text" data-id="'+i+'" id="location_'+i+'" name="ex-roles[]" class="position extra'+i+'"> </div> <div class="col-sm-2 col-xs-2"> <i class="fa fa-minus-circle fa-lg text-danger remove-input cursor" data-id="'+i+'" id="locationbtn_'+i+'"></i></div><br><br>');
   
  });

</script>



<script>

$("body").on("click", ".remove-input", function (e) { 
    e.preventDefault();

    var id = $(this).data('id');

    //alert(id);

    // alert("hi");

    $("#location_"+id+"").remove();
    $("#locationbtn_"+id+"").remove();
    //// $("#input-area1").load(location.href + " #input-area1"); 
    
});

</script>


</html>
