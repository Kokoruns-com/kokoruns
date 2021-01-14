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
                <a href="<?php echo site_url();?>applicant/educations"><button id="edu-b" class="sections-div cursor">Education</button></a>
             
             
              &nbsp;    
              <a href="<?php echo site_url();?>applicant/portfolios"><button id="port-b"  class="sections-div cursor" style="border-bottom: solid 4px #0991ff;">Portfolio</button></a>
              
                
            </div>
        
         <br>
        
 
        <!--PORTFOLIO-->
        
      <section id="user-portfolio" class="user-portfolio">
        
            <h1 align="center" class="portfolio-header text-dark">Portfolio</h1> 
                

        <div class="porfolio-container-images" align="center">
            
            <h2 class="images-label">Images</h2>
            
            <br><br><br>
           
                <div class="row porfolio-container-imagesc">
                    <div class="col-sm-4 pr-5 mb-5">
                        <button class="delete-image-button" id="img-btn">
                            <form id="image_upload_form">
                            <input type="hidden" name="applicant_id" id="applicant_id" value="<?php echo $applicant_details['fapplicant_id']; ?>">
                            <input type="hidden" id="user_name" name="user_name" value="<?php echo $applicant_details['fuser_name']; ?>">  
                                <img class="image" onclick='openfile("#file-input-images")' src="<?php echo site_url();?>public/assets/Images/User%20Profile/add%20image.png">
                                <input type="file" id="file-input-images" name="fileUp" style="display:none;" accept="image/*">
                            </form>
                        </button>
                    </div>
                    <?php foreach ($applicant_portfolios as $portfolio) {?>
                    
                        <div class="col-sm-4 mb-5">
                            <img class="image" src="<?php echo site_url('public/portfoliopics/'.$portfolio['fimage']);?>" width="100%">
                            <span data-image_id="<?php echo $portfolio['frecno'];?>" data-image_name="<?php echo $portfolio['fimage'];?>" class="fa fa-times text-danger cursor delete-image" style="position:relative;top:-90px;right:35px;"></span>
                        </div>
                       

                    <?php } ?>

                </div>
        
            </div>
            
            
            <div class="porfolio-container-documents" align="center">
            
            <h2 class="images-label">Documents</h2>
            
            <br><br><br><br><br>

            <div class="row">
                <div class="col-sm-4 pr-5 mb-5">
                
                    <button class="delete-image-button">
                        <form id="doc_upload_form">
                            <img class="image" onclick='openfile2("#file-input-documents")' src="<?php echo base_url();?>/public/assets/Images/User%20Profile/add%20document.png">
                            <input type="file" id="file-input-documents" style="display:none;">
                        </form>
                    </button>
                
                </div>

            <?php foreach ($applicant_documents as $document) {?>

                <div class="col-sm-4 mb-5">
                    <!-- <img class="image" src="<?php //echo site_url('public/documentpics/'.$document['ffile_name']);?>"> -->
                    <i class="image fa fa-file-word-o" style="font-size:132px !important;"></i>
                    <span data-doc_id="<?php echo $document['frecno'];?>" data-doc_name="<?php echo $document['ffile_name'];?>" class="fa fa-times text-danger cursor delete-image2" style="position:relative;top:-110px;right:35px;"></span>
                </div>
            
            <?php } ?>
            
        
            </div>


            <hr>

            <hr>


            <h1 align="center" class="online-links-header">Online Links</h1>  


            

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
                    
                    
                    <a href="<?php echo $link['fweb_link']; ?>"><div class="skill-padding"><div class="skill"><?php echo $link['fweb_link']; ?>&nbsp;</a>
                    <button class="delete-skill-button" data-link_id="<?php echo $link['frecno'];?>">x</button>
                    </div></div>
                    
    
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

    function openfile(a) {
    $(a).trigger('click');
    //alert("ye");
    }

</script>

<script>

    function openfile2(a) {
    $(a).trigger('click');
    //alert("ye");
    }

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

    $("#image_upload_form").change(function(e){
            //alert("A file has been selected.");
             e.preventDefault();

             var form_data = new FormData();

             var files = $('#file-input-images')[0].files[0];
            // //alert("Hi");

             form_data.append('fileid',files);


            var applicant_id = $('#applicant_id').val();


            var username = $('#user_name').val();


            form_data.append('applicant_id', applicant_id);

            form_data.append('user_name', username);

            //console.log(form_data);

            // Display the key/value pairs
            // for (var pair of form_data.entries()) {
            //     console.log(pair[0]+ ', ' + pair[1]); 
            // }


            $.ajax({
                    url: '<?php echo site_url();?>applicant/uploadportfolioaction',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(response){
                        //alert(response);
                        //alert(response);
                        // $("#image_upload_form").trigger("reset");
                        // $(".image-padding").load(location.href + " .image-padding"); 
                        // $(".porfolio-container-images").load(location.href + " .porfolio-container-images"); 
                        // toastr.success('<p>Portfolio Image uploaded successfully</p>', {timeOut: 1000});
                        // location.reload(true);
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Portfolio Image added successfully');

                        setTimeout(function() {
                            location.reload(true);
                        }, 1000);

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

    $("#doc_upload_form").change(function(e){
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

            //  for (var pair of form_data.entries()) {
            //     console.log(pair[0]+ ', ' + pair[1]); 
            // }


            $.ajax({
                    url: '<?php echo site_url();?>applicant/uploaddocumentaction',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    data: form_data,
                    success: function(response){
                        //alert(response);
                        // toastr.success('<p>Document uploaded successfully</p>', {timeOut: 1000});
                        // location.reload(true);
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Document uploaded successfully');

                        setTimeout(function() {
                            location.reload(true);
                        }, 1000);

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
                        // location.reload(true);
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Portfolio Image deleted successfully');

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

        $('.delete-image2').click(function (e) { 
            e.preventDefault();

            //alert("hi");

            var doc_id = $(this).data('doc_id');
            var doc_name = $(this).data('doc_name');
            //alert(doc_name);

            $.ajax({
                url: '<?php echo site_url();?>applicant/deleteducumentaction',
                method:"POST",
                dataType: "json",
                data: {doc_id:doc_id, doc_name:doc_name},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                },
                success: function(response){
                    //alert(response);
                    if(response.success == true)
                    {
                        // toastr.success('<p>Document deleted successfully</p>', {timeOut: 1000});
                        // location.reload(true); 
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Document deleted successfully');

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
            //  toastr.success('<p>Web Link added successfully</p>', {timeOut: 1000});
            //  location.reload(true); 
             alertify.set('notifier','position', 'top-right');
            alertify.success('Web Link added successfully');

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

        $('.delete-skill-button').click(function (e) { 
            e.preventDefault();

            //alert("hi");

            var link_id = $(this).data('link_id');
            //alert(link_id);

            $.ajax({
                url: '<?php echo site_url();?>applicant/deleteweblinkaction',
                method:"POST",
                dataType: "json",
                data: {link_id:link_id},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                },
                success: function(response){
                    //alert(response);
                    if(response.success == true)
                    {
                        // toastr.success('<p>Link deleted successfully</p>', {timeOut: 1000});
                        // location.reload(true);   
                        alertify.set('notifier','position', 'top-right');
                        alertify.success('Link deleted successfully');

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

    function SuccessAlert() {
        alertify.set('notifier','position', 'top-right');
        var delay = alertify.get('notifier','delay');
        alertify.set('notifier','delay', 10);
        alertify.success('Profile Image Successfully changed');
        alertify.set('notifier','delay', delay);
    }
                          
</script>


</html>
