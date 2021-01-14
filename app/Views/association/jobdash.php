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
                        <a class="dropdown-item" href="<?php echo site_url();?>association/dashboard">Dashboard</a>
                        <a class="dropdown-item" href="<?php echo site_url();?>association/search">Search</a>
                        <a class="dropdown-item" href="<?php echo site_url();?>association/messages/inbox" >Messages</a>
                        <a class="dropdown-item" href="<?php echo site_url();?>association/jobdash" >JobDash</a>
                        <a class="dropdown-item" href="<?php echo site_url();?>association/jobs">Jobs Board</a>
                        <a class="dropdown-item" href="<?php echo site_url();?>association/settings">Settings</a>
                        <a class="dropdown-item" href="<?php echo site_url();?>association/logout">Logout</a>
                    </div>
                </div>
            </div>

            </div>    
           
    </section>
        
   
        
        
    <div class="">

        <h2 class="company-profile-headerd text-center">
            JobDash <button onclick="CreateJobButton();" class="edit-profile-button cursor">Create Job</button>
        </h2>

    </div>


    <script>
        
        function CreateJobButton() {
           // document.getElementById("EditProfileButton").style.display="none";    
            
             var x = document.getElementById("CompanyProfileForm"); 
             if (x.style.display === "block") {
                x.style.display = "none";
             } else {
                x.style.display = "block";
            }   
        }   

    </script>  





        <section id="CompanyProfile" class="company-profile mt-5" style="padding-bottom:20px;">


            
       
        
           
            
<div class="company-profile-container" id="CompanyProfileForm" style="display:none;">

  
            <div class="row">
                <div class="col">
                    <h1> Create Job</h1>
                </div>
            </div>
<br>

<form action="<?php echo site_url();?>association/createjobaction" method="post">
<input type="hidden" name="association_id" value="<?php echo $association_details['fassociation_id']; ?>">
<input type="hidden" name="association_name" value="<?php echo $association_details['fassociation_name']; ?>">


        <div class="row">

            
            <div class="col-lg-7">

            <fieldset>

            <legend style="font-size:1rem;"><strong> Job Type </strong> </legend>

            <div class="row">

            <!-- <div class="col-lg-12 text-center"> -->
                    
                    
            <!-- </div> -->


                    <div class="col-lg-7">

                        <div class="form-group">

                        <label> <strong>Enter Career/Skill *</strong> </label>
            
                        <input type="text" name="job_title" id="" class="form-control rounded-0" required>
                        
                        </div>
                    
                    </div>

                    <div class="col-lg-5">

                        <div class="form-group">

                            <label>  <strong> Employment Type *</strong> </label>
                    
                            <select name="employment_type" id="" class="form-control rounded-0" required>
                                <option value="">Select one</option>
                                <option value="Full Time">Full Time</option>
                                <option value="Part Time">Part Time</option>
                                <option value="Remote">Remote</option>
                                <option value="Contract">Contract</option>
                                <option value="Internship">Internship</option>
                            </select>
                        
                        </div>
                    
                    </div>
                </div>

                </fieldset>

            </div>

            <div class="col-lg-5">
            <fieldset>

            <legend style="font-size:1rem;"><strong>Location </strong></legend>
            <div class="row">
        
                
                <div class="col-lg-6">

                    <div class="form-group">
                      

                        <label> <strong> State</strong> </label> 
                           
                            <select class="form-select form-control rounded-0"  id="state" name="state">
                                <option value="" selected="selected"> Any </option>
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
                    </div>
                
                    </div>
                    <div class="col-lg-6">

                        <div class="form-group">
                            <label> <strong> Local Govt Area </strong> </label> 
                            
                            <select class="form-select form-control rounded-0" id="lga" name="lga">
                                    <option value="">Any</option>
                            </select>  
                        </div>
                    
                    </div>
              
                </div>
                </fieldset>
            </div>
               
        </div> 
            <hr>
            <div> 
                <label><strong> Working Days *</strong></label> 
            </div>
            <div class="row text-center">
                <div class="col">
                    <div class="form-group">
                        <input type="checkbox" name="workdays[]" value="Monday"> <br> Monday
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <input type="checkbox" name="workdays[]" value="Tuesday"> <br> Tuesday
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                        <input type="checkbox" name="workdays[]" value="Wednesday"> <br>Wednesday
                    </div>
                  </div>
                 
                  <div class="col">
                    <div class="form-group">
                        <input type="checkbox" name="workdays[]" value="Thursday"> <br> Thursday
                    </div>
                  </div>
                  <div class="col">
                    <input type="checkbox" name="workdays[]" value="Friday"> <br> Friday
                  </div>
                  <div class="col">
                    <div class="form-group">
                        <input type="checkbox" name="workdays[]" value="Saturday"> <br> Saturday
                    </div>
                  </div>
                  <div class="col">
                     <div class="form-group">
                        <input type="checkbox" name="workdays[]" value="Sunday"> <br> Sunday
                    </div>
                  </div>
                
            </div>
           
            <hr>

           
            <div class="row">
               
                <div class="col-lg-6">
                <fieldset>
                <legend style="font-size:1rem;"><strong>Working Hours *</strong></legend>
                <input type="checkbox"  id="work_time" id=""> 9-5
                <br>
                <div class="row">
                    <div class="col">
                        <div class="form-group">

                            <label for="">From</label>
                            <input type="time" name="work_time_start" id="work_time_start" class="form-control rounded-0" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">To</label>
                            <input type="time" name="work_time_end" id="work_time_end" class="form-control rounded-0" required>
                        </div>
                    </div>
                    </div>
                    </fieldset>
                </div>

                <div class="col-lg-6">

                    <div class="col">
                        <div class="form-group">
                            <label><strong>Educational Qualification</strong></label> 
                            <select name="educational_qualification" id="" class="form-control rounded-0">
                            <option value="">Any</option>
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
                        </div>
                    </div>
                </div>
           
            </div>
            <hr>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label><strong>Job Description *</strong></label>
                        <textarea name="job_description" id="" rows="5" class="form-control rounded-0" required></textarea>
                    </div>
                </div>
            </div>
            <hr>

            <div class="row">
            
                <div class="col">
                    
                    <span>tags</span>
                    <span>tags</span>
                    <span>tags</span>
                </div>
            </div>


            <hr>

            <div class="row">
                <div class="col text-center">
                    <button id="job_submit" type="submit" class="w3-button w3-blue">CONTINUE</button>
                </div>
            </div> 
    </form>  

</div>

            
    
</div>  


</section>


        
<section id="CompanyProfile" class="company-profile">
        
        
            
        <div class="company-profile-container" >
        
            <h1 class="text-center">All Jobs</h1>

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

                     <div class="w3-responsive">
                            <table class="w3-table w3-bordered datatable">
                                <thead>
                                <tr>
                                    
                                    <th>Job Title</th>
                                    <th>Status</th>
                                    <th>View</th>
                                </tr>
                                </thead>
                                <tbody>

                              <?php foreach($jobs as $job){ ?>

                                <tr>
                                    
                                    <td><?php echo $job['fjob_title']; ?></td>
                                    <td>Active</td>
                                    <td>
                                        <a href="<?php echo site_url();?>association/job/<?php echo $job['fjob_id']; ?>">View</a>
                                    </td>
                                </tr>

                               <?php } ?>

                                </tbody>
                            </table>
                            </div>
            
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

        $('#job_submit').click(function() {
        checked = $("input[type=checkbox]:checked").length;

        if(checked < 1) {
            alert("You must choose at least 1 workday.");
            return false;
        }

    });
    </script>

    
</html>
