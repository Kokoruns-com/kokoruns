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
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
         
    <!--USER PROFILE CATEGORIES INTERACTION SCRIPT-->
    <script>
        
        function ShowEducationForm() {
           document.getElementById("edu-update-form-div") .style.display="block";
        }
        
        function CancelEducation() {
           document.getElementById("edu-update-form-div") .style.display="none"; 
            
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
            document.getElementById("form-div-prof-link") .style.display="none"; 
            
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
           document.getElementById("form-div-other") .style.display="flex";
        
         document.getElementById("add-skill-other")
          .style.display="none";
        }
        
        
        function CancelOtherAddSkill() {
           document.getElementById("form-div-other") .style.display="none"; 
            
           document.getElementById("skill-input-other")
            .value = '';  
            
            document.getElementById("add-skill-other")
          .style.display="block"; 
             }
            
            
          function FinishOtherAddSkill() {
            document.getElementById("form-div-other") .style.display="none"; 
            
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
        
        document.getElementById("user-portfolio").style.display="none";
    }
        
    function EducationFunction() {
      
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="block";
        
        document.getElementById("user-portfolio").style.display="none";
        
    }
        
        
    function PortfolioFunction() {
       
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-portfolio").style.display="block";
        
    }
        
    
    
    </script>
    
    <!--TEXT AREA SCRIPT (EXPEREINCE)-->
    <script> 
               
   var observe;
if (window.attachEvent) {
    observe = function (element, event, handler) {
        element.attachEvent('on'+event, handler);
    };
}
else {
    observe = function (element, event, handler) {
        element.addEventListener(event, handler, false);
    };
}
function Expinit () {
    var text = document.getElementById('roles-text-area');
    function resize () {
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }
    /* 0-timeout to get the already changed text */
    function delayedResize () {
        window.setTimeout(resize, 0);
    }
    observe(text, 'change',  resize);
    observe(text, 'cut',     delayedResize);
    observe(text, 'paste',   delayedResize);
    observe(text, 'drop',    delayedResize);
    observe(text, 'keydown', delayedResize);

    text.focus();
    text.select();
    resize();
    }
    </script>
    
    
    <!--TEXT AREA SCRIPT (EDUCATION)-->
    <script> 
               
   var observe;
if (window.attachEvent) {
    observe = function (element, event, handler) {
        element.attachEvent('on'+event, handler);
    };
}
else {
    observe = function (element, event, handler) {
        element.addEventListener(event, handler, false);
    };
}
function Eduinit () {
    var text = document.getElementById('edu-text-area');
    function resize () {
        text.style.height = 'auto';
        text.style.height = text.scrollHeight+'px';
    }
    /* 0-timeout to get the already changed text */
    function delayedResize () {
        window.setTimeout(resize, 0);
    }
    observe(text, 'change',  resize);
    observe(text, 'cut',     delayedResize);
    observe(text, 'paste',   delayedResize);
    observe(text, 'drop',    delayedResize);
    observe(text, 'keydown', delayedResize);

    text.focus();
    text.select();
    resize();
    }
    </script>   
    
    
    <!--EXTERNAL JS FILES-->
    
    <script type="text/javascript" src="Js/Change%20Banner.js"></script>


    <style>
        .cursor{
            cursor: pointer;
        }
    </style>
    
    
</head>
    
    <header class="header-class pb-5">
           
        <div class="mb-5">
            <a href="">
            <img src="<?php echo base_url();?>/public/assets/Images/Header%20and%20Footer/Logo.png" width="20%"></a>
        </div>
        
        
        
        <a href="<?php echo site_url();?>logout"><i class="fa fa-power-off text-primary mt-4 cursor" data-toggle="tooltip" title="Logout"></i></a>

        
    </header>
    
    <header class="header-class-logged-in">
           
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
           
    <body style="margin: 0px; background-color: #f5f5dc;">
        
        <!--USER INFO-->
        
        <section id="UserInfoContainer" class="user-info-container">    
            
            <div class="banner">
                
                <div class="dp-icons">
                 
                <div align="center" class="inbox-div">
                <button class="menu-bar-button-left" href=""><img class="menu-bar" src="<?php echo base_url();?>/public/assets/Images/User%20Profile/Inbox%20Logo.png"></button>
                </div>
                    
                <div align="center" class="dp-div">  
                <img class="dp" src="<?php echo base_url();?>/public/assets/Images/User%20Profile/User%20DP.png"> 
                </div>
                
                <div align="center" class="menu-bar-div">
                            <!-- <button class="menu-bar-button-right" href=""><img class="menu-bar" src="<?php echo base_url();?>/public/assets/Images/User%20Profile/Bars.png"></button> -->
                            <div class="row">
    
                <div class="col">
                    <div class="dropdown dropleft pr-2">
                
                        <i class="fa fa-bars text-white cursor" data-toggle="dropdown" style="font-size: 30px !important;"></i>
                        <div class="dropdown-menu">
                            
                            <a class="dropdown-item" href="<?php echo site_url();?>applicant/dashboard">Dashboard</a>
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
                </div> 
                    
                </div>    
                
      
            <!--a style="text-decoration: none" href=""><div align="center" class="user-link">kokoruns.com/alfredgreg</div></a-->
            
        <div align="center" class="user-name">Oluwole Tosin Adebisi<img src="" class="verification"> </div> 
            
        <div align="center" class="user-profession">Accountant</div>
                
        <!---------VIEW AND HIDE BIO BUTTONS--------->       
            
        <!--div id="view-bio-div" onclick="ViewBio()" align="center" class="view-bio-div">
        <button align="center" class="view-bio-button">View Bio</button></div-->
                
        <!--div id="hide-bio-div" onclick="HideBio()" align="center" class="hide-bio-div">
             <button align="center" class="hide-bio-button">Hide Bio</button></div-->  
                
        <!---------VIEW AND HIDE BIO BUTTONS--------->            
                
              <div align="center" class="sections">
            
            <div>    
            <button id="exp-b" onclick="ExperienceFunction(); ExperienceButtonsOnclick();" class="sections-div-active">Experience</button> 
            </div>
                
            <div>      
            <button id="edu-b" onclick="EducationFunction(); EducationButtonsOnclick();" class="sections-div">Education</button>
            </div>
            
            <div>    
            <button id="port-b" onclick="PortfolioFunction(); PortfolioButtonsOnclick();" class="sections-div">Portfolio</button>
            </div>  
                  
            <!--SECTION BUTTONS WHITE ONLICK SCRIPT-->
                  
            <script>
            
            function ExperienceButtonsOnclick() {
                
            document.getElementById("exp-b").style.backgroundColor="white";
            document.getElementById("exp-b").style.borderBottomColor="white"; 
            document.getElementById("exp-b").style.color="#0991ff";
                
            document.getElementById("edu-b").style.backgroundColor="#0991ff";
            document.getElementById("edu-b").style.borderBottomColor="#0991ff";
            document.getElementById("edu-b").style.color="white";    
                
            document.getElementById("port-b").style.backgroundColor="#0991ff";
            document.getElementById("port-b").style.borderBottomColor="#0991ff"; 
            document.getElementById("port-b").style.color="white";    
                
                
            }
                
            function EducationButtonsOnclick() {
                
            document.getElementById("edu-b").style.backgroundColor="white";
            document.getElementById("edu-b").style.borderBottomColor="white";
            document.getElementById("edu-b").style.color="#0991ff";    
                
                
            document.getElementById("exp-b").style.backgroundColor="#0991ff";
            document.getElementById("exp-b").style.borderBottomColor="#0991ff";
            document.getElementById("exp-b").style.color="white";    
                
            document.getElementById("port-b").style.backgroundColor="#0991ff";
            document.getElementById("port-b").style.borderBottomColor="#0991ff";
            document.getElementById("port-b").style.color="white";    
            }
                
            function PortfolioButtonsOnclick() {
                
            document.getElementById("port-b").style.backgroundColor="white";
            document.getElementById("port-b").style.borderBottomColor="white";
            document.getElementById("port-b").style.color="#0991ff";    
                
            document.getElementById("edu-b").style.backgroundColor="#0991ff";
            document.getElementById("edu-b").style.borderBottomColor="#0991ff";
            document.getElementById("edu-b").style.color="white";    
                
            document.getElementById("exp-b").style.backgroundColor="#0991ff";
            document.getElementById("exp-b").style.borderBottomColor="#0991ff";
            document.getElementById("exp-b").style.color="white";    
                
            }    
                
                
                
            </script>      
                  
            <!--SECTION BUTTONS WHITE ONLICK SCRIPT-->      
                 
            </div>    
                
          
            </div>
            
          
            <!--USER BIO-->    
        <div id="user-bio" align="center" class="user-bio"> 

                
            <div id="bio-info" class="bio-info">
                
            <div id="user-bio-dp-container" class="user-bio-dp-container">
                
             <div align="center" class="bio-dp-div">  
             <img class="dp" src="<?php echo base_url();?>/public/assets/Images/User%20Profile/User%20DP.png"> 
             </div>   
                
            <div align="center" class="bio-user-name">Oluwole Tosin Adebisi<img src="" class="verification"> </div> 
            
            <div align="center" class="bio-user-profession">Accountant</div>       
                
            </div> 
                
               
            <script>
                
           $(document).scroll(function() {
           var y = $(this).scrollTop();
           if (y > 200) {
           $('.user-bio-dp-container').fadeIn();
           } else {
           $('.user-bio-dp-container').fadeOut();
            }
            });
            </script>     
                
                
                
            <label class="bio-info-label">Recommendations    
            </label><br>
            <a href="#">47</a><br style="line-height:2.0">
                
            <label class="bio-info-label">Gender    
            </label><br>
            Male<br style="line-height:2.0">
                
            <label class="bio-info-label">Married    
            </label><br>
            No<br style="line-height:2.0">    
                
            <label class="bio-info-label">Academic Level    
            </label><br>
            Master's Degree<br style="line-height:2.0">
                
            <label class="bio-info-label">Other Professions
            </label><br>
            Physician, Astronaut, Chemist, Cook<br style="line-height:2.0"> 
            
            <label class="bio-info-label">Languages
            </label><br>
            English, Yoruba, Hausa, Igbo, Pidgin English<br style="line-height:2.0">    
                
            <label class="bio-info-label">Company / Brand    
            </label><br>
            ABC Nigeria Limited<br style="line-height:2.0"> 
                
            <label class="bio-info-label">Location    
            </label><br>
            Lagos, Kosofe.<br style="line-height:2.0">
                
            <label class="bio-info-label">Job Preference    
            </label>
            <ul>
            <li>Type - Fulltime</li>
            <li>Options - Chemist, Cook</li>
            <li>Preferred Location - Lagos, Kosofe.</li>   
            </ul>
                
            <label class="bio-info-label">Start Date    
            </label><br>
            October 6, 2020<br style="line-height:2.0">    
            
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
            <form class="bio-info-form">
                
            <div class="edit-bio-label">
            Edit Bio    
            </div>    
            
            <div class="gender-div">
                
             <div class="gender-padding-right">   
            <div class="bio-form-label">Your Gender<b>*</b></div> 
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label> 
            </div>
                
            <div>    
            <div class="bio-form-label">Married<b>*</b></div> 
            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Yes</label><br>
            <input type="radio" id="female" name="gender" value="female">
            <label for="female">No</label>
            </div>    
                
            </div>
                
            <div class="disabled-div">
            <div class="bio-form-label">Disabled<b>*</b></div>
            <input type="radio" id="yes" name="disabled" value="yes">
            <label for="yes">Yes</label>
            <input type="radio" id="no" name="disabled" value="no">
            <label for="no">No</label>     
                
            </div>    
                
            <div class="bio-form-div">
            <div class="bio-form-label">Your Academic Level<b>*</b></div> 
            <select class="bio-form-select"></select>    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Other Profession 1</div> 
            <select class="bio-form-select"></select> 
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Other Profession 2</div> 
            <select class="bio-form-select"></select>
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Other Profession 3</div> 
            <select class="bio-form-select"></select>  
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Other Profession 4</div> 
            <select class="bio-form-select"></select>    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 1<b>*</b></div> 
            <select class="bio-form-select"></select>    
            </div>   
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 2</div> 
            <select class="bio-form-select"></select>    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 3</div> 
            <select class="bio-form-select"></select>    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 4</div> 
            <select class="bio-form-select"></select>    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 5</div> 
            <select class="bio-form-select"></select>    
            </div>    
            
            <div class="bio-form-div">
            <div class="bio-form-label">Current Employer (Company / Brand)<b>*</b></div> 
            <input class="bio-form-input">    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Your State<b>*</b></div> 
            <select class="bio-form-select"></select>    
            </div>    
                
            <div class="bio-form-div">
            <div class="bio-form-label">Your LGA<b>*</b></div> 
            <select class="bio-form-select"></select>    
            </div> 
                
            <div class="job-preferences-div">
            <div class="job-preferences-label">Your Job Preferences</div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Type<b>*</b></div> 
            <select class="bio-form-select"></select>    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 1<b>*</b></div> 
            <select class="bio-form-select"></select> 
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 2</div> 
            <select class="bio-form-select"></select>
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 3</div> 
            <select class="bio-form-select"></select>  
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 4</div> 
            <select class="bio-form-select"></select>    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Preferred State<b>*</b></div> 
            <select class="bio-form-select"></select>    
            </div>   
                
            <div class="bio-form-div">
            <div class="bio-form-label">Preferred LGA<b>*</b></div> 
            <select class="bio-form-select"></select>    
            </div>    
                
            </div>  
                
            <div class="start-date-main-div">
            <div class="bio-form-label">Start Date<b>*</b></div>    
            <input type="radio" id="immediately" name="start_date" value="immediately" onclick="HideStartDate();">
                
            <label for="immediately">Immediately</label><br>
            <input type="radio" id="not_yet" name="start_date" value="not_yet" onclick="HideStartDate();">
                
            <label for="not_yet">Not Yet</label><br>    
            <input type="radio" id="select_date" name="start_date" value="select_date" 
            onclick="ShowStartDate();">
            <label for="select_date">Select Date</label>
            
            <div id="StartDateDiv" class="start-date-div"> <select class="start-date-day">
            <option>Day</option></select>
            <select class="start-date-month">
            <option>Month</option></select>
            <select class="start-date-year">
            <option>Year</option></select>    
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
            <button onclick="FinishBioForm(); return false;" class="submit-bio-button">Finish</button>    
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
            <!--USER BIO-->     
    
            
        </section> 
    

      
            



        <!--EXPERIENCE-->
        <div id="user-experience" style="padding-left: 10px; padding-bottom: 50px;">



         <!--EXPERIENCE-->
         <div style="padding-top: 15px; padding-bottom: 15px; margin-right: 8px;">


            <section class="user-experience">  

                <div class="exp-update-button-container">
                    
                    <button class="btn btn-primary rounded-0" data-toggle="modal" data-target="#addExperienceModal">Create Experience +</button>      
                    
                </div> 


            </section>    

            </div> 


        <section class="user-experience">


            
            
            <div class="user-experience-header-container">
                
            <!--h2 align="center" class="user-experience-header">Experience</h2-->
                
            

          
                    
            </div>
            

            
            <div class="experience-post-container" style="margin-right: 50px;">
                
                <div class="exp-cont">
                    
               <div class="exp-cont-2">     
            
            <span class="exp-date">June</span>&nbsp;
            <span class="exp-date">2013</span> - 
            <span class="exp-date">January</span>&nbsp;
            <span class="exp-date">2019</span><br><br>
                   
            <span class="exp-position">Senior Project Manager</span>&nbsp;
            <button class="position-button">View</button><br><br>       
            
        <span class="company">Google Alphabet Corp.</span><br><br>
            
           <ul class="roles-and-respon">
           <li>Programming in HTML</li>
           <li>Programming in CSS</li>
           <li>Server-Side Scripting with PHP and Node.js</li>
           <li>Programming in HTML</li>
           <li>Programming in CSS</li>
           <li>Server-Side Scripting with PHP and Node.js</li>
           </ul>
                    
            <br>  
                
        <div>
            <button class="exp-edit"><img class="" src="">Edit</button>&nbsp;&nbsp;<button class="exp-delete">Delete</button></div>
                    
                </div>       
                
           </div>     
                
        </div>
            
        </section>    
            
        </div>  



    <!--EDUCATION-->

    <div id="user-education" style="display:none; margin-bottom: 50px;">



    <div style="padding-left: 10px; padding-top: 15px;">


        <section class="user-experience">  

            <div class="exp-update-button-container">
                
                <button class="btn btn-info rounded-0 ml-2" data-toggle="modal" data-target="#addEducationModal">Create Education +</button>      
                
            </div> 


        </section>    

        </div> 
        
        
<div  style="padding-left: 40px; padding-top: 12px;">
        
        <section class="user-education">   

            
            
            <div class="education-post-container">
                
                <div class="edu-cont">
                    
                    <div class="edu-cont-2">
            
            <span class="edu-date">June</span>&nbsp;
            <span class="edu-date">2013</span> - 
            <span class="edu-date">January</span>&nbsp;&nbsp;<span class="edu-date">2019</span><br><br>
                        
            <span class="degree">BS.c Architecture</span>&nbsp;
            <button class="degree-button">View</button>
            <br><br>            
            
            <span class="school">Convenant University</span><br><br>
            
           <ul class="skills-topics">
           <li>Programming in HTML</li>
           <li>Programming in CSS</li>
           <li>Server-Side Scripting with PHP and Node.js</li>
           <li>Programming in HTML</li>
           <li>Programming in CSS</li>
           <li>Server-Side Scripting with PHP and Node.js</li>
           </ul>
                    
            <br>        
                
        <div>
            <button class="edu-edit">
            <img class="" src="">Edit</button>&nbsp;&nbsp;<button class="edu-delete">Delete</button>
            </div>
                    
            </div>        
                
           </div>     
                
        </div>
            
       
            
        </section>
            
        </div> 



        <!----Pro skills-->



<div  style="padding-left: 10px; padding-top: 12px; margin-top: 80px;">

<section class="user-education">   

    
    <div class="skills-container">
        
        <div class="skills-cont-2">
        
    <h2 class="professional-label">Professional Skills   <button onclick="AddProfSkill()" class="add-skill-button bg-danger">Add skill +</button ></h2>
        <div id="form-div-prof" class="form-div">
            
        <form class="add-skill-form"  >
            
            
           

            <div class="input-group mb-3">
                <input class="skzills-input" type="text" style="width:150px;" >&nbsp;
            <div class="input-group-append">
                <button onclick="FinishAddProfSkill()" class="finish-add-skill btn btn-success">Save</button>
            </div>
            </div>


            
            </form>
        </div>  
    </div>  

    <div class="skill-padding"><div class="skill">Numerical Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Creative Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Design Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Legal knowledge&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Communication Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Team working Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Commercial Awareness&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Artistic Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Problem Solving Skills&nbsp;<button class="delete-skill-button">x</button></div></div>   
    
      
        
    
        
        
     
        
    </div>

    </div>
    
    
</section>
    



        <!----Other Skills---->



<div  style="padding-left: 10px; padding-top: 12px; margin-top: 80px;">

<section class="user-education">   


    
    <div class="skills-container">
        
        <div class="skills-cont-2">
             <h2 class="other-label">Other Skills <button onclick="AddOtherSkill()" class="add-skill-button bg-danger">Add skill +</button ></h2>
           
             <div id="form-div-other" class="form-div">
                <form class="add-skill-form">
                
                    <div class="input-group mb-3">
                        <input class="skzills-input" type="text" style="width:150px;" >&nbsp;
                    <div class="input-group-append">
                        <button onclick="FinishAddProfSkill()" class="finish-add-skill btn btn-success">Save</button>
                    </div>
                    </div>

                </form>
            </div>
        </div>    

    <div class="skill-padding"><div class="skill">Numerical Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Creative Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Design Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Legal knowledge&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Communication Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Team working Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Commercial Awareness&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Artistic Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
        
    <div class="skill-padding"><div class="skill">Problem Solving Skills&nbsp;<button class="delete-skill-button">x</button></div></div>   
    
        
        
        
     
        
        
    <!-- <div id="form-div-other" class="form-div">
        
    <form class="add-skill-form">
    <input class="skills-input" type="text" id="skill-input-other">&nbsp;
        
        <button onclick="CancelAddOtherSkill()" class="cancel-add-skill">Cancel</button>
        
        <button onclick="FinishAddOtherSkill()" class="finish-add-skill">Done</button>
        
        </form>
    </div> -->
        
    </div>
           

    </div>
    
</section>
    
</div> 



</div> 
         
        </div>
        
        <!--SKILLS-->
        
     <!--section id="user-skills" class="user-skills">
    
          <h1 class="skills-header" align="center">Skills</h1>      
                
         <br>
            
            <div class="skills-container">
                
            <h2 class="professional-label">Professional Skills</h2>    
        
            <div class="skill-padding"><div class="skill">Numerical Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Creative Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Design Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Legal knowledge&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Communication Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Team working Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Commercial Awareness&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Artistic Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Problem Solving Skills&nbsp;<button class="delete-skill-button">x</button></div></div>   
            
              
                
             <div id="add-skill-prof" class="skill-padding">
            <button onclick="AddProfSkill()" class="add-skill-button">Add skill +</button ></div> 
                
                
            <div id="form-div-prof" class="form-div">
                
            <form class="add-skill-form">
            <input class="skills-input" type="text" id="skill-input-prof">&nbsp;
                
                <button onclick="CancelAddProfSkill()" class="cancel-add-skill">Cancel</button>
                
                <button onclick="FinishAddProfSkill()" class="finish-add-skill">Done</button>
                
                </form>
            </div>   
    
            </div>
            
            
                <br><br><br><br>
            
            
            
            
            <div class="skills-container">
                
            <h2 class="other-label">Other Skills</h2>    
        
            <div class="skill-padding"><div class="skill">Numerical Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Creative Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Design Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Legal knowledge&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Communication Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Team working Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Commercial Awareness&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Artistic Skills&nbsp;<button class="delete-skill-button">x</button></div></div>
                
            <div class="skill-padding"><div class="skill">Problem Solving Skills&nbsp;<button class="delete-skill-button">x</button></div></div>   
            
                
                
                
            <div id="add-skill-other" class="skill-padding">
            <button onclick="AddOtherSkill()" class="add-skill-button">Add skill +</button ></div> 
                
                
            <div id="form-div-other" class="form-div">
                
            <form class="add-skill-form">
            <input class="skills-input" type="text" id="skill-input-other">&nbsp;
                
                <button onclick="CancelAddOtherSkill()" class="cancel-add-skill">Cancel</button>
                
                <button onclick="FinishAddOtherSkill()" class="finish-add-skill">Done</button>
                
                </form>
            </div>
                   

            </div>
                
                </section-->
        
        <!--PORTFOLIO-->
        
        <div id="user-portfolio" style="padding-left: 53px; padding-bottom: 50px; margin-top: 20px; display: none;">
        
      <section class="user-portfolio">
          
          <div class="portfolio-header-container">
              
             <div class="edu-update-button-container">
            <label for="add_image">
                <button class="edu-update-button">Add Image</button> </label>
                <input type="file" name="xxxx" id="add_image" hidden/>     
              
          </div>      
                
          </div> 
              
        <div class="porfolio-container-images" align="center">
           
            <!--button onclick="" class="delete-image-button">
            <img class="image-button" src="Images/User%20Profile/add%20image.png">
            </button-->
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>  
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
        
            </div>
          
             
        </section>

<br>

        <section class="user-portfolio">
          
          <div class="portfolio-header-container">
              
             <div class="edu-update-button-container">
            
        <button onclick="ShowEducationForm()" class="edu-update-button">Add Docs</button>      
              
          </div>      
                
          </div> 
              
        <div class="porfolio-container-images" align="center">
           
            <!--button onclick="" class="delete-image-button">
            <img class="image-button" src="Images/User%20Profile/add%20image.png">
            </button-->
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>  
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
            
            <a class="image-padding" href="<?php echo base_url();?>/public/assets/Images/User%20Profile/sample%20image.jpg" target="_blank"><img class="image" src="Images/User%20Profile/sample%20image.jpg"></a>
        
            </div>
        
                
            
        </section>




<br>

        <section class="user-portfolio">
          
          <div class="portfolio-header-container">
              
             <div class="edu-update-button-container">
            
        <!-- <button onclick="ShowEducationForm()" class="edu-update-button">Online Links</button>       -->
        <h2 class="online-links-header">Online Links</h2> 
              
          </div>      
                
          </div> 
          
            <div class="online-links-container">
                
                <div class="link-cont-2">
                
               
                
            <a href=""><div class="skill-padding"><div class="skill">Instagram&nbsp;<button class="delete-skill-button">x</button></div></div></a>
                
            <a href=""><div class="skill-padding"><div class="skill">Twitter&nbsp;<button class="delete-skill-button">x</button></div></div></a>
                
            <a href=""><div class="skill-padding"><div class="skill">Facebook&nbsp;<button class="delete-skill-button">x</button></div></div></a>
                
            <a href=""><div class="skill-padding"><div class="skill">YouTube&nbsp;<button class="delete-skill-button">x</button></div></div></a>
                
            <a href=""><div class="skill-padding"><div class="skill">LinkedIn&nbsp;<button class="delete-skill-button">x</button></div></div></a>
                
            <a href=""><div class="skill-padding"><div class="skill">Artstation&nbsp;<button class="delete-skill-button">x</button></div></div></a>
                
            <a href=""><div class="skill-padding"><div class="skill">Behance&nbsp;<button class="delete-skill-button">x</button></div></div></a>
                
            <a href=""><div class="skill-padding"><div class="skill">Tumblr&nbsp;<button class="delete-skill-button">x</button></div></div></a>
                
            <a href=""><div class="skill-padding"><div class="skill">Pinterest&nbsp;<button class="delete-skill-button">x</button></div></div></a>   
            
              
                
             <div id="add-skill-prof-link" class="skill-padding">
            <button onclick="AddProfLink()" class="add-skill-button">Add Link +</button></div> 
                
                
            <div id="form-div-prof-link" class="form-div">
                
            <form class="add-skill-form">
                
            <input class="link-title" placeholder="Title" type="text" id="skill-input-prof-link">
                
            <input class="link-url" type="text" id="skill-input-prof-link" placeholder="URL (e.g http://www.kokoruns.com/)">   
                
                <br>
                
                <button onclick="CancelAddProfLink()" class="cancel-add-skill">Cancel</button>
                
                <button onclick="FinishAddProfLink()" class="finish-add-skill">Done</button>
                
                </form>
            </div>      
                
          </div>
    
            </div>
                
            
        </section>



            
        </div>    
        
        
        
        
        
    </body>
    
    <div class="footer-container">
        
        <div align="left">
            <a href="" class="fa fa-facebook"></a>
            <a href="" class="fa fa-instagram"></a>
            <a href="" class="fa fa-twitter"></a>
            <a href="" class="fa fa-google"></a>
    </div>
        
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
    
    <div align="center">Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kokoruns.com </div> 
        
        </div>


        <!-- Experience Modal -->
        <div class="modal fade" id="addExperienceModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-0">

            <!-- Modal Header -->
            <div class="modal-header rounded-0 py-2" style="background: #70a1B9">
                    <p class="modal-title text-white"><strong> Experience Details</strong></p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            <form id="add-experience-form">


                <p class="text-center mt-0 mb-0">All fields marked <span class="text-danger">*</span> are compulsory</p> 


                    <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                    <input type="hidden" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">

                    <div class="col-sm-6 pl-0">
                        <label class="exp-duration-label mt-0 mb-0">From <span class="text-danger">*</span></label>
                    </div>
                    <div style="display: flex">
                            
                            <select class="exp-duration form-control form-control-sm rounded-0"  style="margin-right:5px;border-radius:5px; width:100%;" name="start_month" required>
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
                            
                            <select id="year1" class="exp-duration form-control form-control-sm rounded-0" style="border-radius:5px; width:100%;" name="start_year" required>
                                <option value="" selected disabled hidden>Select Year</option>
                            </select>

                    </div>
                        
                
                    <div class="col-sm-6 pl-0">
                        <label class="exp-duration-label mt-1 mb-0">Till <span class="text-danger">*</span></label>
                    </div>
                    
                    <div style="display: flex">
                    
                        <select class="exp-duration form-control form-control-sm rounded-0"  style="margin-right:5px;border-radius:5px; width:100%;" name="end_month" required>
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
                        
                            <select id="year2" class="exp-duration form-control form-control-sm rounded-0" style="border-radius:5px; width:100%;" name="end_year" required>
                                <option value="" selected disabled hidden>Select Year</option>
                            </select>

                        </div>
                        
                    
                   
                    <label class="company-label mt-1 mb-0">Company&nbsp;or&nbsp;Business <span class="text-danger">*</span></label><br>
                    <input id="company-or-business" class="company-or-business form-control form-control-sm rounded-0"  type="text" name="ex-company-name"  placeholder="" required>
                    
               
                    
                    <label class="position-label mt-1 mb-0">
                    Position <span class="text-danger">*</span></label><br>
                    <input class="position form-control form-control-sm rounded-0"  type="text" name="exposition" id="positon" placeholder="" required>
                   
                    <div class="text-right mt-2">
                        <button class="letter-button btn btn-primary btn-sm py-0 rounded-0">Upload Employment Letter <i class="fa fa-upload"></i></button>
                    </div>
            
                    <div class="row">
                        <div class="col-sm-10 col-xs-10">
                            <label class="roles-and-respon-label mt-0 mb-0">Roles&nbsp;and&nbsp;Responsibilities</label>
                            <input type="text" name="ex-roles[]" class="position bg-white form-control form-control-sm rounded-0" style="border: 1px solid #ced4da;">
                        </div>
                    </div>

                    

                    <div id="input-area1" class="row pt-2">
                
                    </div> 
                    
                   
                        <div id="add-btn1" class="add-tag-button-div">   
                            <button type="button" class="add-tag-button" style="border: 1px solid #90EE90; color:#90EE90;background:#fff;border-radius:5px;">+ Add More</button>
                        </div> 
                
                    
               
            </div>

                <!-- Modal footer -->
                <div class="modal-footer py-1">
                    <button type="submit" class="btn btn-success btn-sm">Create</button>
                </div>
            </form> 
            </div>
        </div>
        </div>





            <!-- Education Modal -->
             <div class="modal fade" id="addEducationModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content rounded-0">

            <!-- Modal Header -->
            <div class="modal-header rounded-0 py-2" style="background: #70a1B9">
                    <p class="modal-title text-white"><strong> Education Details</strong></p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal body -->
            <div class="modal-body">
            <form id="add_education-form">
                                
                                <p class="text-center mt-0 mb-0">All fields marked <span class="text-danger">*</span> are compulsory</p> 
      
                                <div class="col-sm-6 pl-0">
                                      <label class="exp-duration-label mt-0 mb-0">From <span class="text-danger">*</span></label>
                                  </div>
                                  <div style="display: flex">
                                          
                                          <select class="exp-duration form-control form-control-sm rounded-0"  style="margin-right:5px;border-radius:5px; width:100%;" name="start_month" required>
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
                                          
                                          <select id="year3" class="exp-duration form-control form-control-sm rounded-0" style="border-radius:5px; width:100%;" name="start_year" required>
                                              <option value="" selected disabled hidden>Select Year</option>
                                          </select>
      
                                  </div>
                                  
                           
                                  <div class="col-sm-6 pl-0">
                                      <label class="exp-duration-label mt-1 mb-0">Till <span class="text-danger">*</span></label>
                                  </div>
                              
                                  <div style="display: flex">
                              
                                      <select class="exp-duration form-control form-control-sm rounded-0"  style="margin-right:5px;border-radius:5px; width:100%;" name="end_month" required>
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
                                      
                                          <select id="year4" class="exp-duration form-control form-control-sm rounded-0" style="border-radius:5px; width:100%;" name="end_year" required>
                                              <option value="" selected disabled hidden>Select Year</option>
                                      </select>
      
                                      </div>
                                    
                                     
                                      <label class="school-label mt-1 mb-0">School&nbsp;or&nbsp;institution <span class="text-danger">*</span></label><br>
                                      <input id="edu-position" class="school-or-institution form-control form-control-sm rounded-0"  type="" name="school"  placeholder="" required>
                                      <input type="hidden" id="applicant_id" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                                      <input type="hidden" id="user_name" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">
            
                                      
                                      <label class="degree-label mt-1 mb-0">
                                      Course of Study <span class="text-danger">*</span></label><br>
                                      <input class="degree-certificate form-control form-control-sm rounded-0"  type="" name="course"  placeholder="" required>
      
                                   
                                      
                                      <label class="degree-label mt-1 mb-0">
                                      Degree&nbsp;or&nbsp;Certificate <span class="text-danger">*</span></label><br>
                      
                                      <select class="degree-certificate form-control form-control-sm rounded-0" name="class_of_degree" id="certificate" required>
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
      
                                      
                                      <!-- <button class="certificate-button"></button> -->
                                    
                                      <div class="text-right mt-2">
                                            <button class="letter-button btn btn-primary btn-sm py-0 pt-0 rounded-0">Upload Certificate <i class="fa fa-upload"></i></button>
                                        </div>
                              
                                        
                                      <label class="skills-and-topics-label mt-0 mb-0">Skills&nbsp;or&nbsp;Topics&nbsp;Learned</label>
                                    
                                 
                                    
                              
      
                                    <div class="row">
                                          <div class="col-sm-10 col-xs-10">
                                              <input type="text" name="skills[]" class="position bg-white form-control form-control-sm rounded-0" style="border: 1px solid #ced4da;">
                                          </div>
                                      </div>
                                    
      
                                    <div id="input-area2" class="row pt-2">
                                      
                                      </div> 
                                      
                                    
                                          <div id="add-btn2" class="add-tag-button-div">   
                                              <button type="button" class="add-tag-button" style="border: 1px solid #90EE90; color:#90EE90;background:#fff;border-radius:5px;">+ Add More</button>
                                          </div> 
                                      
                                    </div>
                                      <!-- Modal footer -->
                                    <div class="modal-footer py-1">
                                        <button type="submit" class="btn btn-success btn-sm">Create</button>
                                    </div>                 
                                  
                                    
                                  </form> 
            </div>
        </div>
        </div>





<!-- jQuery library -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
<script src="<?php echo base_url();?>/public/assets/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>



<script>


    $("body").on('submit', '#add-experience-form', function(e){
    
        e.preventDefault();

        var querystring = $(this).serialize();
        
        //console.log(querystring);

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
                    alertify.set('notifier','position', 'top-right');
                    alertify.success('Job Experience Added Successfully');
                    
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
                   
                    $(".update-experience-form").trigger("reset");
                    // $(".experience_box").load(location.href + " .experience_box");

                    alertify.set('notifier','position', 'top-right');
                    alertify.success('Job experience updated successfully');


                   
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
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Experience deleted successfully');
                        
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
for (let i = 1950; i <= T('y'); i++) {
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

$("#add-btn1").click(function(){
    var i = Math.floor(Math.random() * 10000000);
    $("#input-area1").append('<div class="col-sm-10 col-xs-10"> <input type="text" data-id="'+i+'" id="location_'+i+'" name="ex-roles[]" class="position form-control form-control-sm rounded-0 extra'+i+'"> </div> <div class="col-sm-2 col-xs-2"> <i class="fa fa-minus-circle fa-lg text-danger remove-input cursor" data-id="'+i+'" id="locationbtn_'+i+'"></i></div><br><br>');
   
  });

</script>



<script>

// $("#add-btn2").click(function(){
$("body").on("click", "#add-btn2", function (e) { 

    var i = Math.floor(Math.random() * 10000000);
    $("#input-area2").append('<div class="col-sm-10 col-xs-10"> <input type="text" data-id="'+i+'" id="location_'+i+'" name="ex-roles[]" class="position form-control form-control-sm rounded-0 extra'+i+'"> </div> <div class="col-sm-2 col-xs-2"> <i class="fa fa-minus-circle fa-lg text-danger remove-input cursor" data-id="'+i+'" id="locationbtn_'+i+'"></i></div><br><br>');
   
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


<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>


    
</html>
