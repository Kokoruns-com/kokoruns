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
            
           

        <div class="row">

            <div class="col">
                
            </div>

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
            
    
        </section> 
        
   
               
                
                  


                                  
                            <section id="event-box-div" class="user-experience">
                            
                            <h1 class="skills-header" align="center">Events <small> <button onclick="CreateEventFunction();" class="exp-update-button cursor" style="font-size: 18px;">Add New</button></small></h1> 
                            


                     


                        <div id="create-event-box" class="experience-post-container" style="display:none;">
                            
                            <div class="exp-cont w3-white">

                            <div class="experience_box"> 

                          
                                
                                
                                
                          

                                
                                
                            <form action="<?php echo site_url();?>applicant/createeventaction" method="post">
                            <input type="hidden" name="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">


                            
                                    <div class="row">
                                        <div class="col-lg-6">
                                        <label for="">From*</label>
                                            <input type="datetime-local" class="form-control" name="from" id="from" required>
                                        </div>
                                        <br><br>
                                        <div class="col-lg-6">
                                        <label for="">To*</label>
                                            <input type="datetime-local" class="form-control" name="to" id="to" required>
                                        </div>
                                    </div>

                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                        <label for="">Title*</label>
                                            <input type="text" class="form-control" name="title" id="title" required>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <label for="">Description*</label>
                                            <textarea class="form-control" name="description" id="description" cols="30" rows="5" required></textarea>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <!-- <div class="col-sm-10">
                                            <label for="">Select Invitees</label>
                                            <input type="search" name="" id="" class="w3-input w3-border search_applicants">
                                            <div class="suggestion-box w3-light-grey"></div>
                                            <br>
                                        </div>
                                        <div class="col-sm-2">
                                        <button>Add</button>   
                                        </div> -->
                                        <div class="col-sm-12">
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-lg-6 col-sm-12">
                                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                                        Select Invitees
                                                            </button>

                                                        
                                                    </div>
                                                   
                                                </div>

                                                <br>


                                                <!-- The Modal -->
                                                        <div class="modal" id="myModal">
                                                        <div class="modal-dialog modal-dialog-scrollable">
                                                            <div class="modal-content">

                                                            <!-- Modal Header -->
                                                            <div class="modal-header">
                                                                <h4 class="modal-title">Select Invitees to This Event</h4>
                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                            </div>

                                                            <!-- Modal body -->
                                                            <div class="modal-body">
                                                               <div class="row">
                                                                    <div class="col-sm-12">
                                                                        <?php foreach($applicants as $applicant){ ?>

                                                                        <p><span><img src="<?php echo site_url('public/profilepics/600/'. $applicant['fprofile_image']);?>" alt="" width="10%"> <?php echo ucwords(strtolower($applicant['ffirst_name']. ' ' . $applicant['flast_name'])); ?></span> <span class="float-right"><input type="checkbox" name="invitees[]" class="w3-check" value="<?php echo $applicant['fapplicant_id']; ?>"></span></p>
                                                                        <hr>

                                                                        <?php } ?>
                                                                    </div>
                                                                   
                                                               </div>
                                                            </div>

                                                            <!-- Modal footer -->
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-primary" data-dismiss="modal">Done</button>
                                                            </div>

                                                            </div>
                                                        </div>
                                                        </div>
                                              
                                                <!-- <div class="input-group mb-3" id="invitees_box">
                                                    <!-- <input type="search" class="form-control search_applicants"  placeholder="Search Invitees"> -->
                                                    
                                                    <!-- <select name="invitees[]" id="" class="form-control search_applicants" multiple>
                                                        
                                                         <?php //foreach($applicants as $applicant){ ?>

                                                            <div class="row">

                                                                <div class="col-sm-7">
                                                                
                                                                </div>
                                                            
                                                            </div>

                                                            <option value="<?php //echo $applicant['fapplicant_id']; ?>"><?php echo $applicant['ffirst_name']. ' ' .$applicant['flast_name']; ?></option>

                                                        <?php //} ?>
                                                    
                                                    </select> -->

                                                <!-- </div> -->
                                                
                                            </div>
                                        </div>
                                    </div> 
                                        <div>

                                                <?php $i = 1; foreach($applicants as $applicant){ ?>
                                                    <!-- <input name="invitees[]" value="<?php //echo $applicant['ffirst_name'] ;?> <?php //echo $applicant['flast_name'] ;?>" readonly> -->
                                                <?php $i++; } ?>
                                            
                                            </div>
                                    </div>
                                   
                                    <br>
                                    <div class="row">
                                        <div class="col-sm-12">
                                                        
                                            <button type="submit" class="w3-button w3-black w3-right">Create</button>
                                                
                                        </div>
                                    
                                    </div>

                
                                   
                                
                                </form> 

                                </div>

                                </div>
                                    
                            </div> 


                            
                            <div class="experience-post-container">


                        
                            <div class="exp-cont w3-white">


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


                            <h4>My Events</h4>

                                <div class="experience_box"> 
                                    <div class="w3-responsive">
                                        <table class="w3-table w3-bordered datatable">
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
                                                    <td> <a href="<?php echo site_url('applicant/event/'. $event['fevent_id']); ?>"> <?php echo $event['ftitle']; ?> </a></td>
                                                    <td><?php echo $event['ffrom']; ?></td>
                                                    <td><?php echo $event['fto']; ?></td>
                                                    <td><?php echo $event['fdescription']; ?></td>
                                                    <td><a href="<?php echo site_url('applicant/event/'. $event['fevent_id']); ?>">View</a></td>
                                                </tr>
                                            <?php } ?>
                                            
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                </div> 

                                    
                            </div> 



                            <div id="" class="experience-post-container">
                            
                            <div class="exp-cont w3-white">

                            <h4>My Invites</h4>

                                <div class="experience_box"> 
                                    <div class="w3-responsive">
                                        <table class="w3-table w3-bordered datatable">
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
                                                    <td><a href="<?php echo site_url('applicant/event/'. $event['fevent_id']); ?>"> <?php echo $event['ftitle']; ?> </a></td>
                                                    <td><?php echo $event['ffrom']; ?></td>
                                                    <td><?php echo $event['fto']; ?></td>
                                                    <td><?php echo $event['fdescription']; ?></td>
                                                    <td><a href="<?php echo site_url('applicant/event/'. $event['fevent_id']); ?>">View</a></td>
                                                </tr>
                                            <?php } ?>
                                            
                                            </tbody>
                                        </table>
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
        $('.datatable').DataTable();
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
                //alert(xhr.responseText);
                //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            },
        });

    }

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
              $(".porfolio-container-documents").load(location.href + " .porfolio-container-documents"); 
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


$("#everybody_tick").change(function() {
    if(this.checked) {
        //Do stuff
        //alert("hi");
        $("#invitees_box").hide();
    }
    else{
        $("#invitees_box").show();
    }
});

</script>


<script>
       function CreateEventFunction() 
    { 
        var x = document.getElementById("create-event-box");

        if (x.style.display === "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }

    }
</script>


</html>
