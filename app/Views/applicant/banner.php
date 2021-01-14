<section class="user-info-container">    
            
            <div class="banner">
            
            <div class=""> 

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
             
           
                
  <!--          <a href=""><img class="settings" src="<?php //echo base_url();?>/public/assets/Images/User%20Profile/Settings%20Icon.png"></a>     -->

            </div>



               <!-- <p class="text-center mx-auto">
                <label for="browse2">
                <p class="profile_pic_btn btn btn-outline-secondary text-center">
                    <span class="mx-auto"> Change Profile Image </span>
                </p>
                </label>
                    <form class="profile_pic_upload_form2">
                        <input type="hidden" name="applicant_id" class="applicant_id" value="<?php //echo $applicant_details['frecno']; ?>">
                        <input type="hidden" name="old_image_name" class="old_image_name" value="<?php //echo $applicant_details['fprofile_image']; ?>">  
                        <input type="file" name="browsePhoto" id="browse2" accept="image/*" style="display:none;">
                    </form>
                
            </p>  -->




            
        <div align="center" class="dp-div">
             
           <img class="dp" src="<?php echo base_url('/public/profilepics/600/'. $applicant_details['fprofile_image']);?>"> 
               
           <label for="browse1"><div class="overlay pt-5 text-center cursor">
           
                <div class="pr-4"><i class="fa fa-photo" style="font-size:2rem !important;"></i></div>
                    <div>Change</div>
                    <div>Profile Picture</div>
                    </label>
                    <form class="profile_pic_upload_form">
                        <input type="hidden" name="applicant_id" class="applicant_id" value="<?php echo $applicant_details['frecno']; ?>">
                        <input type="hidden" name="old_image_name" class="old_image_name" value="<?php echo $applicant_details['fprofile_image']; ?>">  
                        <input type="file" name="browsePhoto" id="browse1" accept="image/*" style="display:none;">
                    </form>
                </div>
            </div>


            <p class="text-center"> 
            
            <!-- <label for="browse1" class="text-primary cursor">Change Profile Image</label> -->
            <label for="browse1" class="text-primary cursor text-center"><i class="fa fa-photo" data-toggle="tooltip" title="Change Profile Image"></i>&nbsp;&nbsp;&nbsp;&nbsp;</label><br>
            <!-- <span> Your Profile Link: <span class="btn btn-outline-primary btn-sm"> https://kokoruns.com/<?php //echo $applicant_details['fapplicant_id']; ?></span> </span> -->

             </p> 

             <a href="https://kokoruns.com/<?php echo $applicant_details['fapplicant_id']; ?>" style="text-decoration: none !important">
                <div class="input-group mb-3 mx-auto" style="width:50%;">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-primary btn-sm" type="button">Your Profile Link:</button>
                    </div>
                    <input type="text" class="form-control border-primary btn-sm cursor" value="https://kokoruns.com/<?php echo $applicant_details['fapplicant_id']; ?>" readonly>
                       
                </div>
            </a>

             <form class="profile_pic_upload_form">
                <input type="hidden" name="applicant_id" class="applicant_id" value="<?php echo $applicant_details['frecno']; ?>">
                <input type="hidden" name="old_image_name" class="old_image_name" value="<?php echo $applicant_details['fprofile_image']; ?>">  
                <input type="file" name="browsePhoto" id="browse1" accept="image/*" style="display:none;">
            </form>
            
           
                
            
            <!--a style="text-decoration: none" href=""><div align="center" class="user-link">kokoruns.com/alfredgreg</div></a-->
            
        <div align="center" class="user-name"><?php echo ucwords(strtolower($applicant_details['ffirst_name'])); ?> <?php echo ucwords(strtolower($applicant_details['flast_name'])); ?> <img src="" class="verification"> </div> 
            
        <div align="center" class="user-profession"><?php echo ucwords(strtolower($applicant_details['fprofession'])); ?> </div>
            
        <div id="view-bio-div" onclick="ViewBio()" align="center" class="view-bio-div">
        <button align="center" class="view-bio-button cursor">View Bio</button></div>
                
        <div id="hide-bio-div" onclick="HideBio()" align="center" class="hide-bio-div">
             <button align="center" class="hide-bio-button cursor">Hide Bio</button></div>            
         
    
                    <!--display-inline-block;-->    
        <div id="user-bio" align="center" class="user-bio"> 

                
            <div id="bio-info" class="bio-info">
                
            <label class="bio-info-label">Recommendations    
            </label><br>
            <a href="#">47</a><br style="line-height:2.0">
                
            <label class="bio-info-label">Gender    
            </label><br>
            <?php if(empty($applicant_details['fgender'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo $applicant_details['fgender'];} ?><br style="line-height:2.0">
                
            <label class="bio-info-label">Married    
            </label><br>
            <?php if(empty($applicant_details['fmarital_status'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo $applicant_details['fmarital_status'];} ?>
            <br style="line-height:2.0">    
                
            <label class="bio-info-label">Academic Level    
            </label><br>
            <?php if(empty($applicant_details['feducational_qualification'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['feducational_qualification']. "</span>";} ?>
           <br style="line-height:2.0">
                
            <label class="bio-info-label">Other Professions
            </label><br>
            1. <?php if(empty($applicant_details['fother_professions1'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fother_professions1']. "</span>";} ?> | 
            2. <?php if(empty($applicant_details['fother_professions2'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fother_professions2']. "</span>";} ?> |
            3. <?php if(empty($applicant_details['fother_professions3'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fother_professions3']. "</span>";} ?> |
            4. <?php if(empty($applicant_details['fother_professions4'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fother_professions4']. "</span>";} ?>
               <br style="line-height:2.0">
            <label class="bio-info-label">Languages
            </label><br>
            1. <?php if(empty($applicant_details['flanguages1'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['flanguages1']. "</span>";} ?> | 
            2. <?php if(empty($applicant_details['flanguages2'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['flanguages2']. "</span>";} ?> | 
            3. <?php if(empty($applicant_details['flanguages3'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['flanguages3']. "</span>";} ?> | 
            4. <?php if(empty($applicant_details['flanguages4'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['flanguages4']. "</span>";} ?> | 
            5. <?php if(empty($applicant_details['flanguages5'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['flanguages5']. "</span>";} ?>  
            
            <br style="line-height:2.0">    
                
            <label class="bio-info-label">Company / Brand    
            </label><br>
            <?php if(empty($applicant_details['fcurrent_employer'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fcurrent_employer']. "</span>";} ?>  
            <br style="line-height:2.0"> 
                
            <label class="bio-info-label">Location    
            </label><br>
            <?php if(empty($applicant_details['flga'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['flga']. "</span>";} ?>, 
            <?php if(empty($applicant_details['fstate'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fstate']. "</span>";} ?>
            <br style="line-height:2.0">
                
            <label class="bio-info-label">Job Preference    
            </label>
            <ul>
            <li>Type - <?php if(empty($applicant_details['femployment_type'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['femployment_type']. "</span>";} ?></li>
            <li>Options - 1.<?php if(empty($applicant_details['fpreferred_job1'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fpreferred_job1']. "</span>";} ?> | 2.<?php if(empty($applicant_details['fpreferred_job2'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fpreferred_job2']. "</span>";} ?> | 3.<?php if(empty($applicant_details['fpreferred_job3'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fpreferred_job3']. "</span>";} ?> | 4.<?php if(empty($applicant_details['fpreferred_job4'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fpreferred_job4']. "</span>";} ?></li>
            <li>Preferred Location - LGA <?php if(empty($applicant_details['fpreferred_job_location_lga'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fpreferred_job_location_lga']. "</span>";} ?>, State <?php if(empty($applicant_details['fpreferred_job_location_state'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fpreferred_job_location_state']. "</span>";} ?><?php echo $applicant_details['fpreferred_job_location_state']; ?></li>   
            </ul>

            <label class="bio-info-label">Disabled?    
            </label><br>
            <?php if(empty($applicant_details['fdisabled'])){ echo "<span style='text-decoration: none; font-weight: bold; color: #dc3545;'>Not Set</span>"; }else{ echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .$applicant_details['fdisabled']. "</span>";} ?>
    
            <br style="line-height:2.0"> 
                
            <label class="bio-info-label">Available Start Date    
            </label><br>
            <?php 
                if($applicant_details['favailability_start_date'] == '2000-01-01')
                {
                    echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>Immediately</span>";
                }
                else if($applicant_details['favailability_start_date'] == null)
                {
                    echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>Not Yet</span>";
                }
                else
                {
                    echo "<span style='text-decoration: none; font-weight: bold; color: #0991ff;'>" .date('F j, Y', strtotime($applicant_details['favailability_start_date'])). "</span>";
                }
            
             
             ?><br style="line-height:2.0">    

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
            <form class="bio-info-form" id="bio-info-form">


            <input type="hidden" name="id" value="<?php echo $applicant_details['frecno']; ?>">

            <div class="gender-div">
                
            <div class="gender-padding-right">   
            <div class="bio-form-label">Your Gender<b>*</b></div> 
            <input type="radio" id="male" name="gender" value="Male" <?php if($applicant_details['fgender'] == "Male"){ echo "checked"; }?>>
            <label for="male">Male</label><br>
            <input type="radio" id="female" name="gender" value="Female" <?php if($applicant_details['fgender'] == "Female"){ echo "checked"; }?>>
            <label for="female">Female</label> 
            </div>
                
            <div>    
            <div class="bio-form-label">Married<b>*</b></div> 
            <input type="radio" id="male" name="marital_status" value="Yes" <?php if($applicant_details['fmarital_status'] == "Yes"){ echo "checked"; }?>>
            <label for="male">Yes</label><br>
            <input type="radio" id="female" name="marital_status" value="No" <?php if($applicant_details['fmarital_status'] == "No"){ echo "checked"; }?>>
            <label for="female">No</label>
            </div>    
                
            </div>
                
            <div class="disabled-div">
            <div class="bio-form-label">Disabled<b>*</b></div>
            <input type="radio" id="yes" name="disabled" value="Yes" <?php if($applicant_details['fdisabled'] == "Yes"){ echo "checked"; }?>>
            <label for="yes">Yes</label>
            <input type="radio" id="no" name="disabled" value="No" <?php if($applicant_details['fdisabled'] == "No"){ echo "checked"; }?>>
            <label for="no">No</label>     
                
            </div>    
                
            <div class="bio-form-div">
            <div class="bio-form-label">Your Academic Level<b>*</b></div> 
            <select class="bio-form-select" name="certificate" id="certificate">
                <option value="">Select one</option>
                <option value="First School Leaving Certificate" <?php if($applicant_details['feducational_qualification'] == "First School Leaving Certificate"){ echo "selected"; }?>>First School Leaving Certificate</option>
                <option value="Junior Secondary School Certificate" <?php if($applicant_details['feducational_qualification'] == "Junior Secondary School Certificate"){ echo "selected"; }?>>Junior Secondary School Certificate</option>
                <option value="Senior Secondary School Certificate" <?php if($applicant_details['feducational_qualification'] == "Senior Secondary School Certificate"){ echo "selected"; }?>>Senior Secondary School Certificate</option>
                <option value="National Certificate of Education" <?php if($applicant_details['feducational_qualification'] == "National Certificate of Education"){ echo "selected"; }?>>National Certificate of Education</option>
                <option value="Ordinary National Diploma" <?php if($applicant_details['feducational_qualification'] == "Ordinary National Diploma"){ echo "selected"; }?>>Ordinary National Diploma</option>
                <option value="Higher National Diploma" <?php if($applicant_details['feducational_qualification'] == "Higher National Diploma"){ echo "selected"; }?>>Higher National Diploma</option>
                <option value="Bachelor's Degree" <?php if($applicant_details['feducational_qualification'] == "Bachelor's Degree"){ echo "selected"; }?>>Bachelor's Degree</option>
                <option value="Master's Degree" <?php if($applicant_details['feducational_qualification'] == "Master's Degree"){ echo "selected"; }?>>Master's Degree</option>
                <option value="Doctorate's Degree" <?php if($applicant_details['feducational_qualification'] == "Doctorate's Degree"){ echo "selected"; }?>>Doctorate's Degree</option>
            </select>    
            </div>
                
            <div class="bio-form-div">
                <div class="bio-form-label">Other Profession 1</div> 
                    <input type="text" class="bio-form-select" name="other_professions1" id="search_professions" value="<?php echo $applicant_details['fother_professions1']; ?>" autocomplete="off">
                <div class="suggestion-box" style="overflow: auto;">
                </div>
            </div> 
            <div class="bio-form-div">
                <div class="bio-form-label">Other Profession 2</div> 
                <input type="text" class="bio-form-select" name="other_professions2" id="search_professions2" value="<?php echo $applicant_details['fother_professions2']; ?>" autocomplete="off">
                <div class="suggestion-box2" style="overflow: auto;">
                </div>
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Other Profession 3</div> 
                <input type="text" class="bio-form-select" name="other_professions3" id="search_professions3" value="<?php echo $applicant_details['fother_professions3']; ?>" autocomplete="off"> 
                <div class="suggestion-box3" style="overflow: auto;">
                </div>
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Other Profession 4</div> 
                <input type="text" class="bio-form-select" name="other_professions4" id="search_professions4" value="<?php echo $applicant_details['fother_professions4']; ?>" autocomplete="off"> 
                <div class="suggestion-box4" style="overflow: auto;">
                </div>   
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 1<b>*</b></div> 
            <select class="bio-form-select" name="languages1">
                    <option value="">Select one</option>
                    <?php foreach ($languages as $language) { ?>
                      
                        <option value="<?php echo $language['fname']; ?>" <?php if($applicant_details['flanguages1'] == $language['fname']){ echo "selected"; }?>><?php echo $language['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>   
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 2</div> 
            <select class="bio-form-select" name="languages2">
                    <option value="">Select one</option>
                    <?php foreach ($languages as $language) { ?>
                      
                        <option value="<?php echo $language['fname']; ?>" <?php if($applicant_details['flanguages2'] == $language['fname']){ echo "selected"; }?>><?php echo $language['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 3</div> 
            <select class="bio-form-select" name="languages3">
                    <option value="">Select one</option>
                    <?php foreach ($languages as $language) { ?>
                      
                        <option value="<?php echo $language['fname']; ?>" <?php if($applicant_details['flanguages3'] == $language['fname']){ echo "selected"; }?>><?php echo $language['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 4</div> 
            <select class="bio-form-select" name="languages4">
                    <option value="">Select one</option>
                    <?php foreach ($languages as $language) { ?>
                      
                        <option value="<?php echo $language['fname']; ?>" <?php if($applicant_details['flanguages4'] == $language['fname']){ echo "selected"; }?>><?php echo $language['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Language 5</div> 
            <select class="bio-form-select" name="languages5">
                    <option value="">Select one</option>
                    <?php foreach ($languages as $language) { ?>
                      
                        <option value="<?php echo $language['fname']; ?>" <?php if($applicant_details['flanguages5'] == $language['fname']){ echo "selected"; }?>><?php echo $language['fname']; ?></option>
                   
                    <?php } ?>

                </select>      
            </div>    

            <div class="bio-form-div">
            <div class="bio-form-label">Current Employer (Company / Brand)<b>*</b></div> 
            <input class="bio-form-input" name="current_employer" value="<?php echo $applicant_details['fcurrent_employer']; ?>">    
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Your State/LGA</div> 
            <?php echo $applicant_details['fstate']; ?>/<?php echo $applicant_details['flga']; ?> <span><button>Change</button></span>
            <!-- <select class="bio-form-select"  id="state" name="state" required>
                <option value=""> Select State </option>
                <option value="Abia" <?php if($applicant_details['fstate'] == "Abia"){ echo "selected"; }?>>Abia</option>
                <option value="Adamawa" <?php if($applicant_details['fstate'] == "Adamawa"){ echo "selected"; }?>>Adamawa</option>
                <option value="AkwaIbom" <?php if($applicant_details['fstate'] == "AkwaIbom"){ echo "selected"; }?>>AkwaIbom</option>
                <option value="Anambra" <?php if($applicant_details['fstate'] == "Anambra"){ echo "selected"; }?>>Anambra</option>
                <option value="Bauchi" <?php if($applicant_details['fstate'] == "Bauchi"){ echo "selected"; }?>>Bauchi</option>
                <option value="Bayelsa" <?php if($applicant_details['fstate'] == "Bayelsa"){ echo "selected"; }?>>Bayelsa</option>
                <option value="Benue" <?php if($applicant_details['fstate'] == "Benue"){ echo "selected"; }?>>Benue</option>
                <option value="Borno" <?php if($applicant_details['fstate'] == "Borno"){ echo "selected"; }?>>Borno</option>
                <option value="Cross River" <?php if($applicant_details['fstate'] == "Cross River"){ echo "selected"; }?>>Cross River</option>
                <option value="Delta" <?php if($applicant_details['fstate'] == "Delta"){ echo "selected"; }?>>Delta</option>
                <option value="Ebonyi" <?php if($applicant_details['fstate'] == "Ebonyi"){ echo "selected"; }?>>Ebonyi</option>
                <option value="Edo" <?php if($applicant_details['fstate'] == "Edo"){ echo "selected"; }?>>Edo</option>
                <option value="Ekiti" <?php if($applicant_details['fstate'] == "Ekiti"){ echo "selected"; }?>>Ekiti</option>
                <option value="Enugu" <?php if($applicant_details['fstate'] == "Enugu"){ echo "selected"; }?>>Enugu</option>
                <option value="FCT" <?php if($applicant_details['fstate'] == "FCT"){ echo "selected"; }?>>FCT</option>
                <option value="Gombe" <?php if($applicant_details['fstate'] == "Gombe"){ echo "selected"; }?>>Gombe</option>
                <option value="Imo" <?php if($applicant_details['fstate'] == "Imo"){ echo "selected"; }?>>Imo</option>
                <option value="Jigawa" <?php if($applicant_details['fstate'] == "Jigawa"){ echo "selected"; }?>>Jigawa</option>
                <option value="Kaduna" <?php if($applicant_details['fstate'] == "Kaduna"){ echo "selected"; }?>>Kaduna</option>
                <option value="Kano" <?php if($applicant_details['fstate'] == "Kano"){ echo "selected"; }?>>Kano</option>
                <option value="Katsina" <?php if($applicant_details['fstate'] == "Katsina"){ echo "selected"; }?>>Katsina</option>
                <option value="Kebbi" <?php if($applicant_details['fstate'] == "Kebbi"){ echo "selected"; }?>>Kebbi</option>
                <option value="Kogi" <?php if($applicant_details['fstate'] == "Kogi"){ echo "selected"; }?>>Kogi</option>
                <option value="Kwara" <?php if($applicant_details['fstate'] == "Kwara"){ echo "selected"; }?>>Kwara</option>
                <option value="Lagos" <?php if($applicant_details['fstate'] == "Lagos"){ echo "selected"; }?>>Lagos</option>
                <option value="Nasarawa" <?php if($applicant_details['fstate'] == "Nasarawa"){ echo "selected"; }?>>Nasarawa</option>
                <option value="Niger" <?php if($applicant_details['fstate'] == "Niger"){ echo "selected"; }?>>Niger</option>
                <option value="Ogun" <?php if($applicant_details['fstate'] == "Ogun"){ echo "selected"; }?>>Ogun</option>
                <option value="Ondo" <?php if($applicant_details['fstate'] == "Ondo"){ echo "selected"; }?>>Ondo</option>
                <option value="Osun" <?php if($applicant_details['fstate'] == "Osun"){ echo "selected"; }?>>Osun</option>
                <option value="Oyo" <?php if($applicant_details['fstate'] == "Oyo"){ echo "selected"; }?>>Oyo</option>
                <option value="Plateau" <?php if($applicant_details['fstate'] == "Plateau"){ echo "selected"; }?>>Plateau</option>
                <option value="Rivers" <?php if($applicant_details['fstate'] == "Rivers"){ echo "selected"; }?>>Rivers</option>
                <option value="Sokoto" <?php if($applicant_details['fstate'] == "Sokoto"){ echo "selected"; }?>>Sokoto</option>
                <option value="Taraba" <?php if($applicant_details['fstate'] == "Taraba"){ echo "selected"; }?>>Taraba</option>
                <option value="Yobe" <?php if($applicant_details['fstate'] == "Yobe"){ echo "selected"; }?>>Yobe</option>
                <option value="Zamfara" <?php if($applicant_details['fstate'] == "Zamfara"){ echo "selected"; }?>>Zamfara</option>
                </select>     -->
            </div>    
                
            <!-- <div class="bio-form-div">
            <div class="bio-form-label">Your LGA<b>*</b></div> 
                <select class="bio-form-select" id="lga" name="lga" required>
                        <option value="">Select LGA</option>
                </select>     
            </div>  -->
                
            <div class="job-preferences-div">
            <div class="job-preferences-label">Your Job Preferences</div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Type<b>*</b></div> 
            <!-- <select class="bio-form-select"></select>  -->
                <select class="bio-form-select" id="employment_type" name="employment_type" required>
                    <option value="">Select one</option>
                    <option value="Full Time" <?php if($applicant_details['femployment_type'] == "Full Time"){ echo "selected"; }?>>Full Time</option>
                    <option value="Part Time" <?php if($applicant_details['femployment_type'] == "Part Time"){ echo "selected"; }?>>Part Time</option>
                    <option value="Remote" <?php if($applicant_details['femployment_type'] == "Remote"){ echo "selected"; }?>>Remote</option>
                    <option value="Contract" <?php if($applicant_details['femployment_type'] == "Contract"){ echo "selected"; }?>>Contract</option>
                    <option value="Internship" <?php if($applicant_details['femployment_type'] == "Internship"){ echo "selected"; }?>>Internship</option>
                </select>

            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 1<b>*</b></div> 
          
                <input type="text" class="bio-form-select" name="preferred_job1" id="preferred_job1" value="<?php echo $applicant_details['fother_professions4']; ?>" autocomplete="off"> 
                <div class="job-options-box" style="overflow: auto;">
                </div> 
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 2</div> 
            <input type="text" class="bio-form-select" name="preferred_job2" id="preferred_job2" value="<?php echo $applicant_details['fother_professions4']; ?>" autocomplete="off"> 
                <div class="job-options-box2" style="overflow: auto;">
                </div>
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 3</div> 
            <input type="text" class="bio-form-select" name="preferred_job3" id="preferred_job3" value="<?php echo $applicant_details['fother_professions4']; ?>" autocomplete="off"> 
                <div class="job-options-box3" style="overflow: auto;">
                </div>
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Job Option 4</div> 
            <input type="text" class="bio-form-select" name="preferred_job4" id="preferred_job4" value="<?php echo $applicant_details['fother_professions4']; ?>" autocomplete="off"> 
                <div class="job-options-box4" style="overflow: auto;">
                </div>  
            </div>
                
            <div class="bio-form-div">
            <div class="bio-form-label">Preferred State<b>*</b></div> 
            <?php echo $applicant_details['fstate']; ?>/<?php echo $applicant_details['flga']; ?> <span><button>Change</button></span>
              <!-- <select class="bio-form-select"  id="state2" name="preferred_job_location_state" required>
              <option value="" selected="selected"> Select State </option>
                <option value="Abia" <?php if($applicant_details['fstate'] == "Abia"){ echo "selected"; }?>>Abia</option>
                <option value="Adamawa" <?php if($applicant_details['fstate'] == "Adamawa"){ echo "selected"; }?>>Adamawa</option>
                <option value="AkwaIbom" <?php if($applicant_details['fstate'] == "AkwaIbom"){ echo "selected"; }?>>AkwaIbom</option>
                <option value="Anambra" <?php if($applicant_details['fstate'] == "Anambra"){ echo "selected"; }?>>Anambra</option>
                <option value="Bauchi" <?php if($applicant_details['fstate'] == "Bauchi"){ echo "selected"; }?>>Bauchi</option>
                <option value="Bayelsa" <?php if($applicant_details['fstate'] == "Bayelsa"){ echo "selected"; }?>>Bayelsa</option>
                <option value="Benue" <?php if($applicant_details['fstate'] == "Benue"){ echo "selected"; }?>>Benue</option>
                <option value="Borno" <?php if($applicant_details['fstate'] == "Borno"){ echo "selected"; }?>>Borno</option>
                <option value="Cross River" <?php if($applicant_details['fstate'] == "Cross River"){ echo "selected"; }?>>Cross River</option>
                <option value="Delta" <?php if($applicant_details['fstate'] == "Delta"){ echo "selected"; }?>>Delta</option>
                <option value="Ebonyi" <?php if($applicant_details['fstate'] == "Ebonyi"){ echo "selected"; }?>>Ebonyi</option>
                <option value="Edo" <?php if($applicant_details['fstate'] == "Edo"){ echo "selected"; }?>>Edo</option>
                <option value="Ekiti" <?php if($applicant_details['fstate'] == "Ekiti"){ echo "selected"; }?>>Ekiti</option>
                <option value="Enugu" <?php if($applicant_details['fstate'] == "Enugu"){ echo "selected"; }?>>Enugu</option>
                <option value="FCT" <?php if($applicant_details['fstate'] == "FCT"){ echo "selected"; }?>>FCT</option>
                <option value="Gombe" <?php if($applicant_details['fstate'] == "Gombe"){ echo "selected"; }?>>Gombe</option>
                <option value="Imo" <?php if($applicant_details['fstate'] == "Imo"){ echo "selected"; }?>>Imo</option>
                <option value="Jigawa" <?php if($applicant_details['fstate'] == "Jigawa"){ echo "selected"; }?>>Jigawa</option>
                <option value="Kaduna" <?php if($applicant_details['fstate'] == "Kaduna"){ echo "selected"; }?>>Kaduna</option>
                <option value="Kano" <?php if($applicant_details['fstate'] == "Kano"){ echo "selected"; }?>>Kano</option>
                <option value="Katsina" <?php if($applicant_details['fstate'] == "Katsina"){ echo "selected"; }?>>Katsina</option>
                <option value="Kebbi" <?php if($applicant_details['fstate'] == "Kebbi"){ echo "selected"; }?>>Kebbi</option>
                <option value="Kogi" <?php if($applicant_details['fstate'] == "Kogi"){ echo "selected"; }?>>Kogi</option>
                <option value="Kwara" <?php if($applicant_details['fstate'] == "Kwara"){ echo "selected"; }?>>Kwara</option>
                <option value="Lagos" <?php if($applicant_details['fstate'] == "Lagos"){ echo "selected"; }?>>Lagos</option>
                <option value="Nasarawa" <?php if($applicant_details['fstate'] == "Nasarawa"){ echo "selected"; }?>>Nasarawa</option>
                <option value="Niger" <?php if($applicant_details['fstate'] == "Niger"){ echo "selected"; }?>>Niger</option>
                <option value="Ogun" <?php if($applicant_details['fstate'] == "Ogun"){ echo "selected"; }?>>Ogun</option>
                <option value="Ondo" <?php if($applicant_details['fstate'] == "Ondo"){ echo "selected"; }?>>Ondo</option>
                <option value="Osun" <?php if($applicant_details['fstate'] == "Osun"){ echo "selected"; }?>>Osun</option>
                <option value="Oyo" <?php if($applicant_details['fstate'] == "Oyo"){ echo "selected"; }?>>Oyo</option>
                <option value="Plateau" <?php if($applicant_details['fstate'] == "Plateau"){ echo "selected"; }?>>Plateau</option>
                <option value="Rivers" <?php if($applicant_details['fstate'] == "Rivers"){ echo "selected"; }?>>Rivers</option>
                <option value="Sokoto" <?php if($applicant_details['fstate'] == "Sokoto"){ echo "selected"; }?>>Sokoto</option>
                <option value="Taraba" <?php if($applicant_details['fstate'] == "Taraba"){ echo "selected"; }?>>Taraba</option>
                <option value="Yobe" <?php if($applicant_details['fstate'] == "Yobe"){ echo "selected"; }?>>Yobe</option>
                <option value="Zamfara" <?php if($applicant_details['fstate'] == "Zamfara"){ echo "selected"; }?>>Zamfara</option>
                </select>   -->
            </div>   
<!--                 
            <div class="bio-form-div">
            <div class="bio-form-label">Preferred LGA<b>*</b></div> 
                <select class="bio-form-select" id="lga2" name="preferred_job_location_lga" required>
                        <option value="">Select LGA</option>
                </select>       
            </div>     -->
                
            </div>  
                
            <div class="start-date-main-div">
            <div class="bio-form-label">Start Date<b>*</b></div>    
            <input type="radio" id="immediately" name="availability_start_date" value="now" onclick="HideStartDate();" required <?php if(isset($applicant_details['availability_start_date']) == "2000-01-01"){ echo "checked"; }?>>
            <label for="immediately">Immediately</label>
            
            <br>
            <input type="radio" id="not_yet" name="availability_start_date" value="not_yet" onclick="HideStartDate();" <?php if(isset($applicant_details['availability_start_date']) == null){ echo "checked"; }?>>
            <label for="not_yet">Not Yet</label><br>    


            <input type="radio" id="select_date" name="availability_start_date" onclick="ShowStartDate();" <?php if(isset($applicant_details['availability_start_date']) != null && isset($applicant_details['availability_start_date']) != "2000-01-01"){ echo "checked"; }?>>
            <label for="select_date">Select Date</label>

            <div id="StartDateDiv" class="start-date-div"> 
            
                <input type="date" name="availability_start_date2" >
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
            <button type="submit" class="submit-bio-button">Save</button>    
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


            
            <br>
            
            </div>
    
                  
        </div>
            
        </section> 
        
        