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
    <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css">
     
    
    
     <link rel="shortcut icon" href="Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css"> 

     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
  


    
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
        
        <section class="">    
            
            <div class="">
            
                <div class="row">
                
            

                    <div class="col">
                        <div class="dropdown dropleft float-right">
                            <!-- <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                Dropdown button
                            </button> -->
                            <i class="fa fa-bars cursor" data-toggle="dropdown" style="font-size: 26px !important;"></i>&nbsp;&nbsp;
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
            
            </div>
            
            
        </section> 
        
   
                <section>
                
                    <div class="container">
                    
                        <div class="row">
                            <div class="col-sm-12">


                        <section id="recommendations-box-div" class="user-experience" >
                
                            <!-- <h3 class="skills-header" align="center">Recommendations</h3>   -->



                            
                            <?php if(!empty(session()->getFlashdata('success'))){ ?>

                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                                    <strong>Success!</strong> <?php echo session()->getFlashdata('success');?>
                                </div>
                                    
                                <?php } ?>

                                <?php if(!empty(session()->getFlashdata('error'))){ ?>

                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        <strong></strong> <?php echo session()->getFlashdata('error');?>
                                    </div>

                                <?php } ?>



                <h1 class="skills-header w3-center">
                   Recommendation Request Details
                    
                    </h1>




<div  class="experience-post-container">
                  

    <div id="" class="">
            
            <div id="offer_recommendation_box" class="exp-cont w3-white">

            <div  class="experience_box" > 


    <form class="" action="<?php echo site_url(); ?>applicant/recommendationrequestacceptaction" method="post">

    <input type="hidden" name="sender_id" value="<?php echo $recommendation_request['fsender_id']; ?>">
    <input type="hidden" name="id" value="<?php echo $recommendation_request['frecno']; ?>">

        <div id="rating">   

                <h3>Personality Score of This Person </h3>
                <p>(Select the options you will like to score and choose a scale)</p>    
                <div>
                    
                    <input type="checkbox" class="w3-check" name="" id="gen_impression"> <strong> General Impression <span class="text-danger">*</span></strong>

                    <p class="text-center" id="impression_box" style="display:none">
                        1.<input type="radio" class="w3-radio" name="impression" value="1" id=""> 2.<input type="radio" class="w3-radio" name="impression" value="6" id="" required> 
                        3.<input type="radio" class="w3-radio" name="impression" value="2" id=""> 4.<input type="radio" class="w3-radio" name="impression" value="7" id="">
                        5.<input type="radio" class="w3-radio" name="impression" value="3" id=""> 6.<input type="radio" class="w3-radio" name="impression" value="8" id="">
                        7.<input type="radio" class="w3-radio" name="impression" value="4" id=""> 8.<input type="radio" class="w3-radio" name="impression" value="9" id="">
                        9.<input type="radio" class="w3-radio" name="impression" value="5" id=""> 10.<input type="radio" class="w3-radio" name="impression" value="10" id="">
                    </p>
                </div>
                <br>
                <div>
                    <input type="checkbox" class="w3-check" name="" id="honesty"> <strong> Honesty & Integrity  </strong>

                    <p class="text-center" id="honesty_box" style="display:none">
                        1.<input type="radio" class="w3-radio" name="honesty" value="1" id=""> 2.<input type="radio" class="w3-radio" name="honesty" value="6" id=""> 
                        3.<input type="radio" class="w3-radio" name="honesty" value="2" id=""> 4.<input type="radio" class="w3-radio" name="honesty" value="7" id="">
                        5.<input type="radio" class="w3-radio" name="honesty" value="3" id=""> 6.<input type="radio" class="w3-radio" name="honesty" value="8" id="">
                        7.<input type="radio" class="w3-radio" name="honesty" value="4" id=""> 8.<input type="radio" class="w3-radio" name="honesty" value="9" id="">
                        9.<input type="radio" class="w3-radio" name="honesty" value="5" id=""> 10.<input type="radio" class="w3-radio" name="honesty" value="10" id="">
                    </p>
                </div>

                <br>
                <div>
                    <input type="checkbox" class="w3-check" name="" id="proactive"> <strong> Proactive & Dedicated  </strong>

                    <p class="text-center" id="proactive_box" style="display:none">
                        1.<input type="radio" class="w3-radio" name="proactive" value="1" id=""> 2.<input type="radio" class="w3-radio" name="proactive" value="6" id=""> 
                        3.<input type="radio" class="w3-radio" name="proactive" value="2" id=""> 4.<input type="radio" class="w3-radio" name="proactive" value="7" id="">
                        5.<input type="radio" class="w3-radio" name="proactive" value="3" id=""> 6.<input type="radio" class="w3-radio" name="proactive" value="8" id="">
                        7.<input type="radio" class="w3-radio" name="proactive" value="4" id=""> 8.<input type="radio" class="w3-radio" name="proactive" value="9" id="">
                        9.<input type="radio" class="w3-radio" name="proactive" value="5" id=""> 10.<input type="radio" class="w3-radio" name="proactive" value="10" id="">
                    </p>
                </div>

                <br>
                <div>
                    <input type="checkbox" class="w3-check" name="" id="adaptable"> <strong>  Adaptable  </strong>

                    <p class="text-center" id="adaptable_box" style="display:none">
                        1.<input type="radio" class="w3-radio" name="adaptable" value="1" id=""> 2.<input type="radio" class="w3-radio" name="adaptable" value="6" id=""> 
                        3.<input type="radio" class="w3-radio" name="adaptable" value="2" id=""> 4.<input type="radio" class="w3-radio" name="adaptable" value="7" id="">
                        5.<input type="radio" class="w3-radio" name="adaptable" value="3" id=""> 6.<input type="radio" class="w3-radio" name="adaptable" value="8" id="">
                        7.<input type="radio" class="w3-radio" name="adaptable" value="4" id=""> 8.<input type="radio" class="w3-radio" name="adaptable" value="9" id="">
                        9.<input type="radio" class="w3-radio" name="adaptable" value="5" id=""> 10.<input type="radio" class="w3-radio" name="adaptable" value="10" id="">
                    </p>
                </div>

                <br>
                <div>
                    <input type="checkbox" class="w3-check" name="" id="team_oriented"> <strong> Team oriented  </strong>

                    <p class="text-center" id="team_oriented_box" style="display:none">
                        1.<input type="radio" class="w3-radio" name="team_oriented" value="1" id=""> 2.<input type="radio" class="w3-radio" name="team_oriented" value="6" id=""> 
                        3.<input type="radio" class="w3-radio" name="team_oriented" value="2" id=""> 4.<input type="radio" class="w3-radio" name="team_oriented" value="7" id="">
                        5.<input type="radio" class="w3-radio" name="team_oriented" value="3" id=""> 6.<input type="radio" class="w3-radio" name="team_oriented" value="8" id="">
                        7.<input type="radio" class="w3-radio" name="team_oriented" value="4" id=""> 8.<input type="radio" class="w3-radio" name="team_oriented" value="9" id="">
                        9.<input type="radio" class="w3-radio" name="team_oriented" value="5" id=""> 10.<input type="radio" class="w3-radio" name="team_oriented" value="10" id="">
                    </p>
                </div>

                <br>
                <div>
                    <input type="checkbox" class="w3-check" name="" id="respectful"> <strong> Respectful  </strong>

                    <p class="text-center" id="respectful_box" style="display:none">
                        1.<input type="radio" class="w3-radio" name="respectful" value="1" id=""> 2.<input type="radio" class="w3-radio" name="respectful" value="6" id=""> 
                        3.<input type="radio" class="w3-radio" name="respectful" value="2" id=""> 4.<input type="radio" class="w3-radio" name="respectful" value="7" id="">
                        5.<input type="radio" class="w3-radio" name="respectful" value="3" id=""> 6.<input type="radio" class="w3-radio" name="respectful" value="8" id="">
                        7.<input type="radio" class="w3-radio" name="respectful" value="4" id=""> 8.<input type="radio" class="w3-radio" name="respectful" value="9" id="">
                        9.<input type="radio" class="w3-radio" name="respectful" value="5" id=""> 10.<input type="radio" class="w3-radio" name="respectful" value="10" id="">
                    </p>
                </div>
        </div>

            <?php if($recommendation_request['faccepted'] == 0){ ?>
                <div class="row">

                    <div class="col s12">
                        <button type="submit" class="w3-button w3-black w3-right" onclick="return confirm('Are you sure you want to recommend this person?')">Recommend</button>
                    </div>

                </div>
            <?php } ?> 
             
                </form> 

                </div>

                </div> 

                    
            </div> 

            <br>


    </section>
      
                   
                    
                    </div>
                </div>
            
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

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

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


<script>

$(document).ready( function () {
    $('.table_id').DataTable();
} );

</script>


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



    <script>
    
    function RequestRecommendationsFunction() 
    {  
        var x = document.getElementById("request_recommendation_box");
        if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
    }


    function OfferRecommendationsFunction() 
    {  
        var x = document.getElementById("offer_recommendation_box");
        if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
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
            // if (x.style.display === "none") {
            //     x.style.display = "block";
            // } else {
            //     x.style.display = "none";
            // }

            alert(x.style.display);
        
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
        
        
    
    
</script>


<script>

$(".search_applicants").keyup(function(){

    var keyword = $(this).val();

    //alert(keyword)

    if(keyword != '')
    {

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


    }
	

    });

</script>


<script>

        $('body').on('click', '.name-box', function (){
        //e.preventDefault();

         var applicant_name = $(this).data('applicant_name');
         var applicant_id = $(this).data('applicant_id');
         var applicant_job_title = $(this).data('applicant_job_title');

         //alert(applicant_id);
        //alert("hi");

        $(".search_applicants").val(applicant_name);
        $("#applicant_id").val(applicant_id);
        $("#receiver_id").val(applicant_id);
        $("#receiver_namereceiver_name").val(applicant_name);
        $("#receiver_job_title").val(applicant_job_title);
        $(".suggestion-box").hide();
        
    });

</script>



<script>

$(".search_teams").keyup(function(){

    var keyword = $(this).val();

    //alert(keyword)

    if(keyword != '')
	{

		$.ajax({

        url: '<?php echo site_url(); ?>applicant/searchteams',
        type: "POST",
        data: {keyword:keyword},
        dataType: "json",
        beforeSend: function(){
			$("#search_applicants").css("background","#FFF url(LoaderIcon.gif) no-repeat 165px");
		},
        success: function(data) {
            //code to execute
            //alert(response.teams);
            
            $(".suggestion-box").show();
            $(".suggestion-box").html(data.teams);
            //alert(response.applicants);
        
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

$("#gen_impression").change(function() {
    if(this.checked) {
        //Do stuff
        $("#impression_box").show();
    }
    else{
        $("#impression_box").hide();
    }
});

$("#honesty").change(function() {
    if(this.checked) {
        //Do stuff
        $("#honesty_box").show();
    }
    else{
        $("#honesty_box").hide();
    }
});


$("#proactive").change(function() {
    if(this.checked) {
        //Do stuff
        $("#proactive_box").show();
    }
    else{
        $("#proactive_box").hide();
    }
});


$("#adaptable").change(function() {
    if(this.checked) {
        //Do stuff
        $("#adaptable_box").show();
    }
    else{
        $("#adaptable_box").hide();
    }
});


$("#team_oriented").change(function() {
    if(this.checked) {
        //Do stuff
        $("#team_oriented_box").show();
    }
    else{
        $("#team_oriented_box").hide();
    }
});


$("#respectful").change(function() {
    if(this.checked) {
        //Do stuff
        $("#respectful_box").show();
    }
    else{
        $("#respectful_box").hide();
    }
});

</script>





</html>
