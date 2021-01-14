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
    
    <script>
    
    </script>

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
    
    <header class="header-class" style="max-height:100px;">
           
             <div style="float: left">
            <a href="<?php echo site_url(); ?>">
            <img class="logo" src="<?php echo base_url();?>/public/employerassets/Images/Header%20and%20Footer/Logo.png"></a>
                </div>
        
        
          <div class="topnav">
            <a href="<?php echo site_url(); ?>logout">Logout</a>
          </div> 


         
       
    </header>
    
    <body style="margin: 0px; background-color: #f5f5f5">
     
       <!--COMPANY PROFILE-->
        
       <section class="company-info-banner-containerf ">
           
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
                           <a class="dropdown-item" href="<?php echo site_url();?>school/dashboard"> Dashboard</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>school/search">Search</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>school/messages/inbox" >Messages</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>school/jobdash" >JobDash</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>school/jobs">Jobs Board</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>school/settings">Settings</a>
                            <a class="dropdown-item" href="<?php echo site_url();?>school/logout">Logout</a>
                        </div>
                    </div>
                </div>

            </div>  
           
    </section>
        


        


          <div class="">

            <h1 class="skills-header w3-center">
                    Application Details for
                    
            </h1>

        </div>


        <br>


        
        <section id="CompanyProfile" class="company-profile">
                
                    
            <div class="company-profile-container">
            
            
            <section>
                        
                <div class="">
                        
                    <div class="row">
                       
                        <div class="col-sm-12">


                <section id="team-box-divd" class="user-experiences">
           


                <div id="" class="experience-post-container">


                
                <div class="exp-cont w3-white">

         

                        <div class="experience_box"> 
                    
                                <div id="">

                                <div class="w3-responsive">
                            <table class="w3-table w3-bordered">
                             
                                <tr>
                                    
                                    <th style="width: 25%;">Candidate Name</th>
                                    
                                    <td>
                                        <a href="employer/job/<?php //echo $job['fjob_id']; ?>"><?php echo $applicant_details['ffirst_name'] . ' ' . $applicant_details['flast_name']; ?></a>
                                    </td>
                                </tr>
                               
                                <tr>
                                    
                                    <th>Job Title</th>
                                    
                                    <td>
                                        <a href="<?php //echo site_url();?>"><?php echo $job['fjob_title']; ?></a>
                                    </td>
                                </tr>

                                <tr>
                                    
                                    <th>Status</th>
                                   
                                    <td>
                                        <a href="<?php //echo site_url();?>employer/job/<?php //echo $job['fjob_id']; ?>">View</a>
                                    </td>
                                </tr>

                              

                               
                            </table>


                            <br>

                            <section>
                                <div class="w3-container">
                                <div class="w3-row">
                                    <div class="w3-col s6">
                                        <h2 class="">MESSAGES(2)</h2>
                                    </div>
                                    <div class="w3-col s6 w3-right-align">
                                            <button type="button" class="btn btn-primary btn-sm" onclick="document.getElementById('id01').style.display='block'">New Message</button> 
                                    </div>
                                </div>
                                </div>
                            </section>


                            <hr>
            
                                    <section class="" style="margin-bottom: 1rem;">
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-sm-12 px-5">

                                            <?php foreach ($messages as $message) { ?>
                                           
                                                <p>
                                                    <i onclick="myFunction('demo_<?php echo $message['frecno']; ?>')" class="fa fa-plus-circle  cursor <?php if($message['fsender_id'] == $message['femployer_id']){ echo "text-danger";}else{echo "text-primary";} ?>"></i> From: <?php if($message['fsender_id'] == $message['femployer_id']){echo ucwords(strtolower($message['femployer_name'])); }else{ echo ucwords(strtolower($applicant_details['ffirst_name'])) . ' ' . ucwords(strtolower($applicant_details['flast_name']));} ?> <br>
                                                        Subject: <?php echo ucwords(strtolower($message['fsubject'])); ?>
                                                    <div id="demo_<?php echo $message['frecno']; ?>" class="w3-hide  w3-light-grey" style="padding: 1rem;">
                                                        <p><?php echo $message['fmessage']; ?></p>
                                                        <?php if($message['fsender_id'] != $message['femployer_id']){?>
                                                            <a class="text-primary cursor" onclick="myFunction('reply_<?php echo $message['frecno']; ?>')"> <i  class="fa fa-reply"></i></i> Reply</a> 
                                                            <div id="reply_<?php echo $message['frecno']; ?>" class="w3-hide w3-light-grey" style="padding: 1rem;">

                                                                <form id="reply_message">

                                                                    <input type="hidden" name="job_id" value="<?php if(!empty($messages)){echo $messages[0]['fjob_id']; };?>">
                                                                    <input type="hidden" name="job_title" value="<?php if(!empty($messages)){echo $messages[0]['fjob_title']; }?>">
                                                                    <input type="hidden" name="applicant_id" value="<?php if(!empty($messages)){echo $messages[0]['fapplicant_id']; }?>">
                                                                    <input type="hidden" name="applicant_name" value="<?php echo $applicant_details['ffirst_name'] . ' ' . $applicant_details['flast_name'];?>">
                                                                    <input type="hidden" name="employer_id" value="<?php if(!empty($messages)){echo $messages[0]['femployer_id'];}?>">
                                                                    <input type="hidden" name="employer_name" value="<?php if(!empty($messages)){echo $messages[0]['femployer_id'];}?>">
                                                                    <input type="hidden" name="subject" value="<?php echo $message['fsubject']; ?>">
                                                                    
                                                                    <textarea name="message" id="" cols="30" rows="2" class="form-control"></textarea>
                                                                    <br>
                                                                    <button type="submit">SEND</button>
                                                                </form>

                                                            </div>
                                                        <?php } ?>
                                                    </div>
                                                </p>


                                            <?php } ?>
                                            
                                        </div>
                                        </div>
                                    </div>
                                    </section>
                                    
                                    <hr>
                                    
                                    <section class="mb-5">
                                    <div class="container">
                                        <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <h2>MAKE A CHOICE</h2>
                                        </div>
                                        </div>
                                        <br>
                                        <form action="<?php echo site_url(); ?>employer/jobfinalchoice" method="post">
                                        
                                        <input type="hidden" name="job_id" value="<?php if(!empty($messages)){echo $messages[0]['fjob_id']; };?>">
                                        <input type="hidden" name="job_title" value="<?php if(!empty($messages)){echo $messages[0]['fjob_title']; }?>">
                                        <input type="hidden" name="applicant_id" value="<?php if(!empty($messages)){echo $messages[0]['fapplicant_id']; }?>">
                                        <input type="hidden" name="applicant_name" value="<?php echo $applicant_details['ffirst_name'] . ' ' . $applicant_details['flast_name'];?>">
                                        <input type="hidden" name="employer_id" value="<?php if(!empty($messages)){echo $messages[0]['femployer_id'];}?>">
                                        <input type="hidden" name="employer_name" value="<?php if(!empty($messages)){echo $messages[0]['femployer_id'];}?>">

                                        <div class="w3-row">
                                            <div class="w3-col s4">
                                                <input class="w3-radio cursor" type="radio" name="final_choice" value="Selected" <?php if(!empty($applicant_status)){ if($applicant_status['fstatus'] == "Selected"){echo "checked"; } }?> required > <label> <strong> Select Applicant</strong></label>
                                            </div>
                                            <div class="w3-col s4">
                                                <input class="w3-radio cursor" type="radio" name="final_choice" value="Kip" <?php if(!empty($applicant_status)){ if($applicant_status['fstatus'] == "Kip"){echo "checked"; } }?>> <label> <strong> Keep In View</strong></label>
                                            </div>
                                            <div class="w3-col s4">
                                                <input class="w3-radio cursor" type="radio" name="final_choice" value="Rejected" <?php if(!empty($applicant_status)){ if($applicant_status['fstatus'] == "Rejected"){echo "checked"; } }?>> <label> <strong> Reject Application</strong></label>
                                            </div>
                                        </div>  
                                    </div>
                                    </section>


                                    <button type="submit" onclick="return confirm('Are you sure you want to do this action?')" <?php if(!empty($applicant_status)){ if($applicant_status['fstatus'] == "Selected" || $applicant_status['fstatus'] == "Rejected" ){echo "disabled"; } } ?>>SUBMIT</button>

                                    </form>



                                    <div id="id01" class="w3-modal">
                                            <div class="w3-modal-content w3-animate-zoom w3-card-4">
                                                <header class="w3-container w3-blue"> 
                                                <span onclick="document.getElementById('id01').style.display='none'" 
                                                class="w3-button w3-display-topright">&times;</span>
                                                <h2>NEW MESSAGE</h2>
                                                </header>
                                                <div class="w3-container">
                                                <form action="<?php echo site_url();?>employer/sendjobdashmessage" method="post">

                                                <input type="hidden" name="job_id" value="<?php if(!empty($messages)){echo $messages[0]['fjob_id']; };?>">
                                                <input type="hidden" name="job_title" value="<?php if(!empty($messages)){echo $messages[0]['fjob_title']; }?>">
                                                <input type="hidden" name="applicant_id" value="<?php if(!empty($messages)){echo $messages[0]['fapplicant_id']; }?>">
                                                <input type="hidden" name="applicant_name" value="<?php echo $applicant_details['ffirst_name'] . ' ' . $applicant_details['flast_name'];?>">
                                                <input type="hidden" name="employer_id" value="<?php if(!empty($messages)){echo $messages[0]['femployer_id'];}?>">
                                                <input type="hidden" name="employer_name" value="<?php if(!empty($messages)){echo $messages[0]['femployer_id'];}?>">
                                                <div class="w3-padding">
                                                    <label class=""><b>Subject</b></label>
                                                    <input class="w3-input w3-border" type="text" name="subject">
                                                    <br>
                                                    <label><b>Message</b></label>
                                                        <textarea class="w3-input w3-border" name="message" id="" cols="30" rows="10"></textarea>
                                                    <br>
                                                    <button class="w3-btn w3-blue">Send</button>
                                                </div> 
                                                    </form>
                                                </div>
                                            
                                            </div>
                                            </div>
            




                            </div>
                            
                                </div> 

                        </div>


                    </div> 

                    <br>
                    <br>
                        
                </div> 

                
            </section>
               
                
                </div>
            </div>
        
        </div>
    
    </section>    


        
    </div>  

        
</section>
    
        
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



    
      
        
    </body>
    
  


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
        url: '<?php echo site_url(); ?>employer/updateprofileaction',
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
          url:"<?php echo site_url(); ?>employer/loadcompanyprofile",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
           
            //$('#other_skills').html(data.other_skills);

            //alert(data.employer_profile);

            $('#company-profile-container').html(data.employer_profile);
            
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
        url: '<?php echo site_url(); ?>employer/createeventaction',
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
              toastr.success('<p>event created successfully</p>', {timeOut: 1000});
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


    $("body").on('submit' ,'#update-event-form', function(e){
    
        e.preventDefault();

    var querystring = $(this).serialize();
    
    //alert(querystring);

        $.ajax({
            url: '<?php echo site_url(); ?>employer/updateeventaction',
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
                url: '<?php echo site_url();?>employer/deleteeventaction',
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
                    alert(xhr.responseText);
                    //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
                },

            });

            
        });


</script>


<script>

    function loadcompanyevents()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>employer/loadcompanyevents",
          method:"POST",
          dataType:"json",
          success:function(data)
          {
           
            //$('#other_skills').html(data.other_skills);

            //alert(data.employer_events);

            $('#posted-event-container').html(data.employer_events);
            
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

$('#image_upload_form').submit(function(e) 
 {

            e.preventDefault();

            var form_data = new FormData();
            
            var files = $('#fileid')[0].files[0];

            
            
            form_data.append('fileid',files);

            var employer_id = $('#employer_id').val();

            //alert(employer_id);

            form_data.append('employer_id', employer_id);


            // console.log(form_data);

                $.ajax({
                    url: '<?php echo site_url();?>employer/uploadgalleryaction',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(response){
                        alert(response);
                        // $("#image_upload_form").trigger("reset");
                        // $(".porfolio-container-imagesc").load(location.href + " .porfolio-container-imagesc"); 
                        // toastr.success('<p>Portfolio Image uploaded successfully</p>', {timeOut: 1000});

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

$("#add-btn1").click(function(){
    var i = Math.floor(Math.random() * 10000000);
    $("#input-area1").append('<input type="text" name="locations[]" class="form-locations-input extra'+i+'" id="extra'+i+'" style="width:85%;"> <button class="add-tag-button remove-input extra'+i+'" style="padding-top: 0;padding-bottom: 1px; height: 26px;">- Remove </button><br>');
   
  });

</script>

<script>

$("#add-btn2").click(function(){
    var i = Math.floor(Math.random() * 10000000);
    $("#input-area2").append('<input type="text" name="socials[]" class="form-locations-input extra'+i+'" id="extra'+i+'" style="width:85%;"> <button class="add-tag-button remove-input extra'+i+'" style="padding-top: 0;padding-bottom: 1px; height: 26px;">- Remove </button><br>');
   
  });

</script>





<script>

$(".remove-input").click(function (e) { 
    e.preventDefault();

this
    
});

</script>


<script>

    function openfile(a) {
    $(a).trigger('click');
    //alert("hi");
    }

</script>


<script>

    $('.datatable').DataTable();

</script>


<script>

$("#work_time").change(function() {
  if(this.checked) {
   alert("checked ");
    //get the values of the filled fields

    $("#work_time_start").val();
    $("#work_time_end").val();
 

  }

});

</script>

<script>

    function ComposeMessageFunction() 
    {  
        var x = document.getElementById("compose-box");
        if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
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


        $("#reply_message").submit(function(){
            

            var querystring = $(this).serialize();

            alert(querystring);

            // $.ajax({
            //     url: '<?php //echo site_url(); ?>employer/createeventaction',
            //     type: "POST",
            //     data: querystring,
            //     dataType: "json",
            //     success: function(response) {
            //         //code to execute
            //         //alert(response);
            //         if(response.success == true)
            //         {
            //             //alert(response);
            //             //CancelExperience();
            //             //  $("#id02").hide();
            //             // $("#add_education-form").reset();
            //         toastr.success('<p>event created successfully</p>', {timeOut: 1000});
            //         }
            //     },
            //     error: function(xhr, textStatus, errorThrown) {
            //             //code to execute
            //             alert(xhr.responseText);
            //             //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
            //         },
            //     });

            return false;
        });


        </script>


    <script>
        function myFunction(id) {
          var x = document.getElementById(id);
          if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
          } else {
            x.className = x.className.replace(" w3-show", "");
          }
        }
    </script>
    
</html>
