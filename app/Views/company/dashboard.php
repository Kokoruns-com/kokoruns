<!doctype html>
<html class="no-js" lang="en">

<head>
     <meta charset="utf-8">
     <meta http-equiv="x-ua-compatible" content="ie=edge">
     <meta name="description" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <title>Kokoruns</title>
    
    
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Company%20Profile/Company%20Info.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Company%20Profile/Events.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Company%20Profile/Gallery.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Company%20Profile/Profile.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Header%20and%20Footer/Footer.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/public/employerassets/Css/Header%20and%20Footer/Header%20&%20Nav%20Bar.css">
     
    
    
     <link rel="shortcut icon" href="<?php echo base_url();?>/public/employerassets/Images/Favicon.png" />
     <link class='webFontsCSSLink' href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
     <link rel="stylesheet" href="<?php echo base_url();?>/public/assets/Css/w3.css">

     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
     <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
     <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
    

<style>
    .cursor{
          cursor:pointer;
        }

        .repeat-remove{
            float:right;
            color: #FF0000;
        }

        #test_field_id[test_sub1][1]{
            display:none;
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
            <a href="<?php echo site_url(); ?>">
            <img class="logo" src="<?php echo base_url();?>/public/employerassets/Images/Header%20and%20Footer/Logo.png"></a>
                </div>
        
        
          <div class="topnav">

             <a href="<?php echo site_url();?>logout">Logout</a>
            
            </div> 
       
            </header>
    
    <body style="margin: 0px; background-color: #f5f5f5">
     
       <!--COMPANY PROFILE-->
        
       <section class="company-info-banner-container">
           
           <div class="company-info-banner">
           
           <div class="icons-div"> 
    

                
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
                           <a class="dropdown-item" href="<?php echo site_url();?>company/dashboard"> Dashboard</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>company/search">Search</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>company/messages/inbox" >Messages</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>company/jobdash" >JobDash</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>company/jobs">Jobs Board</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>company/settings">Settings</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>company/logout">Logout</a>
                        </div>
                    </div>
                </div>

            </div>
               
        </div>

        
               
        <div align="center" class="company-logo-div"> <img class="company-logo" src="<?php echo base_url();?>/public/employerassets/Images/Company%20%20Profile/Company%20Logo.png"> 
            </div>    
               
    <div align="center" class="company-name">Diamond Bank PLC.</div>           
               
    <div id="ViewInfo" align="center" class="view-company-info-div">
    <button align="center" class="view-company-info-button" onclick="ViewInfoButton()">View Info</button>           
    </div>  
    
    <!--VIEW INFO BUTTON SCRIPT-->
    <script> 
               
    function ViewInfoButton() {
    document.getElementById("ViewInfo").style.display="none";
        
    document.getElementById("HideInfo").style.display="block";
        
    document.getElementById("CompanyInfoCont").style.display="block";    
    } 
    
    </script>           
               
    <div id="HideInfo" align="center" class="hide-company-info-div">
    <button align="center" class="hide-company-info-button" onclick="HideInfoButton()">Hide Info</button>           
    </div>
               
    
    <!--HIDE INFO BUTTON SCRIPT-->
    <script> 
               
    function HideInfoButton() {
    document.getElementById("ViewInfo").style.display="block";
        
    document.getElementById("HideInfo").style.display="none";
        
    document.getElementById("CompanyInfoCont").style.display="none";    
    } 
    
    </script>                    
               
               
    <!--display-inline-block;-->           
    <div id="CompanyInfoCont" align="center" class="company-info-container">
        
     <div class="company-info">
        
     <label class="company-info-label">Website</label><br>
     <a target="_blank" href="#">www.diamondbanknigeria.com</a><br>
     <label class="company-info-label">About</label><br>
      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br>
     <label class="company-info-label">Mission Statement</label><br>
     Making banking easy for Nigerians     
      <br>
         
    </div>          
               
    </div>         
           
    </div>     
           
    </section>
        
        
     <div align="center" class="sections-banner">
                
            <button onclick="ProfileSectionButton(); return false;" class="sections cursor">Profile</button>
            &nbsp;  
         
            <button onclick="EventsSectionButton(); return false;" class="sections cursor">Events</button>
             &nbsp;
         
            <button onclick="GallerySectionButton(); return false;" class="sections cursor">Gallery</button>
         
         
         
         <!--SECTIONS BUTTONS SCRIPT-->
    <script> 
               
    function ProfileSectionButton() {
    document.getElementById("CompanyProfile").style.display="block";
        
    document.getElementById("Events").style.display="none";
        
    document.getElementById("Gallery").style.display="none";    
    } 
        
    function EventsSectionButton() {
    document.getElementById("CompanyProfile").style.display="none";
        
    document.getElementById("Events").style.display="block";
        
    document.getElementById("Gallery").style.display="none";    
    } 
        
    function GallerySectionButton() {
    document.getElementById("CompanyProfile").style.display="none";
        
    document.getElementById("Events").style.display="none";
        
    document.getElementById("Gallery").style.display="block";    
    }     
    
    </script>  
                
            </div>   
        
        
        <!--PROFILE-->
        
        <section id="CompanyProfile" class="company-profile">
        
            <div class="row company-profile-header-container">
                <div class="col-lg-6 text-right">
                    <h2>Company Profile</h2>    
                </div>
                <div class="col-lg-6 pl-3 pt-1">
                
                    <button onclick="EditProfileButton();" class="edit-profile-button cursor">Edit Profile</button>
                </div>
             </div>
             

        <!--EDIT PROFILE BUTTON SCRIPT-->
        <script>
        
        function EditProfileButton() {
           // document.getElementById("EditProfileButton").style.display="none";    
            
             var x = document.getElementById("CompanyProfileForm"); 
             if (x.style.display === "block") {
                x.style.display = "none";
             } else {
                x.style.display = "block";
            }   
        }   

        </script>        
                
        </div>
            
            
            
            
            
        <div class="edit-profile-form-container-padding" id="CompanyProfileForm">     
        <div class="edit-profile-form-container">
            
        <form id="edit-profile-form" class="edit-profile-form">  
        <!--div align="center" class="about-label">Edit Company Profile</div>
        <br><br-->      
        <div class="form-about-div">
            
        <div class="form-about-label">About</div>
            
            <div class="textarea-div">

                    <textarea class="form-about-textarea" name="about"><?php echo $company_details['fabout']; ?></textarea>
                
            </div>
         
        </div>   
            
        <div class="form-locations-div">
            
        <!--ITERATION 1-->
        
        <div class="form-locations-label">Locations</div>


        <?php $locations = explode("-", $company_details['flocations']); ?>

            
        <div class="input-div-1">


        <?php foreach ($locations as $location) {?>
           
         
        

                <input type="text" class="form-locations-input"  name="locations[]" value="<?php echo $location; ?>" style="width:85%;">


        <?php } ?>



                <div id="input-area1"></div>
                <div id="add-btn1" class="add-tag-button-div">   
                    <button type="button" class="add-tag-button" style="border: 1px solid #90EE90; color:#90EE90;">+ Add More</button>
                </div> 
      
           
        <!--ADD LOCATIONS BUTTON SCRIPT-->
           
        <script>
           
         function AddLocationsButton() {
             
             document.getElementById("AddLocationsButton").style.display="none";
             
             document.getElementById("Iteration2Locations").style.display="grid";
             
         }   
           
        </script>   
           
        </div>       
            
            </div>
            
        <div class="form-social-div">
        
        <div class="form-social-label">Socials</div>

        <?php $socials = explode("-", $company_details['fsocials']); ?>
            
     


        
        <?php foreach ($socials as $social) {?>
           
         <div class="row">
            <div class="col-sm-2">
                <select name="" id="" class="form-control">
                    <option value=""></option>
                    <option value="">Facebook</option>
                    <option value="">Twitter</option>
                </select>
            </div>
            <div class="col-sm-10">
                <input type="url" class="form-locations-input"  name="socials[]" value="<?php echo $social; ?>" style="width:85%;">
            </div>
         </div>
                        
         
        
          
         

         <?php } ?>



     
            <div id="input-area2"></div>
                <div id="add-btn2" class="add-tag-button-div">   
                    <button type="button" class="add-tag-button" style="border: 1px solid #90EE90; color:#90EE90;">+ Add More</button>
                </div> 
           
  
        
        </div> 
 
            
        <div align="right" class="edit-profile-form-buttons">
        <button onclick="location.reload();" class="edit-profile-cancel-button">Cancel</button>
            
        <button type="submit" class="edit-profile-finish-button">
        Update</button> 
        </div>     
           
        </form>
            
            </div> 
                </div>
            
            
            
            
            
            
            
        <div class="company-profile-container" id="company-profile-container">
        
          
            
            
        </div>  

        
        </section>
    
        
        <!--EVENTS-->
        
        <section id="Events" class="company-events">
        
        <div class="company-events-header-container"> 
            
                   

                <div class="col-lg-6 text-right">
                    <h2>Events</h2>    
                </div>
                <div class="col-lg-6 pl-3 pt-1">
                    <button onclick="AddEventButton()" class="add-event-button">Add Event</button>
                </div>
            
        <!--ADD EVENT BUTTON SCRIPT-->
        <script>
        
        function AddEventButton() {
        //document.getElementById("AddEventButton").style.display="none";    
          
       // document.getElementById("AddEventForm").style. display="block"; 

             var x = document.getElementById("AddEventForm"); 
             if (x.style.display === "block") {
                x.style.display = "none";
             } else {
                x.style.display = "block";
            }  


        }   


        function EditEventForm(clicked_id) {

            //alert(clicked_id);
           
            var x = document.getElementById("edit-event-form_"+clicked_id);
            //alert(x);
            if (x.style.display === "block") {
                x.style.display = "none";
             } else {
                x.style.display = "block";
            }

        }

        </script>          
         
         </div>    
            
            
    <div id="AddEventForm" class="add-event-container-padding">
        <div class="add-event-form-container">
            
        <form id="add-event-form" class="add-event-form">

        <input type="hidden" id="company_id" name="company_id" value="<?php echo $company_details['fcompany_id']; ?>">
         
        <div class="form-event-date-div">
        <div class="form-event-date-label">Start Date</div> 


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
          
        </div>
  

        <br>

        <div class="form-event-title-div">
        <div class="form-event-title-label">Title</div>
        <input class="form-event-title-input" name="title" style="width:100%;" required>    
        </div>
            
        <!-- <div class="form-event-requirement-div">
        <div class="form-event-requirement-label">Event Requirement</div>
        <input class="form-event-requirement-input" name="" style="width:100%;">    
        </div> -->
            
        <div class="form-event-description-div">
        <div class="form-event-description-label">Event Description</div>
        <textarea class="form-event-description-input" name="description" style="width:100%;" required></textarea>    
        </div>
            
        <div align="right" class="add-event-form-buttons">
        <button onclick="location.reload();" class="cancel-add-event-button">
        Cancel</button>
        <button type="submit" class="finish-add-event-button">
        Add</button>    
        </div>    
            
        </form>    
            
        </div> 
            </div> 
            


    <div id="posted-event-container">
  

    </div> 





        </section>
        
        
        <!--COMPANY GAllERY-->
        
        <section id="Gallery" class="company-gallery">
        
        <div class="company-gallery-header-container">
                <!-- <h2 class="company-gallery-header">
                Gallery    
                </h2>
                <div class="add-image-button-container">   
                            
                        
                                <button class="add-image-button" onclick='openfile("#file-input-images")'>Add Image</button>
                                <form id="image_upload_form">
                                        <input type="file" id="file-input-images" style="display:none;" accept="image/*">
                                </form>
                    </div>  -->
                <div class="col-lg-6 text-right">
                    <h2> Gallery </h2>    
                </div>
                <div class="col-lg-6 pt-1">
                        <button class="add-image-button" onclick='openfile("#file-input-images")'>Add Image</button>
                        <form id="image_upload_form">
                                <input type="file" id="file-input-images" style="display:none;" accept="image/*">
                        </form>
                </div>
        </div>
            
            <div align="center"  id="company-gallery-container" class="company-gallery-container">

            <div class="row porfolio-container-imagesc">
                   
                    <?php foreach ($company_gallery as $portfolio) {?>
                    
                        <div class="col-sm-4 mb-5">
                            <img class="image" src="<?php echo site_url('public/companygalleries/'.$portfolio['fimage']);?>" width="100%">
                            <span data-image_id="<?php echo $portfolio['frecno'];?>" data-image_name="<?php echo $portfolio['fimage'];?>" class="fa fa-times text-danger cursor delete-image" style="position:relative;top:-90px;right:35px;"></span>
                        </div>
                       

                    <?php } ?>

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


$("#edit-profile-form").submit(function(){
    

    var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>company/updateprofileaction',
        type: "POST",
        data: querystring,
        dataType: "json",
        success: function(response) {
            //code to execute
            //console.log(response);
            if(response.success == true)
            {
                //alert(response.success);
                //CancelExperience();
                //  $("#id02").hide();
                // $("#add_education-form").reset();
                $("#CompanyProfileForm").hide();
                loadcompanyprofile();
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

    function loadcompanyprofile()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>company/loadcompanyprofile",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
           
            //$('#other_skills').html(data.other_skills);

            //alert(data.company_profile);

            $('#company-profile-container').html(data.company_profile);
            
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            //alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      loadcompanyprofile();

</script>


<script>


$("#add-event-form").submit(function(){
    

    var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>company/createeventaction',
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
                $("#AddEventForm").hide();
                $("#AddEventForm").trigger("reset");
              loadcompanyevents();
              toastr.success('<p>Event created successfully</p>', {timeOut: 1000});
              
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


    $("body").on('submit' ,'#update-event-form', function(e){
    
        e.preventDefault();

    var querystring = $(this).serialize();
    
    //alert(querystring);

        $.ajax({
            url: '<?php echo site_url(); ?>company/updateeventaction',
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
                   
                //    load_experiences();
                $(".close-edit-event").hide();
                loadcompanyevents();
                 toastr.success('<p>Event updated successfully</p>', {timeOut: 1000});
                   
                //     $(".update-experience-form").trigger("reset");
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

  
        $("body").on('click' ,'.event-delete', function(e){
            e.preventDefault();

            var event_id = $(this).data('event_id');
           
            //alert(event_id);

            $.ajax({
                url: '<?php echo site_url();?>company/deleteeventaction',
                method:"POST",
                dataType: "json",
                data: {event_id:event_id},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                },
                success: function(response){
                    
                    if(response.success == true)
                    {
                        loadcompanyevents();
                        toastr.success('<p>Event deleted successfully</p>', {timeOut: 1000});
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

    function loadcompanyevents()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>company/loadcompanyevents",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
           
            //$('#other_skills').html(data.other_skills);

            //console.log(data.employer_events);

            //alert(data.employer_events);

           $('#posted-event-container').html(data.company_events);
            
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            //alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      loadcompanyevents();

</script>


<script>

$("#file-input-images").change(function(e){

    //alert("Hi");
            // e.preventDefault();

         var form_data = new FormData();
            
         var files = $('#file-input-images')[0].files[0];

        //console.log(files); 
            
            form_data.append('fileid',files);

            var company_id = $('#company_id').val();

           

            form_data.append('company_id', company_id);

            //console.log(form_data);

                $.ajax({
                    url: '<?php echo site_url();?>company/uploadgalleryaction',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    //dataType: "json",
                    data: form_data,
                    success: function(response){

                        $("#image_upload_form").trigger("reset");
                        // $(".image-padding").load(location.href + " .image-padding"); 
                        $("#company-gallery-container").load(location.href + " #company-gallery-container"); 
                        toastr.success('<p>Portfolio Image uploaded successfully</p>', {timeOut: 1000});

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

       
    $("body").on("click", ".delete-image", function (e) { 
            e.preventDefault();

           

            var image_id = $(this).data('image_id');
            var image_name = $(this).data('image_name');
                //alert(image_id);

            $.ajax({
                url: '<?php echo site_url();?>company/deletegalleryaction',
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
                        $("#company-gallery-container").load(location.href + " #company-gallery-container"); 
                        toastr.success('<p>Gallery Image deleted successfully</p>', {timeOut: 1000});
                        //$(".porfolio-container-imagesc").load(location.href + " .porfolio-container-imagesc");
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

$("#add-btn1").click(function(){
    var i = Math.floor(Math.random() * 10000000);
    $("#input-area1").append('<input type="text" data-id="'+i+'" id="location_'+i+'" name="locations[]" class="form-locations-input extra'+i+'" style="width:85%;"> <a class="btn btn-outline-danger btn-sm text-danger remove-input cursor" data-id="'+i+'" style="" id="locationbtn_'+i+'">- Remove </a><br>');
   
  });

</script>

<script>

$("#add-btn2").click(function(){
    var i = Math.floor(Math.random() * 10000000);
    $("#input-area2").append('<input type="text"  name="socials[]" class="form-locations-input" id="social_'+i+'" style="width:85%;"> <a class="btn btn-outline-danger btn-sm text-danger remove-input2" data-id="'+i+'" style="padding-top: 0;padding-bottom: 1px; height: 26px;" id="socialbtn_'+i+'">- Remove </a><br>');
   
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
    $("#input-area1").load(location.href + " #input-area1"); 
    
});

</script>


<script>

$("body").on("click", ".remove-input2", function (e) { 
    e.preventDefault();

    var id = $(this).data('id');

    //alert(id);

    // alert("hi");

    $("#social"+id+"").remove();
    $("#socialbtn_"+id+"").remove();
    $("#input-area2").load(location.href + " #input-area2"); 
    
});

</script>


<script>

    function openfile(a) {
        $(a).trigger('click');
            //alert("hi");
    }

</script>


    
</html>
