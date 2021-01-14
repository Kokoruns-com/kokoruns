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
                    Messages  <span class="btn btn-primary" onclick="ComposeMessageFunction();">Compose</span>
                    
                    </h1>

        </div>


        <br>

        <section class="company-profile" style="padding-bottom:30px;">
                
                    
                <div id="compose-box" class="company-profile-container" style="display:none">   
    
                <section>
                            
                    <div class="">
                            
                        <div class="row">
                    
                            <div class="col-sm-12">
    
    
            <section id="team-box-divd" class="user-experiencesx">
             
    
    
                <div  class="experience-post-container" >
                    
                    <div class="exp-conts w3-white">
    
                    
    
                    <div class="experience_boxd"> 
    
                    
                        
                    <form class="" action="<?php echo site_url(); ?>school/createmessageaction" method="post">
    
                        <br>
                        <div class="row">
                                <label for="" class="col-lg-2">To: *</label>
                                <div class="col-lg-10">
                                    <div class="form-group">
                                    
                                        <input type="text" class="form-control search_applicants rounded-0" name="to" placeholder="Seach for name" required>
                                        <input type="hidden" name="receiver_id" id="receiver_id">
                                        <input type="hidden" name="sender_id" value="<?php echo $school_details['fschool_id']; ?>">
                                        <input type="hidden" name="sender_name" value="<?php echo $school_details['fschool_name'] ; ?>">
                                        <input type="hidden" name="parent_message_id" value="0">
                                        <div class="suggestion-box w3-light-grey">
                                                
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
    
    
                        <div class="row">
                        <label for="" class="col-lg-2">Subject: *</label>
                           <div class="col-lg-10">
                               <div class="form-group">
                               
                                   <input type="text" class="form-control rounded-0" name="subject" id="" required>
                                  
                               </div>
                           </div>
                       
                   </div>
                       
    
                        <div class="row">
                        <label for=""  class="col-lg-2">Message: *</label>
                            <div class="col-lg-10">
                                <div class="form-group">
                                 
                                <textarea class="form-control rounded-0" name="content" id="" cols="30" rows="5" required></textarea>
                                </div>
                            </div>
                        </div>
                        
                    
                       
                        <div class="row">
                            <div class="col-sm-12 text-right">
                                            
                                <button type="submit" class="w3-button w3-black w3-right">Send</button>
                                    
                            </div>
                        </div>
                            <br>
                        
                        </form> 
    
                        </div>
    
                        </div> 
    
                            
                    </div> 
    
    
                  
    
                    
                </section>
                   
                    
                    </div>
                </div>
            
            </div>
        
        </section>    
    
    
            
        </div>  
    
            
    </section>


        
        <section id="CompanyProfile" class="company-profile">
                
                    
            <div class="company-profile-container">
            
            


            <section>
                        
                <div class="">
                        
                    <div class="row">
                            <div class="col-sm-3">


                                 <section id="">


                            <div id="" class="experience-post-container">
                            
                            <div class="exp-cont w3-white">

                            <div class="experience_box"> 
                                
                        
                                    <div id="">
                                    
                                    <ul class="w3-ul w3-border" style="width:100%">
                                    <li><strong><a href="<?php echo site_url();?>school/messages/inbox" class="text-dark"> Inbox </a> </strong> (<?php echo $inbox_count; ?>)</li>
                                    <li><strong><a href="<?php echo site_url();?>school/messages/sent" class="text-dark">Sent </a> </strong>(<?php echo $sent_count; ?>)</li>
                                    </ul>

                                    </div> 
                            
                                </div>

                                <br>

                                </div> 

                                <br>
                                <br>
                                    
                            </div> 

                            
                        </section>
                
                    
                    </div>
                        <div class="col-sm-9">


        <section id="team-box-divd" class="user-experiences">
           


                <div id="" class="experience-post-container">


                
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
                                    <ul style="">
                                        <?php foreach (session()->getFlashdata('error') as $error) { ?>
                                            <li><?php echo $error ?></li>
                                        <?php } ?> 
                                    </ul>
                                </div>

                            <?php } ?>
         

                <div class="experience_box"> 
                    
               
                        <div id="">
                         <div class="w3-responsive">
                            <table class="w3-table w3-border w3-bordered w3-striped table_id">
                                <thead>
                                    <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php foreach ($inbox as $message) {?>

                                     <tr width="1%">
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td width="25%"><?php echo $message['fsender_name']; ?></td>
                                        <td width="73%"><a href="<?php echo site_url('school/emaildetails/'. $message['fmessage_id']); ?>"><strong><?php echo $message['fsubject']; ?></strong></a></td>
                                     </tr>

                                   <?php } ?>
                                </tbody>
                            </table>

                            </div> 
                        </div> 
                   

                

                    </div>

                    <br>

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

    $(document).ready( function () {
        $('.table_id').DataTable();
    } );

</script>
    
</html>
