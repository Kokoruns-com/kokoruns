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
     <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"> 

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

     </style>


    
</head>
    
    <header class="header-class">
           
             <div style="float: left">
            <a href="index.html">
            <img class="logo" src="<?php echo base_url();?>/public/assets/Images/Logo.png"></a>
                </div>
        
        
          <div class="topnav">
            <a href="<?php echo site_url();?>logout"><i class="fa fa-power-off"></i></a>
       
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
                    <a href="#">Messages</a>
                    <a href="#">JobDash</a>
                    <a href="#">Events</a>
                    <a href="#">All About You</a>
                    <a href="#">Jobs Board</a>
                    <a href="#">Recommendations</a>
                    <a href="#">Logout</a>
                    <a href="#">Settings</a>
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
                
            <a id="exp-b" href="<?php echo site_url();?>applicant/dashboard" class="sections-div cursor">Experience</a>
                
                &nbsp;    
            <a id="edu-b"  href="<?php echo site_url();?>applicant/education" class="sections-div cursor">Education</a>
             
              &nbsp;    
            <a id="skill-b" href="<?php echo site_url();?>applicant/skills" class="sections-div cursor">Skills</a>
             
              &nbsp;    
            <a id="port-b" href="<?php echo site_url();?>applicant/portfolio" class="sections-div cursor">Portfolio</a>
              
              &nbsp;    
            <a id="link-b" href="<?php echo site_url();?>applicant/links" class="sections-div cursor">Links</a> 
                
            </div>
                
                </div>
            
        </section> 

        
        <?= $this->renderSection('content') ?>


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


<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
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
    
   
        
   
        
    function SkillsFunction() {
       
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="block";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        

    }
        
    function PortfolioFunction() {
       
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="block";
        
        document.getElementById("user-links").style.display="none";
    
    }
        
    function LinksFunction() {
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="block";
        
    } 
    
    function SearchFunction() {
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="block";
        
    } 


    function TeamFunction() {
        
        document.getElementById("user-experience").style.display="none";
        
        document.getElementById("user-education").style.display="none";
        
        document.getElementById("user-skills").style.display="none";
        
        document.getElementById("user-portfolio").style.display="none";
        
        document.getElementById("user-links").style.display="none";
        
        document.getElementById("search-box-div").style.display="none";

        document.getElementById("team-box-div").style.display="block";
        
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
           
            //alert(exp_id);

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



</html>







