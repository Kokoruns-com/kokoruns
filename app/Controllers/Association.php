<?php namespace App\Controllers;

use App\Models\ApplicantModel;
use App\Models\AssociationModel;
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
use App\Models\AssociationGalleryModel;
use App\Models\AssociationBranchModel;
use App\Libraries\Zebra_Image;

class Association extends BaseController
{
	function __construct() 
	{

		if(!session()->id)
        {
            return redirect()->to(base_url('/alogin'));
		} 
	
    }


    public function dashboard()
    {
		if(!session()->id)
        {
            return redirect()->to(base_url('/alogin'));
		} 

		$association_id = session()->association_id;
		
        $association = new AssociationModel();
        $data['association_details'] = $association->where('fassociation_id', $association_id)->first();


		$association_gallery = new AssociationGalleryModel();
		$data['association_gallery'] = $association_gallery->where('fassociation_id', $association_id)->orderBy('frecno', 'desc')->findAll();


		$association_branch = new AssociationBranchModel();
		$data['association_branches'] = $association_branch->where('fassociation_id', $association_id)->orderBy('fbranch_name', 'asc')->findAll();


       //var_dump($data['association_branches']);
		return view('association/dashboard', $data);
	
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

		$association = new AssociationModel();
		$updated = $association->update($id, $data);
		
		if($updated > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "School Profile updated successfully",
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "School Profile not updated",
			];
		}


		return $this->response->setJSON($response);
		
	}




	public function loadassociationprofile()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/alogin'));
		} 

		$association_id = session()->association_id;

        $association = new AssociationModel();
		$association_details = $association->where('fassociation_id', $association_id)->first();

		$output = "";
		
		if(empty($association_details))
		{
			$output .= '
				
						
					';
		}
		else
		{

			$url = site_url(); 

			$locations = explode("-", $association_details['flocations']);
			$socials = explode(",", $association_details['fsocials']);

			$output .= '
						<div class="about-div">
						<div class="about-label"><img src="" class="">About</div> 
						<div class="about">
							'.$association_details['fabout'].'
						</div>
						<hr>    
						</div>
					
						
						
						<div class="locations-div">
						<div class="locations-label"><img src="" class="">Locations</div> 
						
					';
		
			foreach($locations as $location)
			{


				$output .= '<div class="locations">'.$location.'</div>';

			}

			$output .= '<hr>    
            </div>
            <div class="social-div">
			<div class="social-label">Socials</div>
			';


			foreach($socials as $social)
			{


				$output .= '
                <a href="#"><div class="social-div-a">
                <div class="social">
                <img src="'.$url.'public/employerassets/Images/Company%20%20Profile/Twitter-Logo.png" class="social-icon">Twitter</div></div></a>';

			}

			$output .= '<hr>
                
			</div>
			';


		}

		$data = array(
			'association_profile' => $output,
		);	

		return $this->response->setJSON($data);
	}


	public function updateaboutaction()
	{
		
		$data = [

            'fabout' => $this->request->getPost('about'),
    
            ];
            
		
		//var_dump($data);

		$id = session()->id;

		$association = new AssociationModel();
		$updated = $association->update($id, $data);
		
		if($updated > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Association Profile updated successfully",
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Association Profile not updated",
			];
		}


		return $this->response->setJSON($response);
	}

	///createbranchaction
	

	public function createbranchaction()
	{
		 //var_dump($this->request->getPost());
		 if (! $this->validate([
			'branch_name' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Branch name is required!',
							]
						],
			'branch_manager' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Branch Manager is required!',
				]
			],
			'branch_address' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Branch Address is required!',
				]
			],
			'branch_phone' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Branch Phone is required!',
				]
			],
			'branch_email' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Branch Email is required!',
				]
			],

		
		]))
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Branch not added"
			];
		}
		
		$association_id = session()->association_id;

        $association = new AssociationModel();
		$association_details = $association->where('fassociation_id', $association_id)->first();


        $data = [
			'fassociation_id' => $association_details['fassociation_id'],
            'fbranch_id' => 'BR' . time(),
			'fbranch_name' => $this->request->getPost('branch_name'),
			'fbranch_manager' => $this->request->getPost('branch_manager'),
			'fbranch_address' => $this->request->getPost('branch_address'),
			'fbranch_phone' => $this->request->getPost('branch_phone'),
			'fbranch_email' => $this->request->getPost('branch_email'),
            
            ];
            
        //var_dump($start_time);

        $branch = new AssociationBranchModel();
		$branch->insert($data);
		$inserted = $branch->affectedRows();
		if($inserted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Branch created successfully"
			];
			
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Branch not created"
			];	
			
		}

		return $this->response->setJSON($response);
	}


	public function updatebranchaction()
	{
		//editbranchaction

		$id = $this->request->getPost('id');

		$data = [
	
			'fbranch_name' => $this->request->getPost('branch_name'),
			'fbranch_manager' => $this->request->getPost('branch_manager'),
			'fbranch_address' => $this->request->getPost('branch_address'),
			'fbranch_phone' => $this->request->getPost('branch_phone'),
			'fbranch_email' => $this->request->getPost('branch_email'),
            
			];



			$branchm = new AssociationBranchModel();
			$updated = $branchm->update($id, $data);
		
			if($updated > 0)
			{
				$response = [
					'success' => true,
					'data' => 'saved',
					'msg' => "Association Branch deleted successfully",
				];
			}
			else
			{
				$response = [
					'success' => false,
					'data' => 'failed',
					'msg' => "Association branch not deleted",
				];
			}

			return $this->response->setJSON($response);

	}


	public function deletebranchaction()
    {
		$id = $this->request->getPost('recno');
        $as = new AssociationBranchModel();
        $as->where('frecno', $id)->delete();
        $deleted = $as->affectedRows();
		if($deleted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Association branch deleted successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Association branch not deleted"
			];
		}

		return $this->response->setJSON($response);
	}




	public function updatesocialsaction()
	{
		//editbranchaction

		$id = $this->request->getPost('id');

		$data = [
	
			'flinkedin' => $this->request->getPost('linkedin'),
			'ffacebook' => $this->request->getPost('facebook'),
			'finstagram' => $this->request->getPost('instagram'),
            
			];



			$am = new AssociationModel();
			$updated = $am->update($id, $data);
		
			if($updated > 0)
			{
				$response = [
					'success' => true,
					'data' => 'saved',
					'msg' => "Socials updated successfully",
				];
			}
			else
			{
				$response = [
					'success' => false,
					'data' => 'failed',
					'msg' => "Association branch not deleted",
				];
			}

			return $this->response->setJSON($response);

	}

	



	public function updateinfoaction()
	{
		//editbranchaction

		$id = $this->request->getPost('recno');
		//$id = 22;

		$data = [
	
			'fcac' => $this->request->getPost('cac'),
			'fwebsite' => $this->request->getPost('website'),
			'ffield' => $this->request->getPost('field'),
			'fmain_office_location' => $this->request->getPost('main_office_location'),
			'fassociation_contact_email' => $this->request->getPost('contact_email'),
            
			];



			$assoc = new AssociationModel();
			$updated = $assoc->update($id, $data);
		
			if($updated > 0)
			{
				$response = [
					'success' => true,
					'data' => 'saved',
					'msg' => "Association Profile updated successfully",
				];
			}
			else
			{
				$response = [
					'success' => false,
					'data' => 'failed',
					'msg' => "Association Profile not updated",
				];
			}

			return $this->response->setJSON($response);

	}
	
	


	
	public function createeventaction()
	{
		 //var_dump($this->request->getPost());
		 if (! $this->validate([
			'event_start' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Event Start is required!',
							]
						],
			'event_end' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Event End is required!',
				]
			],
			'event_title' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Event Title is required!',
				]
			],
			'event_location' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Event Title is required!',
				]
			],
			'event_description' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Event Description is required!',
				]
			],

		
		]))
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Event not added"
			];
		}
		
		// // $invitees = $this->request->getPost('invitees');
		// // $extracted_invitees = implode(",", $invitees);

		
		if($this->request->getPost('event_price') == 'free')
		{
			$price1 = 0;
			$price2 = null;
		}
		else if(!empty($this->request->getPost('event_price_from2')))
		{
			$price1 = $this->request->getPost('event_price_from2');
			$price2 = null;
		}
		else if(!empty($this->request->getPost('event_price_from3')) && !empty($this->request->getPost('event_price_to')))
		{
			$price1 = $this->request->getPost('event_price_from3');
			$price2 = $this->request->getPost('event_price_to');

		}



        $data = [
			
			'fevent_id' => 'EV' . time(),
			'ffrom' => $this->request->getPost('event_start'),
			'fto' => $this->request->getPost('event_end'),
			'ftitle' => $this->request->getPost('event_title'),
			'fevent_location' => $this->request->getPost('event_location'),
			'fauthor' => $this->request->getPost('author'),
			'fdescription' => $this->request->getPost('event_description'),
			'fevent_price1' => $price1,
			'fevent_price2' => $price2,

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
	

	public function loadassociationevents()
	{

		$association_id = session()->association_id;

        $association = new EventModel();
		$association_events = $association->where('fauthor', $association_id)->orderBy('frecno', 'desc')->findAll();

		$output = "";
		
		if(empty($association_events))
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

			foreach($association_events as $event)
			{
				if(empty($event['fevent_price1']))
				{
					$price_tag1 = "Free";

					$price_tag2 = "";
				}
				else if(!empty($event['fevent_price1']))
				{
					$price_tag1 = '₦'. number_format($event['fevent_price1']);

					$price_tag2 = "";
				}
				else if(!empty($event['fevent_price2']))
				{
					$price_tag1 = '₦'. number_format($event['fevent_price1']);

					$price_tag2 = '₦'. number_format($event['fevent_price2']);
				}

				$output .= '<div class="bg-dark text-white p-3 mb-2">
					<h5>'.strtoupper($event['ftitle']).'</h5>
					<i class="fas fa-calender"></i>'.date('M j, Y', strtotime($event['ffrom'])).' - '.date('M j, Y', strtotime($event['fto'])).' | '.$event['fevent_location'].'

					<br>
					<br>

					<p>'.$event['fdescription'].'</p>

					<i class="fa fa-globe"></i> www.icanng/meetup/fair

					<br><br>

					<button class="btn btn-white bg-white">Price:</button>&nbsp;'.$price_tag1.' '.$price_tag2.'

					
					<br>
					<div class="text-right">
						<i class="fa fa-edit text-white edit-event-button text-warning cursor" data-edit_id="'.$event['frecno'].'" data-event_title="'.$event['ftitle'].'" data-event_start="'.date("Y-m-d\TH:i:s", strtotime($event['ffrom'])).'" data-event_end="'.date("Y-m-d\TH:i:s", strtotime($event['fto'])).'" data-event_description="'.$event['fdescription'].'" data-event_location="'.$event['fevent_location'].'"></i>&nbsp;
						<i class="fa fa-trash text-white delete-event-button text-danger cursor" data-delete_id="'.$event['frecno'].'"></i>
					</div>
				</div>';


			}

		}

		
		$data = array(
			'association_events' => $output,
		);	

		return $this->response->setJSON($data);

	}


	public function ebroadcast()
	{
		$applicant_id = session()->association_id;


		 $applicant = new ApplicantModel();
	
		//

		$applicant_ids = ['godson.ihemere', 'gbemileke.daniel', 'bunto.ronny', 'demilade.oyeyele'];


		$receivers = array();
		foreach ($applicant_ids as $id) 
		{
			$receivers[] = $applicant->where('fapplicant_id', $id)->select('ffirst_name', 'flast_name')->first();
		}
	
		$message_id = 'mg' . time();

		for($i=0; $i<count($applicant_ids); $i++)
		{
			$data[]=array(
				'fsender_id' => $this->request->getPost('sender'),
				'fsender_name' => $this->request->getPost('sender_name')[$i],
				'fsubject'=> $this->request->getPost('subject')[$i],
				'fcontent'=> $this->request->getPost('message')[$i],
				'freceiver_id'=>$applicant_ids[$i],
				'freceiver_name'=> $receivers[$i],
				'fmessage_id' => $message_id,
				'fis_broadcast' => 1,
			);
		}


		   
		//   var_dump($data);
            
		
			$message = new MessageModel();

			$message->insertBatch($data);


	
		$inserted = $message->affectedRows();
		if($inserted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Broadcast sent successfully"
			];
			
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Broadcast not sent"
			];
		}	


		return $this->response->setJSON($response);

	}



	public function loadbroadcasts()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/alogin'));
		} 

		$association_id = session()->association_id;

    
		$message = new MessageModel();
		$broadcasts = $message->where('fsender_id', $association_id)->where('fis_broadcast', 1)->findAll();

		$output = "";
		
		if(empty($broadcasts))
		{
			$output .= '
				
						
					';
		}
		else
		{

			$output .='<table class="table table-bordered table-sm datatable">
			<thead>
			<tr>
				<th>Subject</th>
				<th>Content</th>
				<th>Date Created</th>
			</tr>
			</thead>
			<tbody >';

			foreach($broadcasts as $broadcast)
			{

				$output .= '

							
						<tr>
							<td>'.$broadcast['fsubject'].'</td>
							<td>'.$broadcast['fcontent'].'</td>
							<td>'.$broadcast['created_at'].'</td>
						</tr>'
						

						;
			 }

			 $output .= 
			 		'</tbody>
			 		</table>';

		}

		$data = array(
			'broadcasts' => $output,
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
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Image not uploaded"
			];
        }
        
        $filh = $this->request->getFile('fileid');
		$ndfgf = $filh->getRandomName();
		$PATH = getcwd();
		//$filh->move($PATH .'/public/associationgalleries', $ndfgf);

		$full_path = $filh->getTempName();

		// create a new instance of the class
	
		$image = new Zebra_Image();

		// if you handle image uploads from users and you have enabled exif-support with --enable-exif
		// (or, on a Windows machine you have enabled php_mbstring.dll and php_exif.dll in php.ini)
		// set this property to TRUE in order to fix rotation so you always see images in correct position
		$image->auto_handle_exif_orientation = false;

		// indicate a source image (a GIF, PNG or JPEG file)
		$image->source_path = $full_path;

		// indicate a target image
		// note that there's no extra property to set in order to specify the target
		// image's type -simply by writing '.jpg' as extension will instruct the script
		// to create a 'jpg' file
		$image->target_path = 'public/associationgalleries/600/'. $ndfgf;

		// since in this example we're going to have a jpeg file, let's set the output
		// image's quality
		$image->jpeg_quality = 100;

		// some additional properties that can be set
		// read about them in the documentation
		$image->preserve_aspect_ratio = true;
		$image->enlarge_smaller_images = true;
		$image->preserve_time = true;
		$image->handle_exif_orientation_tag = true;

		// resize the image to exactly 100x100 pixels by using the "crop from center" method
		// (read more in the overview section or in the documentation)
		//  and if there is an error, check what the error is about
		if (!$image->resize(400, 245, ZEBRA_IMAGE_CROP_CENTER)) {

			// if there was an error, let's see what the error is about
			switch ($image->error) {

				case 1:
					echo 'Source file could not be found!';
					break;
				case 2:
					echo 'Source file is not readable!';
					break;
				case 3:
					echo 'Could not write target file!';
					break;
				case 4:
					echo 'Unsupported source file format!';
					break;
				case 5:
					echo 'Unsupported target file format!';
					break;
				case 6:
					echo 'GD library version does not support target file format!';
					break;
				case 7:
					echo 'GD library is not installed!';
					break;
				case 8:
					echo '"chmod" command is disabled via configuration!';
					break;
				case 9:
					echo '"exif_read_data" function is not available';
					break;

			}
		// if no errors
		} //else echo 'Success!';


		 $data = [

			'fimage' => $ndfgf,
			'fimage_id' => 'IMG'. time(),
			'fassociation_id' => $this->request->getPost('association_id'),


		];
		
		$gallery = new AssociationGalleryModel();
        
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
		
		$gallery = new AssociationGalleryModel();
		$gallery->where('fimage_id', $image_id)->delete();
		$deleted = $gallery->affectedRows();
		if($deleted > 0)
		{
			$PATH = getcwd();
			//unlink($PATH .'/public/associationgalleries/'.$image_name);
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
            return redirect()->to(base_url('/slogin'));
		} 
		
		$association_id = session()->association_id;
		
        $association = new AssociationModel();
		$data['association_details'] = $association->where('fassociation_id', $association_id)->first();

		$job = new JobModel();
		$data['jobs'] = $job->where('femployer_id', $association_id)->findAll();



		//var_dump($data['jobs']);
		
		return view('association/jobdash', $data);

	}

	public function createjobaction()
	{

		if(!session()->id)
        {
            return redirect()->to(base_url('/slogin'));
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
			redirect('association/jobdash');
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
			'femployer_id' => $this->request->getPost('association_id'),
			'femployer_name' => $this->request->getPost('association_name'),
	
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
			
				// $sql .=" AND  fprofession ='".$job_title."' OR fpreferred_job1 ='".$job_title."' ";
				$sql .=" AND  fprofession ='".$job_title."' OR fpreferred_job1 ='".$job_title."' OR fpreferred_job2 ='".$job_title."' OR fpreferred_job3 ='".$job_title."'OR fpreferred_job4 ='".$job_title."' OR fother_professions1 ='".$job_title."' OR 	fother_professions2 ='".$job_title."' OR fother_professions3 ='".$job_title."' OR fother_professions4 ='".$job_title."' ";
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

			$association_id = session()->association_id;
		
			$association = new AssociationModel();
			$data['association_details'] = $association->where('fassociation_id', $association_id)->first();

			$data['job_id'] = $job_id;
			$data['job_title'] = $job_title;

			session()->setFlashdata('success', 'Job created successfully');
			return view('association/applicantsearch', $data);

		}
		else
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			redirect('association/jobdash');
		}

	}


	public function jobs()
	{
		
		if(!session()->id)
        {
            return redirect()->to(base_url('/alogin'));
		} 

		return view('association/jobs');


	}


	public function job($job_id)
	{
		
		if(!session()->id)
        {
            return redirect()->to(base_url('/alogin'));
		} 

		$job_invite_message = new JobInviteMessageModel();
		$data['job_invite_messages'] = $job_invite_message->where('fjob_id', $job_id)->groupBy('fsender_id')->findAll();

		//$data['applicants_invited'] = $data['job_invite']['fapplicants_id'];

		return view('association/jobinvites', $data);

		//var_dump($data);

	}


	public function jobinviteaction()
	{
		//var_dump($this->request->getPost());
		$applicants = array_filter($this->request->getPost('applicant_id'));
		$extracted_applicants = implode(" -", $applicants);
		

		$data = [
		
			'fjob_id' => $this->request->getPost('job_id'),
			'fjob_title' => $this->request->getPost('job_title'),
			'fapplicants_id' => $extracted_applicants,
			'femployer_id' => $this->request->getPost('association_id'),
			'femployer_name' => $this->request->getPost('association_name'),
		
		];
            
		
		//var_dump($data);
		
	
        $job_invite = new JobInviteModel();
	    $job_invite->insert($data);
		$inserted = $job_invite->affectedRows();
		
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Job Invites sent successfully to selected candidates');
			return redirect()->to(base_url('association/jobdash'));
		}
		else
		{
			session()->setFlashdata('error', 'Error! Job Invites not sent. Try again.');
			return redirect()->to(base_url('association/createjobaction'));
		}
	}



	public function inbox()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/alogin'));
		} 
		
		$association_id = session()->association_id;
		
		$association = new AssociationModel();
		
        $data['association_details'] = $association->where('fassociation_id', $association_id)->first();

        $message = new MessageModel();
		$data['inbox'] = $message->where('freceiver_id', $association_id)->findAll();
		$data['sent'] = $message->where('fsender_id', $association_id)->findAll();

		$data['inbox_count'] = count($data['inbox']);
		$data['sent_count'] = count($data['sent']);

		//$job_invite_message = new JobInviteMessageModel();
		// $data['job_invite_messages'] = $job_invite_message->where('fapplicant_id',$applicant_id)->where('fjob_id', $job_id)->findAll();

		//var_dump($data);

		 return view('association/inbox', $data);

	}


	public function createmessageaction()
	{


		$applicant_id = session()->association_id;


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
			return redirect()->to(base_url('association/messages/inbox'));
		}
		else
		{
			session()->setFlashdata('error', 'Message not sent');
			return redirect()->to(base_url('association/messages/inbox'));
		}
	}


	public function sent()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/alogin'));
		} 

		$association_id = session()->association_id;
		
		$association = new AssociationModel();
		
        $data['association_details'] = $association->where('fassociation_id', $association_id)->first();

        $message = new MessageModel();
		$data['inbox'] = $message->where('freceiver_id', $association_id)->findAll();
		$data['sent'] = $message->where('fsender_id', $association_id)->findAll();

		$data['inbox_count'] = count($data['inbox']);
		$data['sent_count'] = count($data['sent']);

		//$job_invite_message = new JobInviteMessageModel();
		// $data['job_invite_messages'] = $job_invite_message->where('fapplicant_id',$applicant_id)->where('fjob_id', $job_id)->findAll();

		//var_dump($data['sent']);

		 return view('association/sent', $data);

	}


	public function emaildetails($message_id)
	{
		$message = new MessageModel();
		
		$data['message_details'] = $message->where('fmessage_id', $message_id)->first();
		
		//var_dump($data);

		return view('association/email_details', $data);
	}


	public function messagedetails($job_id, $applicant_id)
	{

		if(!session()->id)
        {
            return redirect()->to(base_url('/slogin'));
		} 


		$association_id = session()->association_id;
		
		$association = new AssociationModel();
		
        $data['association_details'] = $association->where('fassociation_id', $association_id)->first();

		$job_invite_message = new JobInviteMessageModel();
		$data['messages'] = $job_invite_message->where('fjob_id', $job_id)->where('fapplicant_id', $association_id)->orderBy('frecno', 'asc')->findAll();
		
		//var_dump($data['messages']);

		$job_model = new JobModel();
		$data['job'] = $job_model->where('fjob_id', $job_id)->first();

		$applicant_id = $this->request->uri->getSegment(5);

		$applicant = new ApplicantModel();
	
		$data['applicant_details'] = $applicant->where('fapplicant_id', $applicant_id)->first();

		$job_final_choice_model = new JobFinalChoiceModel();

		$data['applicant_status'] = $job_final_choice_model->where('fapplicant_id', $applicant_id)->where('fjob_id', $job_id)->first();


		//var_dump($data['applicant_status']);

		
		return view('association/job_invite_message_details', $data);

	}


	public function sendjobdashmessage()
	{

        $data = [

			'fjob_id' => $this->request->getPost('job_id'),
            'fjob_title' => $this->request->getPost('job_title'),
			'fmessage' => $this->request->getPost('message'),
			'fsubject' => $this->request->getPost('subject'),
			'fsender_id' => $this->request->getPost('association_id'),
			'freceiver_id' => $this->request->getPost('applicant_id'),
			'fapplicant_id' => $this->request->getPost('applicant_id'),
			'fapplicant_name' => $this->request->getPost('applicant_name'),
			'femployer_id' => $this->request->getPost('association_id'),
			'femployer_name' => $this->request->getPost('association_name'),
			
            
            ];
            
		//var_dump($data);

		$job_invite_message_model = new JobInviteMessageModel();
		$job_invite_message_model->insert($data);
		$inserted = $job_invite_message_model->affectedRows();
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Message sent successfully');
			return redirect()->to(base_url('association/messagedetails/'.$this->request->getPost('job_id').'/'.$this->request->getPost('applicant_id')));
		}
		else
		{
			session()->setFlashdata('error', 'Message not added');
			return redirect()->to(base_url('association/messagedetails/'.$this->request->getPost('job_id').'/'.$this->request->getPost('applicant_id')));
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
			'femployer_id' => $this->request->getPost('association_id'),
			'femployer_name' => $this->request->getPost('association_name'),
			
            
            ];
            
		//var_dump($data);

		$job_final_choice_model = new JobFinalChoiceModel();
		$job_final_choice_model->insert($data);
		$inserted = $job_final_choice_model->affectedRows();
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Choice sent successfully');
			return redirect()->to(base_url('association/messagedetails/'.$this->request->getPost('job_id').'/'.$this->request->getPost('applicant_id')));
		}
		else
		{
			session()->setFlashdata('error', 'Choice not added');
			return redirect()->to(base_url('association/messagedetails/'.$this->request->getPost('job_id').'/'.$this->request->getPost('applicant_id')));
		}

	}


	public function search()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/alogin'));
		} 

		return view('association/search');
	}


	public function settings()
	{
		if(!session()->id)
        {
            return redirect()->to(base_url('/alogin'));
		}  
		
		return view('association/settings');
	}



    public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/'));
	}

}
	