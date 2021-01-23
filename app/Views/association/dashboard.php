<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kokoruns - Association</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css">

    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />


  <style>


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

    #navbar {
    background-color: #fff;
    position: fixed;
    top: -50px;
    width: 100%;
    height: 55px;
    display: block;
    transition: top 0.3s;
    z-index: 1;
    }

    /* #navbar a {
    float: left;
    display: block;
    color: #000;
    text-align: center;
    padding: 15px;
    text-decoration: none;
    font-size: 17px;

    }

    #navbar a:hover {
    background-color: #ddd;
    color: black;
    } */


    body
    {
        font-family: "Helvetica Neue", Helvetica, sans-serif !important; 
    }

    .header-title
    {
        font-size: 40px;
    }


    .title
    {
        font-size: 31px;
        color: #707070;
    }

    .text-details
    {
        font-size: 27px;
        color: #707070;
    }


    .edit-btn
    {
        color: #45ACDA;
    }

    .side-box
    {
        font-size: 18px;
        color: #707070;
    }

    .branch-box
    {
        font-size: 16px;
        color: #707070;
    }

    .background_image
    {
        background: url('https://i.pinimg.com/originals/f9/20/c8/f920c8b2b94109fd0eef7eefae132db8.jpg') no-repeat; width:100%; background-size: cover;
    }


    .imageThumb {
    max-height: 75px;
    border: 2px solid;
    padding: 1px;
    cursor: pointer;
    }

    .pip {
        display: inline-block;
        margin: 10px 10px 0 0;
    }
    .remove {
    display: block;
    background: #444;
    border: 1px solid black;
    color: white;
    text-align: center;
    cursor: pointer;
    }
    .remove:hover {
    background: white;
    color: black;
    }

    input[type="file"] {
     display: block;
    }


    .info-box{
        position: fixed; top: 93px; right: 0; width: 100%;
        
    }


</style>


</head>
    <body style="background:#f5f5dc;">


        <header class="container-fluid bg-white" style="position: fixed; top: 0; width: 100%; z-index: 9; border-bottom: 1px solid #ccc;">

              <nav class="p-2">
                
                  <a class="navbar-brand" href="#">
                    <img src="https://kokoruns.com/public/assets/Images/Header%20and%20Footer/Logo.png" alt="Logo" style="width:200px;">
                  </a>
                 
                    <a href="<?php echo site_url(); ?>logout" class="float-right pt-4">
                            <i class="fa fa-power-off" data-toggle="tooltip" title="Logout"></i>
                    </a>

              </nav>
              
        </header>


    <div id="navbar" style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);">
        <div class="row pt-3 pb-5 pl-5">
            <div class="col-sm-8 pl-5">
                <img src="https://www.synergynigeria.com/wp-content/uploads/2016/06/ICAN-Logo-227x300.jpg" alt="" width="5%;" height="70%"> &nbsp;
                <span> <strong> The Institute Of Chartered Accountants Of Nigeria </strong> </span>
            </div> 
            <div class="col-sm-4 text-center">
                <a class="btn btn-primary btn-sm text-white">Follow</a>
            </div>
        </div>
    </div>

    <div class="container-fluid" style="margin-top: 5.8rem;">
        <div class="row">
            <div class="col-lg-9 pl-3">
                <div class="p-3 bg-dark background_image">
                    <div class="row py-2">
                        <div class="col-lg-1">
                            <i class="fa fa-envelope fa-lg text-white"></i>
                        </div>
                        <div class="col-lg-6 text-right pt-3" style="padding-right: 1.3rem;">
                                <img src="https://www.synergynigeria.com/wp-content/uploads/2016/06/ICAN-Logo-227x300.jpg" style="border: 10px solid #fff;" alt="logo" width="120px" height="120px">
                        </div>
                        <div class="col-lg-5 text-right">
                            <!-- //<i class="fas fa-bars fa-lg text-white"></i> -->
                           
                            <div class="dropdown dropleft float-right">
  
                                <i class="fas fa-bars text-white cursor fa-lg" data-toggle="dropdown"></i>
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
                    <div class="row py-2">
                        <div class="col-lg-12 text-center text-white">
                               <h4 class="header-title">The Institute Of Chartered Accountants Of Nigeria</h4>
                        </div>
                        
                    </div>
                    <div class="row py-2">
                    
                        <div class="col">
                            <div class="">
                               <button class="btn bg-white btn-block btn-sm rounded-0 tab" onclick="ProfileFunction()" id="profile_tab_btn">Profile</button>
                            </div>
                        </div>

                        <div class="col">
                            <div class="">
                                <button class="btn btn-danger btn-sm btn-block rounded-0 tab" onclick="EventFunction()" id="events_tab_btn">Events</button>
                            </div>
                        </div>

                        <div class="col">
                            <div class="">
                                <button class="btn btn-danger btn-sm btn-block rounded-0 tab" style="background: #DC232D" onclick="ESolutionsFunction()">E-Solutions</button>
                            </div>
                        </div>

                        <div class="col">
                            <div class="">
                                <button class="btn btn-danger btn-sm btn-block rounded-0 tab" onclick="EBroadcastFunction()">E-Broadcast</button>
                            </div>
                        </div>

                        <div class="col">
                            <div class="">
                                <button class="btn btn-danger btn-sm btn-block rounded-0" onclick="GalleryFunction()">Gallery</button>
                            </div>
                        </div>
 
                    </div>

                    </div>


                    <br>

                    <?php if(!empty(session()->getFlashdata('success'))){ ?>

                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> <?php echo session()->getFlashdata('success');?>
                    </div>
                        
                    <?php } ?>

                    <?php if(!empty(session()->getFlashdata('error'))){ ?>

                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                            <strong>Sorry!</strong> <?php echo session()->getFlashdata('error');?>
                        </div>

                    <?php } ?>

                    
                <div>
                    <div class="row border mt-2 mb-5 bg-white" id="profile-box" style="margin: .01rem;">
                        <div class="col p-3">
                            <h4 class="title">About <span class="float-right btn btn-info btn-sm rounded-0 py-0 text-white edit-btn" style="background:#3090C7" data-toggle="modal" data-target="#aboutModal">Edit</span></h4>
                            <p id="about_section" class="text-details"><?php echo $association_details['fabout']; ?></p>

                                <hr>

                                <h4 class="title">Branches </h4> 

                                <button class="btn btn-info btn-sm rounded-0 text-white edit-btn" style="background:#3090C7" id="add-event-btn" data-toggle="modal" data-target="#createBranchModal">Add New</button>
                                
                                <br><br>


                                <div id="branches_section">


                                    <div class="row">
                            
                                        <?php foreach ($association_branches as $branch) { ?>


                                            <div class="col-lg-4">

                                                <fieldset class="p-2 border rounded mb-2">
                                                    <span class="badge badge-info" style="font-size: 14px;">Branch Details</span>
                                                    <p class="m-0 "> <span class="branch-box"> Name: </span> <?php echo $branch['fbranch_name']; ?></p>
                                                    <p class="m-0"> <span class="branch-box">Address: </span> <?php echo $branch['fbranch_address']; ?></p>
                                                    <p class="m-0"> <span class="branch-box"> Manager Name: </span> <?php echo $branch['fbranch_manager']; ?></p>
                                                    <p class="m-0"> <span class="branch-box" >Phone No.: </span>  <?php echo $branch['fbranch_phone']; ?></p>

                                                 
                                                    <div class="text-right pt-0">
                                                        <i class="fa fa-edit text-warning  branch_edit_btn cursor edit-btn" data-recno="<?php echo $branch['frecno']; ?>" data-branch_name="<?php echo $branch['fbranch_name']; ?>"  data-branch_address="<?php echo $branch['fbranch_address']; ?>"  data-branch_manager="<?php echo $branch['fbranch_manager']; ?>"  data-branch_phone="<?php echo $branch['fbranch_phone']; ?>"  data-branch_email="<?php echo $branch['fbranch_email']; ?>" data-toggle="tooltip" title="Edit"></i>
                                                        <i class="fa fa-trash text-danger deletebranch cursor" data-recno="<?php echo $branch['frecno']; ?>" data-toggle="tooltip" title="Delete"></i>
                                                    </div>
                                                </fieldset>

                                            </div>

                                        <?php } ?>

                                    </div>

                                </div>
                                <hr>

                                <h4 class="title">Socials <span class="float-right btn btn-info btn-sm rounded-0 py-0 text-white edit-btn" style="background:#3090C7" data-toggle="modal" data-target="#socialModal">Edit</span></h4> 
                                <p><i class="fab fa-linkedin fa-lg" style="color: #0A66C2"></i> LinkedIn : <?php echo $association_details['flinkedin']; ?></p>
                                <p><i class="fab fa-facebook-square fa-lg" style="color: #0C88EF"></i> Facebook : <?php echo $association_details['ffacebook']; ?></p>
                                <p><i class="fab fa-instagram fa-lg" style="background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fdf497 5%, #fd5949 45%,#d6249f 60%,#285AEB 90%);background-clip: text; text-fill-color: transparent;"></i> Instagram : <?php echo $association_details['finstagram']; ?></p>

                                <hr>

                                <h4 class="title">Tags</h4> 
                        </div>
                    </div>

                 <div id="events-box" style="display:none;">

                    <!-- <div class="row mt-2 mb-2 bg-white border" style="margin-left: .08rem; margin-right: .009rem;">
                        <div class="col p-3">

                            

                        </div> 
                            
                    </div> -->
                    <div class="mb-5 mt-5" style="margin-left: .08rem; margin-right: .009rem; ">
                            <div>
                           

                        <h4 class="title px-2">Published Events <button class="btn btn-info btn-sm rounded-0 text-white float-right" style="background:#3090C7" id="add-event-btn" data-toggle="modal" data-target="#createEventModal">Create Event</button></h4>
                        <br>

                                   


                                    <div id="posted-event-container" style="padding-left:0;">

                                    </div>

                            </div>
                        </div>
                         
                </div>

                </div>


                
                <div class="mt-2 mb-5" id="ebroadcast-box" style="display:none;">
					<div class="p-3 border bg-white">
					
						<h4 class="text-center title">Send Out Important Message To a Large Audience</h4>
						<br>
						<form id="ebroadcast_form">
							<div class="row">

								<div class="col">
									<div class="border p-3">
										<p><strong> Compose Message</strong></p>
										<label for="">Subject</label>
										<input type="text" name="subject" id="subject" class="form-control" required>
										<br>
										<input type="hidden" name="sender" value="<?php echo $association_details['fassociation_id']; ?>">
										<input type="hidden" name="sender_name" value="<?php echo $association_details['fassociation_name']; ?>">
										<label for="">Message</label>
										<textarea name="message" id="message" class="form-control"  cols="30" rows="8" required></textarea>

										<br>
										<label><strong>Select Target Group</strong></label> <br>
									
										<input type="radio" name="target" > Members &nbsp; <input type="radio" name="target" id="target"> Followers

										<br>
										<button class="float-right btn btn-info btn-sm rounded-0  text-white" style="background:#3090C7" type="submit">SEND</button>
										<br>
									</div>
								</div>
								
							</div>
						</form>

					</div>
                 

                        <div class="col p-3 border bg-white mt-2">


                            <div class="p-3 ">

                                    <h4 class="title">Sent Broadcasts</h4>

                                    <div id="broadcast_list_area">
                                    
                                        
                                    </div>
                            </div>

                        </div>

					</div>



                <div class="row mt-2 mb-5" id="gallery-box" style="display:none;">
                   
                        <div class="col">

                            <div class="portfolio_box bg-white">

                                <div class="row p-2">
                                    <div class="col-sm-6 text-center">
                                    <div class="pt-5 m-3">
                                        <label for="file-input-images"><i class="fas fa-upload fa-5x border p-3 border-dark"></i></label>
                                            <input type="hidden" id="association_id" value="<?php echo $association_details['fassociation_id']; ?>">
                                            <form id="image_upload_form">
                                            
                                                <input type="file" id="file-input-images" hidden/>

                                            </form>
                                        </div>
                                    </div>

                                    

                                    <?php foreach ($association_gallery as $portfolio) {?>

                                        <div class="col-sm-6">
                                            <div class="border m-2">
                                                <img src="<?php echo site_url('public/associationgalleries/600/'.$portfolio['fimage']);?>" alt="" width="100%">
                                                <span data-image_id="<?php echo $portfolio['fimage_id'];?>" data-image_name="<?php echo $portfolio['fimage'];?>" class="fa fa-times text-danger cursor delete-image" style="position:relative;top:-234px;left:438px;"></span>
                                            </div>
                                        </div>

                                        
                                        
                                    <?php } ?>

                                    
                                    
                                    

                                </div>
                                
                                </div>

                            </div>
                            
                        </div>
            
            </div>



           
            <div class="col-lg-3 pl-0 info-box">
               <div class="border p-2 bg-white">
                    <div id="info_section">
                   <p class="side-box mb-0">  Members</p>
                    554
                    
                    <p class="side-box mt-2 mb-0">  CAC Registration </p>
                    <?php echo $association_details['fcac']; ?>

                        <p class="side-box mt-2 mb-0">  Official Website </p>
                        <?php echo $association_details['fwebsite']; ?>

                            <p class="side-box mt-2 mb-0">  Field </p>
                            <?php echo $association_details['ffield']; ?>

                                <p class="side-box mt-2 mb-0">  Headquarters </p>
                                <?php echo $association_details['fmain_office_location_state']; ?>

                    <p class="side-box mt-2 mb-0">  Email </p>
                    <?php echo $association_details['fassociation_contact_email']; ?>

                  </div>

                  <br>

                    <button class="btn btn-info btn-sm rounded-0 py-0 text-white edit-btn" id="info-btn" style="background:#3090C7" data-recno="<?php echo $association_details['frecno']; ?>" data-cac="<?php echo $association_details['fcac']; ?>" data-website="<?php echo $association_details['fwebsite']; ?>" data-field="<?php echo $association_details['ffield']; ?>" data-main_office_state="<?php echo $association_details['fmain_office_location_state']; ?>" data-main_office_lga="<?php echo $association_details['fmain_office_location_lga']; ?>" data-contact_email="<?php echo $association_details['fassociation_contact_email']; ?>">Edit</button> 
               
               </div>


                
               <div class="border p-2 bg-white mt-2">
                    <div id="info_section">
                  
                  <p>Add a page Sub-Admin </p>

                 <form action="<?php echo site_url(); ?>association/makeadmin" method="post">
                   <div class="input-group mb-3">
                    <input type="hidden" name="association_id" value="<?php echo $association_details['fassociation_id']; ?>">
                    <input type="text" class="form-control form-control-sm rounded-0" name="user_id" placeholder="Enter User's Kokoruns' ID e.g john.smith">
                    <div class="input-group-append">
                        <button class="btn btn-success btn-sm" type="submit">Add</button>
                    </div>
                    </div>
                 </form>
                  </div>

                  <br>

                  
                <div>
                            <!-- <p>Sub-Admins List</p> -->
                    <ol>
                        <?php foreach ($association_admins as $admin) { ?>
                                <li><?php echo $admin['fsubadmin_name']; ?> <a href="<?php echo site_url('association/removeadmin/'. $admin['frecno']); ?>">remove</a></li>
                        <?php } ?>
                    </ol>
                </div>
                  
               
               </div>

            </div>
        </div>
    <!-- </div> -->

  



    <!-- </div> -->



    <!-- About Modal -->
    <div class="modal fade" id="aboutModal">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
            <form id="aboutform">
                <!-- Modal Header -->
                <div class="modal-header">
                    <p class="modal-title"><strong> Edit About </strong></p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                
        
                <!-- Modal body -->
                <div class="modal-body">
                    <textarea name="about"  cols="30" rows="5" class="form-control"><?php echo $association_details['fabout']; ?></textarea>
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                </div>
            </form>

        </div>
        </div>
    </div>


     <!-- Add Branche Modal -->
     <div class="modal fade" id="createBranchModal">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
            <form id="createbranchform">
                <!-- Modal Header -->
                <div class="modal-header">
                    <p class="modal-title"><strong> Create New Branch</strong></p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Branch Name:</label>
                                <input type="text" class="form-control" id="branch_name" name="branch_name" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Branch Manager:</label>
                                <input type="text" class="form-control" id="branch_manager" name="branch_manager" required>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Branch Address:</label>
                                <textarea name="branch_address" class="form-control"  cols="30" rows="3" required></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Branch Phone:</label>
                                <input type="number" class="form-control" id="branch_phone" name="branch_phone" required>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Branch Email:</label>
                                <input type="email" class="form-control" id="branch_email" name="branch_email" required>
                            </div>
                        </div>
                    </div>
                     
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="reset" class="btn btn-danger btn-sm float-right">Clear</button>
                    <button type="submit" class="btn btn-success btn-sm">Add</button>
                </div>
            
            </form>
        </div>
        </div>
    </div>

      <!-- Branches Modal -->
      <div class="modal fade" id="EditBranchModal">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
            <form id="editbranchform">
                <!-- Modal Header -->
                <div class="modal-header">
                    <p class="modal-title"><strong> Edit Branch</strong></p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Branch Name:</label>
                                <input type="hidden" id="recno" name="id">
                                <input type="text" class="form-control form-control-sm rounded-0" id="edit_branch_name" name="branch_name">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Branch Manager:</label>
                                <input type="text" class="form-control form-control-sm rounded-0" id="edit_branch_manager" name="branch_manager">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Branch Address:</label>
                                <textarea id="edit_branch_address" name="branch_address" class="form-control form-control-sm rounded-0"  cols="30" rows="3"></textarea>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Branch Phone:</label>
                                <input type="text" class="form-control form-control-sm rounded-0" id="edit_branch_phone" name="branch_phone">
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Branch Email:</label>
                                <input type="text" class="form-control form-control-sm rounded-0" id="edit_branch_email" name="branch_email">
                            </div>
                        </div>
                    </div>
                
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
        </div>
    </div>



      <!-- Socials Modal -->
      <div class="modal fade" id="socialModal">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
            <form id="socialform">
                <!-- Modal Header -->
                <div class="modal-header">
                    <p class="modal-title"><strong> Edit Socials </strong></p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">LinkedIn:</label>
                        <input type="hidden" name="id"  value="<?php echo $association_details['frecno']; ?>">
                        <input type="text" class="form-control"  name="linkedin"  value="<?php echo $association_details['flinkedin']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Facebook:</label>
                        <input type="text" class="form-control" name="facebook" value="<?php echo $association_details['ffacebook']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="email">Instagram:</label>
                        <input type="text" class="form-control" name="instagram" value="<?php echo $association_details['finstagram']; ?>">
                    </div>
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Update</button>
                </div>
            </form>

        </div>
        </div>
    </div>


    <!-- Socials Modal -->
    <div class="modal fade" id="EditInfoModal">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content rounded-0">
            <form id="editinfoform">
                <!-- Modal Header -->
                <div class="modal-header">
                    <p class="modal-title"><strong> Edit Info </strong></p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="email">CAC Reg No.:</label>
                        <input type="hidden" name="recno" id="info_recno">
                        <input type="text" class="form-control" id="cac" name="cac">
                    </div>
                    <div class="form-group">
                        <label for="email">Official Website:</label>
                        <input type="text" class="form-control"  id="website" name="website">
                    </div>
                    <div class="form-group">
                        <label for="email">Field:</label>
                        <input type="text" class="form-control"  id="field" name="field">
                    </div>
                    <div class="form-group">
                        <label for="email">Headquarters:</label>
                        <input type="text" class="form-control"  id="main_office_location" name="main_office_location">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email">
                    </div>
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>

        </div>
        </div>
    </div>



    <!-- Create Event Modal -->
    <div class="modal fade" id="createEventModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-0">
           
                <!-- Modal Header -->
                <div class="modal-header rounded-0 py-2" style="background: #70a1B9">
                    <p class="modal-title text-white"><strong> Event Details</strong></p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
        
                <!-- Modal body -->
                <div class="modal-body pt-0">

                    <div id="create-event-box">

                        <form id="createEventform">
                       
                            <div class="row">
                                <div class="col-lg-7">
                                   
                                    <div class="pt-0">
                                        <label for="" class="mb-0 mt-1">Title</label><span class="text-danger">*</span><br>
                                        <input type="hidden" name="author" value="<?php echo $association_details['fassociation_id']; ?>">
                                        <input type="text" name="event_title" id="event_title" class="form-control form-control-sm rounded-0 mt-0" required>
                                    </div>
                                  
                                </div>
                                <div class="col-lg-5">
                                   
                                    <div class="pt-0">
                                        <label for="" class="mb-0 mt-1">Event Online Link</label><br>
                                       
                                        <input type="url" name="event_title" id="event_title" class="form-control form-control-sm rounded-0 mt-0">
                                    </div>
                                  
                                </div>
                            </div>
                                   

                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="" class="mb-0 mt-2">Start Date</label><span class="text-danger">*</span><br>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="event_start" id="event_start" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="" class="mb-0  mt-2">End Date</label><span class="text-danger">*</span><br>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="event_end" id="event_end" required autocomplete="off">
                                    </div>
                                </div>
                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="" class="mb-0  mt-2">Event Type</label><span class="text-danger">*</span><br>
                                        <select name="event_type" id="event_type" class="form-control form-control-sm rounded-0" required>
                                            <option value="">Select one</option>
                                            <option value="Entertainment">Entertainment</option>
                                            <option value="Gala">Gala</option>
                                            <option value="Social">Social</option>
                                            
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-3">
                                    <div class="">
                                        <label for="" class="mb-0  mt-2">Industry</label><span class="text-danger">*</span><br>
                                        <select name="event_industry" id="event_industry" class="form-control form-control-sm rounded-0" required>
                                            <option value="">Select one</option>
                                            <option value="Entertainment">Entertainment</option>
                                            <option value="Gala">Gala</option>
                                            <option value="Social">Social</option>
                                        </select>
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col">

                                    <div class="">
                                        <label for="" class="mb-0  mt-2">Address</label><span class="text-danger">*</span><br>
                                        <input type="text" class="form-control form-control-sm rounded-0" name="event_address" id="event_address" required>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col">

                                    <div class="">
                                        <label for="" class="mb-0  mt-2">State</label><span class="text-danger">*</span><br>
                                        <select name="event_state" id="state" class="form-control form-control-sm rounded-0" required>
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
                                    </div>

                                </div>
                                <div class="col">
                                    <div class="">
                                        <label for="" class="mb-0 mt-2">LGA</label><span class="text-danger">*</span><br>
                                        <select class="form-control form-control-sm rounded-0" id="lga" name="event_lga" required>
                                            <option value="0">Select LGA:</option>
                                        </select>
                                    </div>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="">
                                        <label for="" class="mb-0 mt-2">Description</label><span class="text-danger">*</span><br>
                                        <textarea cols="30" rows="5" class="form-control form-control-sm rounded-0" name="event_description" id="event_description" required></textarea>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="">
                                        <label class="mt-2 mb-0">Upload Event Images</label>
                                        <div class="border p-4">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <label for="event_images1"><span class="border py-1 pl-2 pr-1" style="display:block; width: 7rem;"><i class="fa fa-upload"></i><i class="fa fa-spinner fa-spin float-right" id="image1_spinner" style="display:none"></i></span></label>
                                                    <input type="file" id="event_images1" name="event_images1" hidden/>
                                                    <img id="blah" src="#" alt="your image" width="100%" style="display:none"/>
                                                
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="event_images2"><i class="fa fa-upload border px-5 py-2"></i></label>
                                                    <input type="file" id="event_images2" name="event_images2" hidden/>
                                                    <img id="blah2" src="#" alt="your image" width="100%" style="display:none"/>
                                                </div>
                                                <div class="col-sm-4">
                                                <label for="event_images3"><i class="fa fa-upload border px-5 py-2"></i></label>
                                                    <input type="file" id="event_images3" name="event_images3" hidden/>
                                                    <img id="blah3" src="#" alt="your image" width="100%" style="display:none"/>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-4">
                                                <label for="event_images4"><i class="fa fa-upload border px-5 py-2"></i></label>
                                                    <input type="file" id="event_images4" name="event_images4" hidden/>
                                                    <img id="blah4" src="#" alt="your image" width="100%" style="display:none"/>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="event_images5"><i class="fa fa-upload border px-5 py-2"></i></label>
                                                    <input type="file" id="event_images5" name="event_images5" hidden/>
                                                    <img id="blah5" src="#" alt="your image" width="100%" style="display:none"/>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label for="event_images6"><i class="fa fa-upload border px-5 py-2"></i></label>
                                                    <input type="file" id="event_images6" name="event_images6" hidden/>
                                                    <img id="blah6" src="#" alt="your image" width="100%" style="display:none"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <div class="">
                                        <label for="" class="mb-0  mt-2">Price</label><span class="text-danger">*</span>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" name="event_price" id="free_event" value="free" required> Free 
                                            </div>
                                            <div class="col">
                                                <input type="radio" name="event_price" id="paid_event"> Paid
                                                    <div class="row" id="paid_price" style="display: none;">
                                                        <div class="col">
                                                            <input type="radio" name="price_range" id="single_price"> Single Price
                                                            <div id="single_price_value" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        Value:
                                                                        <input type="number" class="form-control form-control-sm rounded-0" name="event_price_from2" id="value1">
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                        </div>
                                                        <div class="col">
                                                            <input type="radio" name="price_range" id="multi_price"> Multiple Prices
                                                        </div>
                                                        
                                                        <div id="multi_price_value" style="display: none;">
                                                            <div class="row p-2">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="">Min: </label> 
                                                                        <input type="number" min="1" class="form-control form-control-sm rounded-0" name="event_price_from3" id="value2">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                      <label for="">Max: </label>
                                                                      <input type="number" min="1" class="form-control form-control-sm rounded-0" name="event_price_to" id="value3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                           
                        </fieldset>


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


    
    <!-- Create Event Modal -->
    <div class="modal fade" id="editEventModal">
        <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content rounded-0">
           
                <!-- Modal Header -->
                <div class="modal-header rounded-0 py-2" style="background: #70a1B9">
                    <p class="modal-title text-white"><strong> Edit Event</strong></p>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

        
                <!-- Modal body -->
                <div class="modal-body">

                    
                    <div id="create-event-box">

                        <form id="editEventform">
                            <fieldset>
                                    <legend>Edit Event Details</legend>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Title</label><br>
                                        <input type="hidden" name="author" value="<?php echo $association_details['fassociation_id']; ?>">
                                        <input type="text" name="event_title" id="event_title2" class="form-control form-control-sm rounded-0 border-dark">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Start Date</label><br>
                                        <input type="datetime-local" name="event_start" id="event_start2">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">End Date</label><br>
                                        <input type="datetime-local" name="event_end" id="event_end2">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Event Type</label><br>
                                        <select name="event_type" id="event_type">
                                            <option value="Entertainment">Entertainment</option>
                                            <option value="Gala">Gala</option>
                                            <option value="Social">Social</option>
                                            <option value="Entertainment">Entertainment</option>
                                            <option value="Entertainment">Entertainment</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Location</label><br>
                                        <input type="text" class="form-control form-control-sm rounded-0 border-dark" name="event_location" id="event_location2">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Description</label><br>
                                        <textarea cols="30" rows="5" class="form-control form-control-sm rounded-0 border-dark" name="event_description" id="event_description2"></textarea>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="">Price</label>
                                        <div class="row">
                                            <div class="col">
                                                <input type="radio" name="event_price" id="free_event" value="free"> Free 
                                            </div>
                                            <div class="col">
                                                <input type="radio" name="event_price" id="paid_event"> Paid
                                                    <div class="row" id="paid_price" style="display: none;">
                                                        <div class="col">
                                                            <input type="radio" name="price_range" id="single_price"> Single
                                                            <div id="single_price_value" style="display: none;">
                                                                <div class="row">
                                                                    <div class="col">
                                                                        Value:
                                                                        <input type="number" min="1" class="form-control form-control-sm rounded-0 border-dark" name="event_price_from2" id="value1">
                                                                    </div>
                                                                </div>
                                                            </div>    
                                                        </div>
                                                        <div class="col">
                                                            <input type="radio" name="price_range" id="multi_price"> Range
                                                        </div>
                                                        
                                                        <div id="multi_price_value" style="display: none;">
                                                            <div class="row p-2">
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                        <label for="">Min: </label> 
                                                                        <input type="number" class="form-control form-control-sm rounded-0 border-dark" name="event_price_from3" id="value2">
                                                                    </div>
                                                                </div>
                                                                <div class="col">
                                                                    <div class="form-group">
                                                                      <label for="">Max: </label>
                                                                      <input type="number" class="form-control form-control-sm rounded-0 border-dark" name="event_price_to" id="value3">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                             
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                           
                        </fieldset>


                    </div>
                      
                      
                </div>
        
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
        </div>
    </div>



        <!-- The Modal -->
        <div class="modal fade" id="myModalx">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

            <img src="https://images.pexels.com/photos/587741/pexels-photo-587741.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="">
           
            </div>
        </div>
        </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
    <script>
    $( function() {
        $( "#datepicker" ).datepicker();
    } );
    </script>

    <script>
        if ( $('[type="date"]').prop('type') != 'date' ) 
        {
            $('[type="date"]').datepicker();
        }
    </script>


    <script>
        $('#event_start').datetimepicker({
            uiLibrary: 'bootstrap4',
            modal: true,
            footer: true,
            format: 'HH:MM dd-mm-yyyy' 
        });
    </script>

<script>
        $('#event_end').datetimepicker({
            uiLibrary: 'bootstrap4',
            modal: true,
            footer: true,
            format: 'HH:MM dd-mm-yyyy' 
        });
    </script>



<script>
      function ProfileFunction(el) 
      {
        document.getElementById("profile-box").style.display="block";

        document.getElementById("events-box").style.display="none";
        
        document.getElementById("ebroadcast-box").style.display="none";

        document.getElementById("esolutions-box").style.display="none";
        
        document.getElementById("gallery-box").style.display="none"; 

    }  


    function EventFunction() 
      {
        document.getElementById("profile-box").style.display="none";

        document.getElementById("events-box").style.display="block";

        document.getElementById("esolutions-box").style.display="none";
        
        document.getElementById("ebroadcast-box").style.display="none";
        
        document.getElementById("gallery-box").style.display="none"; 


        // var profile = document.getElementById("profile_tab_btn");

        // //console.log(profile);
      
        // profile.style.backgroundColor = "green";
        // profile.style.color = "#fff";
      

        // var property = document.getElementById('events_tab_btn');
        // if (window.getComputedStyle(property).backgroundColor == 'rgb(244, 113, 33)') 
        // {
        //     property.style.backgroundColor = color;
        // }
        // else 
        // {
        //     property.style.backgroundColor = "#fff";
        //     property.style.border = " 1px solid #fff";
        //     property.style.color = "red";
        // }

    }  



    function GalleryFunction() 
      {

        document.getElementById("gallery-box").style.display="block"; 

        document.getElementById("profile-box").style.display="none";

        document.getElementById("events-box").style.display="none";

        document.getElementById("ebroadcast-box").style.display="none";

        document.getElementById("esolutions-box").style.display="none";
        
    }  

    
    function ESolutionsFunction() 
      {

        document.getElementById("gallery-box").style.display="none"; 

        document.getElementById("profile-box").style.display="none";

        document.getElementById("events-box").style.display="none";

        document.getElementById("esolutions-box").style.display="block";
        
        document.getElementById("ebroadcast-box").style.display="none";


        // document.getElementById("profile-btn").style.backgroundColor="blue"; 
    }  


    function EBroadcastFunction()
      {

        document.getElementById("ebroadcast-box").style.display="block";

        document.getElementById("gallery-box").style.display="none"; 

        document.getElementById("profile-box").style.display="none";

        document.getElementById("events-box").style.display="none";

        document.getElementById("esolutions-box").style.display="none";
        
        

        // document.getElementById("profile-btn").style.backgroundColor="blue"; 
    }  

</script>



    <script>

    $(document).ready(function()
    {
          $('#paid_event').click(function () { 
             
            $('#paid_price').show();
            //$("#single_price").prop('required',true);
              
          });

          $('#free_event').click(function () { 
             
             $('#paid_price').hide();
             $("#value1"). val("");
             $("#value2"). val("");
             $("#value3"). val("");

             $('#single_price_value').hide();
             $('#multi_price_value').hide();
             $('#single_price').prop('checked', false);
             $('#multi_price').prop('checked', false);
               
           });

           $('#single_price').click(function () { 
             
             $('#single_price_value').show();
             $('#multi_price_value').hide();
             //$("#single_price_value").prop('required',true);

             $("#value1"). val("");
             $("#value2"). val("");
             $("#value3"). val("");
               
           });

           $('#multi_price').click(function () { 
             
             $('#multi_price_value').show();
             $('#single_price_value').hide();
             $("#value1"). val("");
            // $("#value2"). val("");
             //$("#value3"). val("");
               
           });

           

           
    });
    </script>


    <script>


    $("#aboutform").submit(function(){
        

        var querystring = $(this).serialize();

        //alert(querystring);

        $.ajax({
            url: '<?php echo site_url(); ?>association/updateaboutaction',
            type: "POST",
            data: querystring,
            dataType: "json",
            success: function(response) {
                //code to execute
                //console.log(response);
                if(response.success == true)
                {
                    $("#aboutModal").modal("hide");
                    $("#about_section").load(location.href + " #about_section");
                    toastr.success('<p>About updated successfully</p>', {timeOut: 1000});
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


$("#createbranchform").submit(function(){
    

    var querystring = $(this).serialize();

    //alert(querystring);

    $.ajax({
        url: '<?php echo site_url(); ?>association/createbranchaction',
        type: "POST",
        data: querystring,
        dataType: "json",
        success: function(response) {
            //code to execute
            //console.log(response.success);
            if(response.success == true)
            {
                $("#createBranchModal").modal("hide");
                $("#branches_section").load(location.href + " #branches_section");
                location.reload();
                toastr.success('<p>About updated successfully</p>', {timeOut: 1000});
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
    // Charges Edit Modal
		$('.branch_edit_btn').click(function(){
            //get id
			var recno = $(this).data('recno');
			//alert(recno);
			var branch_name = $(this).data('branch_name');
            var branch_address = $(this).data('branch_address');
            var branch_manager = $(this).data('branch_manager');
            var branch_phone = $(this).data('branch_phone');
            var branch_email = $(this).data('branch_email');
			
			
		    // // //alert( base_url);
			$('#recno').val(recno);
            $('#edit_branch_name').val(branch_name);
			$('#edit_branch_address').val(branch_address);
            $('#edit_branch_manager').val(branch_manager);
            $('#edit_branch_phone').val(branch_phone);
            $('#edit_branch_email').val(branch_email);
            $("#EditBranchModal").modal('show');
		});
		
</script>

<script>

        $("#editbranchform").submit(function(){ 
        

            var querystring = $(this).serialize();

            //alert(querystring);

            $.ajax({
                url: '<?php echo site_url(); ?>association/updatebranchaction',
                type: "POST",
                data: querystring,
                dataType: "json",
                success: function(response) {
                    //code to execute
                    //alert(response);
                    if(response.success == true)
                    {
                        $("#EditBranchModal").modal("hide");
                        $("#branches_section").load(location.href + " #branches_section");
                        location.reload();
                        toastr.success('<p>About updated successfully</p>', {timeOut: 1000});
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

  
$("body").on('click' ,'.deletebranch', function(e){
    e.preventDefault();

    var recno = $(this).data('recno');
   
    //alert(recno);

    $.ajax({
        url: '<?php echo site_url();?>association/deletebranchaction',
        method:"POST",
        dataType: "json",
        data: {recno:recno},
        beforeSend:function(){
        return confirm("Are you sure you want to delete this record?");
        },
        success: function(response){
            
            //alert(response);
            if(response.success == true)
            {
                $("#branches_section").load(location.href + " #branches_section");
                location.reload();
                toastr.success('<p>Branch deleted successfully</p>', {timeOut: 1000});
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

        $("#socialform").submit(function(){ 
        
            var querystring = $(this).serialize();

            //alert(querystring);

            $.ajax({
                url: '<?php echo site_url(); ?>association/updatesocialsaction',
                type: "POST",
                data: querystring,
                dataType: "json",
                success: function(response) {
                    //code to execute
                    //alert(response);
                    if(response.success == true)
                    {
                        $("#EditsocialModal").modal("hide");
                        
                        location.reload();
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
    // Charges Edit Modal
		$('#info-btn').click(function(){
        
            var recno = $(this).data('recno');
            //alert(recno);
			var cac = $(this).data('cac');
            var website = $(this).data('website');
            var field = $(this).data('field');
            var main_office_state = $(this).data('main_office_state');
            var main_office_lga = $(this).data('main_office_lga');
            var contact_email = $(this).data('contact_email');
            
			
		    // //alert(website);
			$('#info_recno').val(recno);
            $('#cac').val(cac);
			$('#website').val(website);
            $('#field').val(field);
            $('#main_office_location').val(main_office_state);
            $('#contact_email').val(contact_email);
            $("#EditInfoModal").modal('show');
		});
		
</script>


<script>

        $("#editinfoform").submit(function(){ 
        
            var querystring = $(this).serialize();

            //alert(querystring);

            $.ajax({
                url: '<?php echo site_url(); ?>association/updateinfoaction',
                type: "POST",
                data: querystring,
                dataType: "json",
                success: function(response) {
                    //code to execute
                    //alert(response);
                    if(response.success == true)
                    {
                        $("#EditInfoModal").modal("hide");
                        $("#info_section").load(location.href + " #info_section");
                        // //$("#editinfoform").trigger("reset");
                        // //$('#editinfoform')[0].reset();
                        // //toastr.success('<p>About updated successfully</p>', {timeOut: 1000});
                        // //$("#info-btn").button("refresh");  // to refresh the state 
                        // location.reload();
                        
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

        $("#createEventform").submit(function(){ 
        
            var form_data = new FormData();


            var file1 = $('#event_images1')[0].files[0];
            form_data.append('event_images1', file1);

            var file2 = $('#event_images2')[0].files[0];
            form_data.append('event_images2', file2);
            
            var file3 = $('#event_images3')[0].files[0];
            form_data.append('event_images3', file3);

            var file4 = $('#event_images4')[0].files[0];
            form_data.append('event_images4', file4);

            var file5 = $('#event_images5')[0].files[0];
            form_data.append('event_images5', file5);

            var file6 = $('#event_images6')[0].files[0];
            form_data.append('event_images6', file6);

            var params = $(this).serializeArray();
            $.each(params, function (i, val) {
                form_data.append(val.name, val.value);
            });



            // for(var pair of form_data.entries()) 
            // {
            //     console.log(pair[0]+ ', ' + pair[1]); 
            // }

            // console.log(form_data);


            // Display the values
            // for (var value of form_data.values()) {
            // console.log(value);
            // }


            $.ajax({
                url: '<?php echo site_url(); ?>association/createeventaction',
                type: "POST",
                contentType: false,
                processData: false,
                dataType: "json",
                data: form_data,
                success: function(response) {
                    //code to execute
                    //console.log(response);
                    if(response.success == true)
                    {
                        $("#createEventModal").modal("hide");
                        
                        loadassociationevents();
                        //$("#editinfoform").trigger("reset");
                        //$('#editinfoform')[0].reset();
                        //toastr.success('<p>About updated successfully</p>', {timeOut: 1000});
                        //$("#info-btn").button("refresh");  // to refresh the state 
                        //location.reload();
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

    function loadassociationevents()
      {
          $.ajax({
          url:"<?php echo site_url(); ?>association/loadassociationevents",
          method:"POST",
          dataType:"json",
          success:function(data)
          {

            //console.log(data);
           
            $('#posted-event-container').html(data.association_events);
            
          },
          error: function(xhr, textStatus, errorThrown) {
            //code to execute
            //alert(xhr.responseText);
            //$('.badge').text(xhr.responseText));
          //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
          },
        });
        
        
      }

      loadassociationevents();

</script>



    <script>
            
        $("body").on('click' ,'.edit-event-button', function(e){
            e.preventDefault();
               

                var recno = $(this).data('edit_id');

                var event_start = $(this).data('event_start');
                var event_end = $(this).data('event_end');
                var event_title = $(this).data('event_title');
                var event_description = $(this).data('event_description');
                var event_location = $(this).data('event_location');
                
                
                //alert(event_start);
                $('#info_recno').val(recno);
                $('#event_start2').val(event_start);
                $('#event_end2').val(event_end);
                $('#event_title2').val(event_title);
                $('#event_description2').val(event_description);
                $('#event_location2').val(event_location);
                $("#editEventModal").modal('show');
  
        });

    </script>



<script>

  
$("body").on('click' ,'.delete-event-button', function(e){
    e.preventDefault();

    var event_id = $(this).data('delete_id');
   
    //alert(event_id);

    $.ajax({
        url: '<?php echo site_url();?>association/deleteeventaction',
        method:"POST",
        dataType: "json",
        data: {event_id:event_id},
        beforeSend:function(){
        return confirm("Are you sure you want to delete this record?");
        },
        success: function(response){
            
            if(response.success == true)
            {
                loadassociationevents();
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

        $("#ebroadcast_form").submit(function(){ 
        

            var querystring = $(this).serialize();

            //alert(querystring);

            $.ajax({
                url: '<?php echo site_url(); ?>association/ebroadcast',
                type: "POST",
                data: querystring,
                dataType: "json",
                beforeSend:function(){
                //openLoading(3000);
                    $("#loader_div").show();
                },
                success: function(response) {
                    //code to execute
                    //console.log(response);
                    if(response.success == true)
                    {
                        
                        $('#ebroadcast_form').trigger("reset");
                        
                        $("#broadcast_list_area").load(location.href + " #broadcast_list_area");
                        //alert("yeah");
                        $("#loader_div").hide();
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

function loadbroadcasts()
  {
      $.ajax({
      url:"<?php echo site_url(); ?>association/loadbroadcasts",
      method:"POST",
      dataType:"json",
      success:function(data)
      {
       
        //$('#other_skills').html(data.other_skills);

        //console.log(data.employer_events);

        //alert(data.broadcasts);

        $('#broadcast_list_area').html(data.broadcasts);
        
      },
      error: function(xhr, textStatus, errorThrown) {
        //code to execute
        //alert(xhr.responseText);
        //$('.badge').text(xhr.responseText));
      //$('#request-result2').html('Error occurred! Try again').delay(4000).fadeOut();
      },
    });
    
    
  }

  loadbroadcasts();

</script>



<script>

$("#file-input-images").change(function(e){

        e.preventDefault();

         var form_data = new FormData();
            
         var files = $('#file-input-images')[0].files[0];

        //console.log(files); 
            
            form_data.append('fileid',files);

            var association_id = $('#association_id').val();

           

            form_data.append('association_id', association_id);


        // for (var pair of form_data.entries()) {
        //                 console.log(pair[0]+ ', ' + pair[1]); 
        //             }
        //     console.log(form_data);

                $.ajax({
                    url: '<?php echo site_url();?>association/uploadgalleryaction',
                    type: 'post',
                    contentType: false,
                    processData: false,
                    dataType: "json",
                    data: form_data,
                    beforeSend:function(){
    
                    //openLoading(3000);
                        $("#loader_div").show();
                    },
                    success: function(response){

                   // alert("Hi");
                        //alert($response.success);

                        // //$("#image_upload_form").trigger("reset");
                        $(".portfolio_box").load(location.href + " .portfolio_box"); 
                        // // // toastr.success('<p>Portfolio Image uploaded successfully</p>', {timeOut: 1000});\
                        location.reload();
                        // // alert("");
                        

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

        $('.delete-image').click(function (e) { 
            e.preventDefault();

            var image_id = $(this).data('image_id');
            var image_name = $(this).data('image_name');
            //alert(image_name);

            $.ajax({
                url: '<?php echo site_url();?>association/deletegalleryaction',
                method:"POST",
                dataType: "json",
                data: {image_id:image_id, image_name:image_name},
                beforeSend:function(){
                return confirm("Are you sure you want to delete this record?");
                //openLoading(3000);
                $("#loader").show();
                },
                success: function(response){
                    //alert(response.success);
                    if(response.success == true)
                    {
                       
                        toastr.success('<p>Gallery Image deleted successfully</p>', {timeOut: 1000});
                        $(".porfolio-container-imagesc").load(location.href + " .porfolio-container-imagesc");
                        location.reload();
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
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();
});
</script>



<script>

    $('.datatable').DataTable();

</script>

<script>
// When the user scrolls down 20px from the top of the document, slide down the navbar
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 150 || document.documentElement.scrollTop > 150) {
    document.getElementById("navbar").style.top = "70px";
  } else {
    document.getElementById("navbar").style.top = "-50px";
  }
}
</script>




<!-- <script>

    $(document).ready(function() {
    if (window.File && window.FileList && window.FileReader) {
        $("#event_images").on("change", function(e) {
        var files = e.target.files,
            filesLength = files.length;
        for (var i = 0; i < filesLength; i++) {
            var f = files[i]
            var fileReader = new FileReader();
            fileReader.onload = (function(e) {
            var file = e.target;
            $("<span class=\"pip\">" +
                "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                "<br/><span class=\"remove\">x</span>" +
                "</span>").insertAfter("#event_images");
            $(".remove").click(function(){
                $(this).parent(".pip").remove();
            });
            
            // Old code here
            /*$("<img></img>", {
                class: "imageThumb",
                src: e.target.result,
                title: file.name + " | Click to remove"
            }).insertAfter("#files").click(function(){$(this).remove();});*/
            
            });
            fileReader.readAsDataURL(f);
        }
        });
    } 
    else 
    {
        alert("Your browser doesn't support to File API")
    }
    });

</script> -->



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

    function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.progress = function(e)
        {
            $('#image1_spinner').show();
        }
        
        reader.onload = function(e)
        {
            $('#blah').show();
            $('#blah').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
    }

    $("#event_images1").change(function() 
    {
        readURL(this);
    });

    </script>

    <script>

    function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        

        reader.loadstart = function(e)
        {
            $('#image1_spinner').show();
        }
        
        reader.onload = function(e)
        {
            $('#blah2').show();
            $('#blah2').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
    }

    $("#event_images2").change(function() 
    {
        readURL2(this);
    });

    </script>


    
<script>

function readURL3(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e)
    {
        $('#blah3').show();
        $('#blah3').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
}
}

$("#event_images3").change(function() 
{
    readURL3(this);
});

</script>



<script>

function readURL4(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e)
    {
        $('#blah4').show();
        $('#blah4').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
}
}

$("#event_images4").change(function() 
{
    readURL4(this);
});

</script>



<script>

function readURL5(input) {
if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e)
    {
        $('#blah5').show();
        $('#blah5').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
}
}

$("#event_images5").change(function() 
{
    readURL5(this);
});

</script>



    <script>

    function readURL6(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        
        reader.onload = function(e)
        {
            $('#blah6').show();
            $('#blah6').attr('src', e.target.result);
        }
        
        reader.readAsDataURL(input.files[0]); // convert to base64 string
    }
    }

    $("#event_images6").change(function() 
    {
        readURL6(this);
    });

    </script>



    <!-- <script>
    
    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#event_images").on("change", function(e) {
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                var file = e.target;
                $("<span class=\"pip\">" +
                    "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                    "<br/><span class=\"remove\">Remove image</span>" +
                    "</span>").insertAfter("#event_images");
                $(".remove").click(function(){
                    $(this).parent(".pip").remove();
                });
                
                // Old code here
                /*$("<img></img>", {
                    class: "imageThumb",
                    src: e.target.result,
                    title: file.name + " | Click to remove"
                }).insertAfter("#files").click(function(){$(this).remove();});*/
                
                });
                fileReader.readAsDataURL(f);
            }
            });
        } else {
            alert("Your browser doesn't support to File API")
        }
        });

    </script>


<script>
    
    $(document).ready(function() {
        if (window.File && window.FileList && window.FileReader) {
            $("#event_images2").on("change", function(e) {
            var files = e.target.files,
                filesLength = files.length;
            for (var i = 0; i < filesLength; i++) {
                var f = files[i]
                var fileReader = new FileReader();
                fileReader.onload = (function(e) {
                var file = e.target;
                $("<span class=\"pip\">" +
                    "<img class=\"imageThumb\" src=\"" + e.target.result + "\" title=\"" + file.name + "\"/>" +
                    "<br/><span class=\"remove\">Remove image</span>" +
                    "</span>").insertAfter("#event_images2");
                $(".remove").click(function(){
                    $(this).parent(".pip").remove();
                });
                
                // Old code here
                /*$("<img></img>", {
                    class: "imageThumb",
                    src: e.target.result,
                    title: file.name + " | Click to remove"
                }).insertAfter("#files").click(function(){$(this).remove();});*/
                
                });
                fileReader.readAsDataURL(f);
            }
            });
        } else {
            alert("Your browser doesn't support to File API")
        }
        });

    </script> -->


    </body>

</html>