<?php namespace App\Controllers;

use App\Models\ApplicantModel;
use App\Models\CompanyModel;
use App\Models\ApplicantExperienceModel;
use App\Models\ApplicantEducationModel;
use App\Models\ApplicantPortfolioModel;
use App\Models\ApplicantDocumentModel;
use App\Models\ApplicantWebLinkModel;
use App\Models\ApplicantProSkillModel;
use App\Models\ApplicantOtherSkillModel;
use App\Models\TeamModel;
use App\Models\JobModel;
use App\Models\JobInviteModel;
use App\Models\JobInviteMessageModel;
use App\Models\JobFinalChoiceModel;
use App\Models\EventModel;
use App\Models\TeamMessageModel;
use App\Models\TeamMemberModel;
use App\Models\RecommendationRequestModel;
use App\Models\RecommendationOfferModel;
use App\Models\MessageModel;
use App\Models\CompanyGalleryModel;

class Company extends BaseController
{
	function __construct() {

		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		} 

		
		
    }


    public function dashboard()
    {
		if(!session()->company_id)
        {
            return redirect()->to(base_url('/clogin'));
		} 


		$company_id = session()->company_id;
		
        $company = new CompanyModel();
        $data['company_details'] = $company->where('fcompany_id', $company_id)->first();

        $company_event = new EventModel();
        $data['company_events'] = $company_event->where('fauthor', $company_id)->orderBy('frecno', 'desc')->findAll();

		$company_gallery = new CompanyGalleryModel();
		$data['company_gallery'] = $company_gallery->where('fcompany_id', $company_id)->orderBy('frecno', 'desc')->findAll();


       //var_dump($data['company_gallery']);
    	return view('company/dashboard', $data);
	}
	


	public function updateprofileaction()
	{
		

		$locations = array_filter($this->request->getPost('locations'));
		$extracted_locations = implode(" -", $locations);


		$socials = array_filter($this->request->getPost('socials'));
		$extracted_socials = implode(" -", $socials);


		$data = [

            'fabout' => $this->request->getPost('about'),
            'flocations' => $extracted_locations,
            'fsocials' => $extracted_socials,
    
            ];
            
		
		//var_dump($data);

		$id = session()->id;

		$company = new CompanyModel();
		$updated = $company->update($id, $data);
		
		if($updated > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Company Profile updated successfully",
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Company Profile not updated",
			];
		}


		return $this->response->setJSON($response);
		
	}




	public function loadcompanyprofile()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		} 

		$company_id = session()->company_id;

        $company = new CompanyModel();
		$company_details = $company->where('fcompany_id', $company_id)->first();

		$output = "";
		
		if(empty($company_details))
		{
			$output .= '
				
						
					';
		}
		else
		{
		    $url = site_url();
		    
			$locations = explode("-", $company_details['flocations']);
			$socials = explode(",", $company_details['fsocials']);

			$output .= '
						<div class="about-div">
						<div class="about-label text-dark">About</div> 
						<div class="about text-dark">
							'.$company_details['fabout'].'
						</div>
						<hr>    
						</div>
					
						
						
						<div class="locations-div">
						<div class="locations-label text-dark">Locations</div> 
						
					';
		
			foreach($locations as $location)
			{


				$output .= '<div class="locations text-dark">'.$location.'</div>';

			}

			$output .= '<hr>    
            </div>
            <div class="social-div">
			<div class="social-label text-dark">Socials</div>
			';


			foreach($socials as $social)
			{


				$output2 .= '
                <a href="#"><div class="social-div-a">
                <div class="social">
                 <img src="'.$url.'public/employerassets/Images/Company%20%20Profile/Twitter-Logo.png" class="social-icon">Twitter</div></div></a>';

			}

			$output2 .= '<hr>
                
			</div>
			';


		}

		$data = array(
			'company_profile' =>	$output,
		);	

		return $this->response->setJSON($data);
	}


	
	public function createeventaction()
	{
		 //var_dump($this->request->getPost());
		//  if (! $this->validate([
		// 	// 'ffrom' => [
		// 	// 			'rules'  => 'required|trim',
		// 	// 			'errors' => [
		// 	// 				'required' => 'Event Start is required!',
		// 	// 				]
		// 	// 			],
		// 	// 'fto' => [
		// 	// 	'rules' => 'required|trim',
		// 	// 	'errors' => [
		// 	// 			'required' => 'Event End is required!',
		// 	// 	]
		// 	// ],
		// 	'ftitle' => [
		// 		'rules' => 'required|trim',
		// 		'errors' => [
		// 				'required' => 'Event Title is required!',
		// 		]
		// 	],
		// 	'fdescription' => [
		// 		'rules' => 'required|trim',
		// 		'errors' => [
		// 				'required' => 'Event Description is required!',
		// 		]
		// 	],

		
		// ]))
		// {
		// 	$response = [
		// 		'success' => false,
		// 		'data' => 'failed',
		// 		'msg' => "Event not added"
		// 	];
		// }
		
		// // $invitees = $this->request->getPost('invitees');
		// // $extracted_invitees = implode(",", $invitees);

		

        $data = [
            
			'ffrom' => $this->request->getPost('from'),
			'fto' => $this->request->getPost('to'),
			'ftitle' => $this->request->getPost('title'),
			//'finvitees' => $extracted_invitees,
			'fauthor' => $this->request->getPost('company_id'),
			'fevent_id' => 'EV' . time(),
			'fdescription' => $this->request->getPost('description'),
            
            ];
            
        //var_dump($start_time);

        $event = new EventModel();
		$event->insert($data);
		$inserted = $event->affectedRows();
		if($inserted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Event created successfully"
			];
			
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Event not created"
			];	
			
		}

		return $this->response->setJSON($response);
	}


	
	public function updateeventaction()
    {
        //var_dump($this->request->getPost());
        
		
		 //var_dump($this->request->getPost());
		//  if (! $this->validate([
		// 	// 'ffrom' => [
		// 	// 			'rules'  => 'required|trim',
		// 	// 			'errors' => [
		// 	// 				'required' => 'Event Start is required!',
		// 	// 				]
		// 	// 			],
		// 	// 'fto' => [
		// 	// 	'rules' => 'required|trim',
		// 	// 	'errors' => [
		// 	// 			'required' => 'Event End is required!',
		// 	// 	]
		// 	// ],
		// 	'ftitle' => [
		// 		'rules' => 'required|trim',
		// 		'errors' => [
		// 				'required' => 'Event Title is required!',
		// 		]
		// 	],
		// 	'fdescription' => [
		// 		'rules' => 'required|trim',
		// 		'errors' => [
		// 				'required' => 'Event Description is required!',
		// 		]
		// 	],

		
		// ]))
		// {
		// 	$response = [
		// 		'success' => false,
		// 		'data' => 'failed',
		// 		'msg' => "Event not added"
		// 	];
		// }
		
		// // $invitees = $this->request->getPost('invitees');
		// // $extracted_invitees = implode(",", $invitees);

        $id = $this->request->getPost('frecno');


		$data = [
            
			'ffrom' => date('Y-m-d H:i', strtotime($this->request->getPost('from'))),
			'fto' => date('Y-m-d H:i', strtotime($this->request->getPost('to'))),
			'ftitle' => $this->request->getPost('title'),
			//'finvitees' => $extracted_invitees,
			'fdescription' => $this->request->getPost('description'),
            
            ];
            
		
		//var_dump($data);
	

        $event = new EventModel();
        $updated = $event->update($id, $data);
		if($updated > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Event updated successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Event not updated"
			];
		}

		return $this->response->setJSON($response);

	}


	public function deleteeventaction()
    {
		$id = $this->request->getPost('event_id');
        $event = new EventModel();
        $event->where('frecno', $id)->delete();
        $deleted = $event->affectedRows();
		if($deleted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Event deleted successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Event not deleted"
			];
		}

		return $this->response->setJSON($response);
	}
	

	public function loadcompanyevents()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		}

		$company_id = session()->company_id;

        $company = new EventModel();
		$company_events = $company->where('fauthor', $company_id)->orderBy('frecno', 'desc')->findAll();

		$output = "";
		
		if(empty($company_events))
		{
			$output .='
				
                  
						<div class="posted-event-container">
							<p style="text-align:center">Seems you have no events yet. Add a new event to get started.</p>
						</div>
			  
						
				';
		}
		else
		{
			$url = site_url();

			foreach($company_events as $event)
			{


				$output .= '<div class="posted-event-container" >
            
				<div class="event-date-container">
				<div class="event-date-day text-dark">'.date('M j, Y', strtotime($event['ffrom'])).' - </div>  
		
				<div class="event-date-day text-dark">'.date('M j, Y', strtotime($event['fto'])).'</div>
					
				</div> 
					
				<div class="event-requirement-title text-dark">Title:</div> 
				<div class="event-title">'.$event['ftitle'].'<hr></div>  
					
				<div class="event-requirement-container">
				<div class="event-requirement-title text-dark">Requirement:</div> 
				<div class="event-requirement"><a href="#">
				Diamnond Bank Fair Tickets</a><hr></div>    
				</div>    
				
				<div class="event-requirement-title text-dark">Description:</div> 
				<div class="event-description">
				'.$event['fdescription'].'    
				</div>  
					
					
				<div class="posted-events-buttons">   
				 <button class="edit-event-button" id="'.$event['frecno'].'" onclick="EditEventForm(this.id)"><img src="'.$url.'/public/employerassets/Images/Company%20%20Profile/Edit%20icon.png"></button> 
					&nbsp;
				 <button class="delete-event-button event-delete" data-event_id="'.$event['frecno'].'"><img src="'.$url.'/public/employerassets/Images/Company%20%20Profile/Delete%20icon.png"></button>
				</div> 
		
		
		
				<div  id="edit-event-form_'.$event['frecno'].'" class="add-event-container-padding close-edit-event">
				<hr>
				<div class="add-event-form-container">
					
				<form id="update-event-form" class="add-event-form">
		
				
				<input type="hidden" name="frecno" value="'.$event['frecno'].'">
				 
				<div class="form-event-date-div">
				<div class="form-event-date-label">Start Date</div> 
		
		
				<div class="row">
							<div class="col-lg-6">
							<label for="">From*</label>
								<input type="datetime-local" class="form-control" value="'.date('Y-m-d\TH:i', strtotime($event['ffrom'])).'" name="from" id="from" required>
							   
							</div>
							<br><br>
							<div class="col-lg-6">
							<label for="">To*</label>
								<input type="datetime-local" class="form-control" value="'.date('Y-m-d\TH:i', strtotime($event['fto'])).'" name="to" id="to" required>
							</div>
						</div>
				  
				</div>
		  
		
				<br>
		
				<div class="form-event-title-div">
				<div class="form-event-title-label">Title</div>
				<input class="form-event-title-input" name="title" value="'.$event['ftitle'].'" style="width:100%;">    
				</div>
					
				<!-- <div class="form-event-requirement-div">
				<div class="form-event-requirement-label">Event Requirement</div>
				<input class="form-event-requirement-input" name="" style="width:100%;">    
				</div> -->
					
				<div class="form-event-description-div">
				<div class="form-event-description-label">Event Description</div>
				<textarea class="form-event-description-input" name="description" style="width:100%;">'.$event['fdescription'].'</textarea>    
				</div>
					
				<div align="right" class="add-event-form-buttons">
				<button onclick="location.reload();" class="cancel-add-event-button">
				Cancel</button>
				<button type="submit" class="finish-add-event-button">
				Update</button>    
				</div>    
					
				</form>    
					
				</div> 
					</div> 
		
				</div> 
		
				<br>';

			}



			//var_dump($company_events);
		}

		
		$data = array(
			'company_events' => $output,
		);	

		return $this->response->setJSON($data);

	}


	public function uploadgalleryaction()
	{
		if (! $this->validate([
			'fileid' => [
                'uploaded[fileid]',
                'mime_in[fileid,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[fileid,4096]',
            ],
	
		]))
		{
			
			
        }
        
        $filh = $this->request->getFile('fileid');
		$ndfgf = $filh->getRandomName();
		$PATH = getcwd();
		$filh->move($PATH .'/public/companygalleries', $ndfgf);

		 $data = [

			'fimage' => $ndfgf,
			'fimage_id' => 'IMG'. time(),
			'fcompany_id' => $this->request->getPost('company_id'),

		];
		
		 $gallery = new companyGalleryModel();
        
		$gallery->insert($data);
	   $inserted = $gallery->affectedRows();
		if($inserted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Image uploaded successfully"
			];
			
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Image not uploaded"
			];
		}	

		//var_dump($filh);

		
		return $this->response->setJSON($response);
	}


	public function deletegalleryaction()
	{	

		$image_id = $this->request->getPost('image_id');
		$image_name = $this->request->getPost('image_name');
		
		$gallery = new companyGalleryModel();
		$gallery->where('frecno', $image_id)->delete();
		$deleted = $gallery->affectedRows();
		if($deleted > 0)
		{
			$PATH = getcwd();
			unlink($PATH .'/public/companygalleries/'.$image_name);
			$response = [
				'success' => true,
				'data' => 'done',
				'msg' => "Image deleted"
			];
		}

		return $this->response->setJSON($response);

	}


	public function jobdash()
	{

		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		} 
		
		$company_id = session()->company_id;
		
        $company = new CompanyModel();
		$data['company_details'] = $company->where('fcompany_id', $company_id)->first();

		$job = new JobModel();
		$data['jobs'] = $job->where('femployer_id', $company_id)->findAll();



		//var_dump($data['jobs']);
		
		return view('company/jobdash', $data);

	}

	public function createjobaction()
	{

		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		} 

		
		 if (! $this->validate([
			'job_title' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Job Title is required!',
							]
						],
			'employment_type' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Employment Type is required!',
				]
			],
			'workdays' => [
				'rules' => 'required',
				'errors' => [
						'required' => 'Work days is required!',
				]
			],
			'work_time_start' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Work Time Start is required!',
				]
			],
			'work_time_end' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Work Time End is required!',
				]
			],
			'job_description' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Job Description is required!',
				]
			],
			
		
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			redirect('company/jobdash');
		}
		
		
		$workdays = array_filter($this->request->getPost('workdays'));
		$extracted_workdays = implode(",", $workdays);

		$job_title = $this->request->getPost('job_title');
		$employment_type = $this->request->getPost('employment_type');
		$location_state = $this->request->getPost('state');
		$location_lga = $this->request->getPost('lga');
		$educational_qualification = $this->request->getPost('educational_qualification');

		$job_id = 'JB' . time();

        $data = [

            'fjob_id' => $job_id,
			'fjob_title' => $job_title,
			'femployment_type' => $employment_type,
			'flocation_state' => $location_state,
			'flocation_lga' => $location_lga,
			'fworkdays' => $extracted_workdays,
			'fwork_time_start' => $this->request->getPost('work_time_start'),
			'fwork_time_end' => $this->request->getPost('work_time_end'),
			'feducational_qualification' => $educational_qualification,
			'fjob_description' => $this->request->getPost('job_description'),
			'femployer_id' => $this->request->getPost('company_id'),
			'femployer_name' => $this->request->getPost('company_name'),
	
            ];
            
    	//var_dump($data);

        $job = new JobModel();
		$job->insert($data);
		$inserted = $job->affectedRows();
		if($inserted > 0)
		{

			$db = \Config\Database::connect();

		
			$sql ="SELECT * FROM `tapplicants` WHERE factive = 1";

         
			if(!empty($job_title))
			{
			
				$sql .=" AND  fprofession ='".$job_title."'";
			}

			if(!empty($employment_type))
			{
			
				$sql .=" AND femployment_type ='".$employment_type."'";
			}

			if(!empty($location_state))
			{
			
				$sql .=" AND fstate ='".$location_state."'";
			}
			
			if(!empty($location_lga))
			{
			
				$sql .=" AND flga ='".$location_lga."'";
			}

			if(!empty($educational_qualification))
			{
			
				$sql .=" AND feducational_qualification ='".$educational_qualification."'";
			}
         

         	$query_addendum =" ORDER BY ffirst_name ASC;";
        
			$query = $db->query($sql.$query_addendum);
			$data['results'] = $query->getResult();

			//var_dump($results);

			$company_id = session()->company_id;
		
			$company = new CompanyModel();
			$data['company_details'] = $company->where('fcompany_id', $company_id)->first();

			$data['job_id'] = $job_id;
			$data['job_title'] = $job_title;

			session()->setFlashdata('success', 'Job created successfully');
			return view('company/applicantsearch', $data);

		}
		else
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			redirect('company/jobdash');
		}
	
	}


	public function jobs()
	{
		
		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		} 

		return view('company/jobs');


	}


	public function job($job_id)
	{
		
		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		} 

		$job_invite_message = new JobInviteMessageModel();
		$data['job_invite_messages'] = $job_invite_message->where('fjob_id', $job_id)->groupBy('fsender_id')->findAll();

		//$data['applicants_invited'] = $data['job_invite']['fapplicants_id'];

		return view('company/jobinvites', $data);

		//var_dump($data);

	}


	public function jobinviteaction()
	{

		$applicants = array_filter($this->request->getPost('applicant_id'));
		$extracted_applicants = implode(" -", $applicants);
		

		$data = [
		
			'fjob_id' => $this->request->getPost('job_id'),
			'fjob_title' => $this->request->getPost('job_title'),
			'fapplicants_id' => $extracted_applicants,
			'fcompany_id' => $this->request->getPost('company_id'),
			'fcompany_name' => $this->request->getPost('company_name'),
		
		];
            
		
		//var_dump($data);
		
	
        $job_invite = new JobInviteModel();
	    $job_invite->insert($data);
		$inserted = $job_invite->affectedRows();
		
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Job Invites sent successfully to selected candidates');
			return redirect()->to(base_url('company/jobdash'));
		}
		else
		{
			session()->setFlashdata('error', 'Error! Job Invites not sent. Try again.');
			return redirect()->to(base_url('company/createjobaction'));
		}
	}



	public function inbox()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		} 
		
		$company_id = session()->company_id;
		
		$company = new CompanyModel();
		
        $data['company_details'] = $company->where('fcompany_id', $company_id)->first();

        $message = new MessageModel();
		$data['inbox'] = $message->where('freceiver_id', $company_id)->findAll();
		$data['sent'] = $message->where('fsender_id', $company_id)->findAll();

		$data['inbox_count'] = count($data['inbox']);
		$data['sent_count'] = count($data['sent']);

		//$job_invite_message = new JobInviteMessageModel();
		// $data['job_invite_messages'] = $job_invite_message->where('fapplicant_id',$applicant_id)->where('fjob_id', $job_id)->findAll();

		//var_dump($data);

		 return view('company/inbox', $data);

	}


	public function createmessageaction()
	{


		$applicant_id = session()->applicant_id;


		$applicant = new ApplicantModel();
	
		$receiver = $applicant->where('fapplicant_id', $this->request->getPost('receiver_id'))->first();
		

		 $data = [

			'freceiver_id' => $this->request->getPost('receiver_id'),
			'freceiver_name' => $receiver['ffirst_name']. ' ' . $receiver['flast_name'],
			'fsender_id' => $this->request->getPost('sender_id'),
			'fsender_name' => $this->request->getPost('sender_name'),
			'fmessage_id' => 'MG' . time(),
			'fparent_message_id' => $this->request->getPost('parent_message_id'),
			'fcontent' => $this->request->getPost('content'),
			'fsubject' => $this->request->getPost('subject'),
            
		   ];
		   
		  //var_dump($data);
            
		
		$message = new MessageModel();
		$message->insert($data);
		$inserted = $message->affectedRows();
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Message sent successfully');
			return redirect()->to(base_url('company/messages/inbox'));
		}
		else
		{
			session()->setFlashdata('error', 'Message not sent');
			return redirect()->to(base_url('company/messages/inbox'));
		}
	}


	public function sent()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		} 

		$company_id = session()->company_id;
		
		$company = new CompanyModel();
		
        $data['company_details'] = $company->where('fcompany_id', $company_id)->first();

        $message = new MessageModel();
		$data['inbox'] = $message->where('freceiver_id', $company_id)->findAll();
		$data['sent'] = $message->where('fsender_id', $company_id)->findAll();

		$data['inbox_count'] = count($data['inbox']);
		$data['sent_count'] = count($data['sent']);

		//$job_invite_message = new JobInviteMessageModel();
		// $data['job_invite_messages'] = $job_invite_message->where('fapplicant_id',$applicant_id)->where('fjob_id', $job_id)->findAll();

		//var_dump($data['sent']);

		 return view('company/sent', $data);

	}


	
	public function emaildetails($message_id)
	{
		$message = new MessageModel();
		
		$data['message_details'] = $message->where('fmessage_id', $message_id)->first();
		
		//var_dump($data);

		return view('school/email_details', $data);
	}


	public function messagedetails($job_id, $applicant_id)
	{

		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		} 


		$company_id = session()->company_id;
		
		$company = new CompanyModel();
		
        $data['company_details'] = $company->where('fcompany_id', $company_id)->first();

		$job_invite_message = new JobInviteMessageModel();
		$data['messages'] = $job_invite_message->where('fjob_id', $job_id)->where('fapplicant_id', $applicant_id)->orderBy('frecno', 'asc')->findAll();
		
		//var_dump($data['messages']);

		$job_model = new JobModel();
		$data['job'] = $job_model->where('fjob_id', $job_id)->first();

		$applicant_id = $this->request->uri->getSegment(5);

		$applicant = new ApplicantModel();
	
		$data['applicant_details'] = $applicant->where('fapplicant_id', $applicant_id)->first();

		$job_final_choice_model = new JobFinalChoiceModel();

		$data['applicant_status'] = $job_final_choice_model->where('fapplicant_id', $applicant_id)->where('fjob_id', $job_id)->first();


		//var_dump($data['applicant_status']);

		
		return view('company/job_invite_message_details', $data);

	}


	public function sendjobdashmessage()
	{


		
        $data = [

			'fjob_id' => $this->request->getPost('job_id'),
            'fjob_title' => $this->request->getPost('job_title'),
			'fmessage' => $this->request->getPost('message'),
			'fsubject' => $this->request->getPost('subject'),
			'fsender_id' => $this->request->getPost('company_id'),
			'freceiver_id' => $this->request->getPost('applicant_id'),
			'fapplicant_id' => $this->request->getPost('applicant_id'),
			'fapplicant_name' => $this->request->getPost('applicant_name'),
			'fcompany_id' => $this->request->getPost('company_id'),
			'fcompany_name' => $this->request->getPost('company_name'),
			
            
            ];
            
		//var_dump($data);

		$job_invite_message_model = new JobInviteMessageModel();
		$job_invite_message_model->insert($data);
		$inserted = $job_invite_message_model->affectedRows();
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Message sent successfully');
			return redirect()->to(base_url('company/messagedetails/'.$this->request->getPost('job_id').'/'.$this->request->getPost('applicant_id')));
		}
		else
		{
			session()->setFlashdata('error', 'Message not added');
			return redirect()->to(base_url('company/messagedetails/'.$this->request->getPost('job_id').'/'.$this->request->getPost('applicant_id')));
		}
		
	}


	public function jobfinalchoice()
	{
		$data = [

			'fjob_id' => $this->request->getPost('job_id'),
            'fjob_title' => $this->request->getPost('job_title'),
			'fstatus' => $this->request->getPost('final_choice'),
			'fapplicant_id' => $this->request->getPost('applicant_id'),
			'fapplicant_name' => $this->request->getPost('applicant_name'),
			'fcompany_id' => $this->request->getPost('company_id'),
			'fcompany_name' => $this->request->getPost('company_name'),
			
            
            ];
            
		//var_dump($data);

		$job_final_choice_model = new JobFinalChoiceModel();
		$job_final_choice_model->insert($data);
		$inserted = $job_final_choice_model->affectedRows();
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Choice sent successfully');
			return redirect()->to(base_url('company/messagedetails/'.$this->request->getPost('job_id').'/'.$this->request->getPost('applicant_id')));
		}
		else
		{
			session()->setFlashdata('error', 'Choice not added');
			return redirect()->to(base_url('company/messagedetails/'.$this->request->getPost('job_id').'/'.$this->request->getPost('applicant_id')));
		}



	}


	public function search()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		} 

		return view('company/search');
	}


	public function settings()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/clogin'));
		}  
		
		return view('company/settings');
	}



    public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/'));
	}

}
	