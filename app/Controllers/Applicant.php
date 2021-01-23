<?php namespace App\Controllers;

use App\Models\ApplicantModel;
use App\Models\EmployerModel;
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
use App\Models\EventModel;
use App\Models\TeamMessageModel;
use App\Models\TeamMemberModel;
use App\Models\RecommendationRequestModel;
use App\Models\RecommendationOfferModel;
use App\Models\MessageModel;
use App\Models\ProfessionModel;
use App\Models\LanguageModel;
use App\Models\PersonalityTraitModel;
use App\Libraries\Zebra_Image;
use \DateTime;

class Applicant extends BaseController
{

	protected $image;

    public function __construct()
    {
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}
		
        //$this->image = new Zebra_Image();
    }


    public function dashboard()
    {
	
		if(!session()->username)
        {
			session()->setFlashdata('error', 'Session expired. Login again');
            return redirect()->to(base_url('/login'));
		}
		
		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
        $data['applicants'] = $applicant->findAll();
		
        $applicant = new ApplicantModel();
        $data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

        $applicant_experience = new ApplicantExperienceModel();
        $data['applicant_experiences'] = $applicant_experience->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();

        $applicant_education = new ApplicantEducationModel();
		$data['applicant_educations'] = $applicant_education->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();


		$applicant_portfolio = new ApplicantPortfolioModel();
		$data['applicant_portfolios'] = $applicant_portfolio->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();


		$applicant_document = new ApplicantDocumentModel();
		$data['applicant_documents'] = $applicant_document->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();
		

		$applicant_weblink = new ApplicantWebLinkModel();
		$data['applicant_weblinks'] = $applicant_weblink->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();
		
		$profession = new ProfessionModel();
		$data['professions'] = $profession->findAll();

		$language = new LanguageModel();
		$data['languages'] = $language->orderBy('fname', 'asc')->findAll();
		
		return view('applicant/dashboard', $data);
		
	}


	public function educations()
    {
        if(!session()->username)
        {
			session()->setFlashdata('error', 'Session expired. Login again');
            return redirect()->to(base_url('/login'));
		} 
		
		if(!session()->applicant_id)
        {
			session()->setFlashdata('error', 'Session expired. Login again');
            return redirect()->to(base_url('/login'));
        } 

		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
        $data['applicants'] = $applicant->findAll();
		
        $applicant = new ApplicantModel();
        $data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

        $applicant_experience = new ApplicantExperienceModel();
        $data['applicant_experiences'] = $applicant_experience->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();

        $applicant_education = new ApplicantEducationModel();
		$data['applicant_educations'] = $applicant_education->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();


		$applicant_portfolio = new ApplicantPortfolioModel();
		$data['applicant_portfolios'] = $applicant_portfolio->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();


		$applicant_document = new ApplicantDocumentModel();
		$data['applicant_documents'] = $applicant_document->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();
		

		$applicant_weblink = new ApplicantWebLinkModel();
		$data['applicant_weblinks'] = $applicant_weblink->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();
		
		$profession = new ProfessionModel();
		$data['professions'] = $profession->findAll();

		$language = new LanguageModel();
		$data['languages'] = $language->findAll();
		
        return view('applicant/educations', $data);
	}



	public function portfolios()
    {
        if(!session()->username)
        {
			session()->setFlashdata('error', 'Session expired. Login again');
            return redirect()->to(base_url('/login'));
		} 
		
		if(!session()->applicant_id)
        {
            return redirect()->to(base_url('/login'));
        } 

		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
        $data['applicants'] = $applicant->findAll();
		
        $applicant = new ApplicantModel();
        $data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

        $applicant_experience = new ApplicantExperienceModel();
        $data['applicant_experiences'] = $applicant_experience->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();

        $applicant_education = new ApplicantEducationModel();
		$data['applicant_educations'] = $applicant_education->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();


		$applicant_portfolio = new ApplicantPortfolioModel();
		$data['applicant_portfolios'] = $applicant_portfolio->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();


		$applicant_document = new ApplicantDocumentModel();
		$data['applicant_documents'] = $applicant_document->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();
		

		$applicant_weblink = new ApplicantWebLinkModel();
		$data['applicant_weblinks'] = $applicant_weblink->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();
		
		$profession = new ProfessionModel();
		$data['professions'] = $profession->findAll();

		$language = new LanguageModel();
		$data['languages'] = $language->findAll();
		
        return view('applicant/portfolios', $data);
	}
	


	public function experiences_container()
	{
		$username = session()->username;
		$applicant_id = session()->applicant_id;

		$applicant_experience = new ApplicantExperienceModel();
		$applicant_experiences = $applicant_experience->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();

		$applicant = new ApplicantModel();
		$applicant_details = $applicant->where('fapplicant_id', $applicant_id)->first();


		$output = "";
		$total_item = 0;
		$url = site_url();

		if(empty($applicant_experiences))
		{
			$output .= '
				
			<div class="exp-cont" style="border: 4px solid #ADD8E6;">
	
				<p>Seems you have no job experiences yet. Add a new record to get started.</p>

			</div> 

		<br>
						
					';
		}
		else
		{
			
		
			foreach($applicant_experiences as $experience)
			{
				$roles_array = explode(",", $experience['frole']);

				// foreach($roles_array as $role)
				// {
				// 	$role_list = $role;
				// }

					
				// $date1  = strtotime($experience['fstart']);
				// $day1   = date('d',$date1);
				// $month1 = date('m',$date1);
				// $year1  = date('Y',$date1);


				// $date1 = new DateTime($experience['fstart']);
				// $year1 = $date1->format('Y');
				// $month1 = $date1->format('m');

				$start_date = $experience['fstart'];

				// split "25-09-2012" into an array of three elements
				$thedate = explode("-", $start_date);

				// retrieve the values
				$year1 = $thedate[0]; // 25
				$month1 = $thedate[1]; // 09
				$day1 = $thedate[2]; // 2012


				if($month1 == "01"){ $monthselected1a = "selected";} 
				if($month1 == "02"){ $monthselected1b = "selected";} 
				if($month1 == "03"){ $monthselected1c = "selected";} 
				if($month1 == "04"){ $monthselected1d = "selected";}
				if($month1 == "05"){ $monthselected1e = "selected";} 
				if($month1 == "06"){ $monthselected1f = "selected";} 
				if($month1 == "07"){ $monthselected1g = "selected";}
				if($month1 == "08"){ $monthselected1h = "selected";}
				if($month1 == "09"){ $monthselected1i = "selected";} 
				if($month1 == "10"){ $monthselected1j = "selected";} 
				if($month1 == "11"){ $monthselected1k = "selected";} 
				if($month1 == "12"){ $monthselected1l = "selected";} 

				if($year1 == "1930"){ $yearselected1 = "selected";}
				if($year1 == "1931"){ $yearselected1 = "selected";}
				if($year1 == "1932"){ $yearselected1 = "selected";} 
				if($year1 == "1933"){ $yearselected1 = "selected";}
				if($year1 == "1933"){ $yearselected1 = "selected";} 
				if($year1 == "1934"){ $yearselected1 = "selected";}
				if($year1 == "1935"){ $yearselected1 = "selected";}
				if($year1 == "1936"){ $yearselected1 = "selected";}
				if($year1 == "1937"){ $yearselected1 = "selected";} 
				if($year1 == "1938"){ $yearselected1 = "selected";}
				if($year1 == "1939"){ $yearselected1 = "selected";} 
				if($year1 == "1940"){ $yearselected1 = "selected";} 
				if($year1 == "1941"){ $yearselected1 = "selected";}
				if($year1 == "1942"){ $yearselected1 = "selected";}
				if($year1 == "1943"){ $yearselected1 = "selected";} 
				if($year1 == "1944"){ $yearselected1 = "selected";}
				if($year1 == "1945"){ $yearselected1 = "selected";} 
				if($year1 == "1946"){ $yearselected1 = "selected";}
				if($year1 == "1947"){ $yearselected1 = "selected";}
				if($year1 == "1948"){ $yearselected1 = "selected";}
				if($year1 == "1949"){ $yearselected1 = "selected";} 
				if($year1 == "1950"){ $yearselected1 = "selected";}
				if($year1 == "1951"){ $yearselected1 = "selected";} 
				if($year1 == "1952"){ $yearselected1 = "selected";}
				if($year1 == "1953"){ $yearselected1 = "selected";}
				if($year1 == "1954"){ $yearselected1 = "selected";}
				if($year1 == "1955"){ $yearselected1 = "selected";} 
				if($year1 == "1956"){ $yearselected1 = "selected";}
				if($year1 == "1957"){ $yearselected1 = "selected";} 
				if($year1 == "1958"){ $yearselected1 = "selected";} 
				if($year1 == "1959"){ $yearselected1 = "selected";}
				if($year1 == "1960"){ $yearselected1 = "selected";}
				if($year1 == "1961"){ $yearselected1 = "selected";} 
				if($year1 == "1962"){ $yearselected1 = "selected";}
				if($year1 == "1963"){ $yearselected1 = "selected";} 
				if($year1 == "1964"){ $yearselected1 = "selected";}
				if($year1 == "1965"){ $yearselected1 = "selected";}
				if($year1 == "1966"){ $yearselected1 = "selected";}
				if($year1 == "1967"){ $yearselected1 = "selected";} 
				if($year1 == "1968"){ $yearselected1 = "selected";}
				if($year1 == "1969"){ $yearselected1 = "selected";} 
				if($year1 == "1970"){ $yearselected1 = "selected";}
				if($year1 == "1971"){ $yearselected1 = "selected";}
				if($year1 == "1972"){ $yearselected1 = "selected";}
				if($year1 == "1973"){ $yearselected1 = "selected";} 
				if($year1 == "1974"){ $yearselected1 = "selected";}
				if($year1 == "1975"){ $yearselected1 = "selected";} 
				if($year1 == "1976"){ $yearselected1 = "selected";} 
				if($year1 == "1977"){ $yearselected1 = "selected";}
				if($year1 == "1978"){ $yearselected1 = "selected";}
				if($year1 == "1979"){ $yearselected1 = "selected";} 
				if($year1 == "1980"){ $yearselected1 = "selected";}
				if($year1 == "1981"){ $yearselected1 = "selected";} 
				if($year1 == "1982"){ $yearselected1 = "selected";}
				if($year1 == "1983"){ $yearselected1 = "selected";}
				if($year1 == "1984"){ $yearselected1 = "selected";}
				if($year1 == "1985"){ $yearselected1 = "selected";} 
				if($year1 == "1986"){ $yearselected1 = "selected";}
				if($year1 == "1987"){ $yearselected1 = "selected";} 
				if($year1 == "1988"){ $yearselected1 = "selected";}
				if($year1 == "1989"){ $yearselected1 = "selected";}
				if($year1 == "1990"){ $yearselected1 = "selected";}
				if($year1 == "1991"){ $yearselected1 = "selected";} 
				if($year1 == "1992"){ $yearselected1 = "selected";}
				if($year1 == "1993"){ $yearselected1 = "selected";} 
				if($year1 == "1994"){ $yearselected1 = "selected";} 
				if($year1 == "1995"){ $yearselected1 = "selected";}
				if($year1 == "1996"){ $yearselected1 = "selected";}
				if($year1 == "1997"){ $yearselected1 = "selected";} 
				if($year1 == "1998"){ $yearselected1 = "selected";}
				if($year1 == "1999"){ $yearselected1 = "selected";} 
				if($year1 == "2000"){ $yearselected1 = "selected";} 
				if($year1 == "2001"){ $yearselected1 = "selected";}
				if($year1 == "2002"){ $yearselected1 = "selected";}
				if($year1 == "2003"){ $yearselected1 = "selected";} 
				if($year1 == "2004"){ $yearselected1 = "selected";}
				if($year1 == "2005"){ $yearselected1 = "selected";} 
				if($year1 == "2006"){ $yearselected1 = "selected";}
				if($year1 == "2007"){ $yearselected1 = "selected";}
				if($year1 == "2008"){ $yearselected1 = "selected";}
				if($year1 == "2009"){ $yearselected1 = "selected";} 
				if($year1 == "2010"){ $yearselected1 = "selected";}
				if($year1 == "2011"){ $yearselected1 = "selected";} 
				if($year1 == "2012"){ $yearselected1 = "selected";} 
				if($year1 == "2013"){ $yearselected1 = "selected";}
				if($year1 == "2014"){ $yearselected1 = "selected";}
				if($year1 == "2015"){ $yearselected1 = "selected";} 
				if($year1 == "2016"){ $yearselected1 = "selected";}
				if($year1 == "2017"){ $yearselected1 = "selected";} 
				if($year1 == "2018"){ $yearselected1 = "selected";}
				if($year1 == "2019"){ $yearselected1 = "selected";}
				if($year1 == "2020"){ $yearselected1 = "selected";}
				if($year1 == "2021"){ $yearselected1 = "selected";} 
				if($year1 == "2022"){ $yearselected1 = "selected";}
				if($year1 == "2023"){ $yearselected1 = "selected";} 
				if($year1 == "2024"){ $yearselected1 = "selected";}
				if($year1 == "2025"){ $yearselected1 = "selected";}
				if($year1 == "2026"){ $yearselected1 = "selected";}
				if($year1 == "2027"){ $yearselected1 = "selected";} 
				if($year1 == "2028"){ $yearselected1 = "selected";}
				if($year1 == "2029"){ $yearselected1 = "selected";} 
				if($year1 == "2030"){ $yearselected1 = "selected";} 
				if($year1 == "2031"){ $yearselected1 = "selected";}
				if($year1 == "2032"){ $yearselected1 = "selected";}
				if($year1 == "2033"){ $yearselected1 = "selected";} 
				if($year1 == "2034"){ $yearselected1 = "selected";}
				if($year1 == "2035"){ $yearselected1 = "selected";} 
				if($year1 == "2036"){ $yearselected1 = "selected";}
				if($year1 == "2037"){ $yearselected1 = "selected";}
				if($year1 == "2038"){ $yearselected1 = "selected";}
				if($year1 == "2039"){ $yearselected1 = "selected";} 
				if($year1 == "2040"){ $yearselected1 = "selected";}
				if($year1 == "2041"){ $yearselected1 = "selected";} 
				if($year1 == "2042"){ $yearselected1 = "selected";}
				if($year1 == "2043"){ $yearselected1 = "selected";}
				if($year1 == "2044"){ $yearselected1 = "selected";}
				if($year1 == "2045"){ $yearselected1 = "selected";} 
				if($year1 == "2046"){ $yearselected1 = "selected";}
				if($year1 == "2047"){ $yearselected1 = "selected";} 
				if($year1 == "2048"){ $yearselected1 = "selected";} 
				if($year1 == "2049"){ $yearselected1 = "selected";}
				if($year1 == "2050"){ $yearselected1 = "selected";}


				
				$date2  = strtotime($experience['fend']);
				$day2   = date('d',$date2);
				$month2 = date('m',$date2);
				$year2  = date('Y',$date2);

				if($month2 == "01"){ $monthselected2 = "selected";} 
				if($month2 == "02"){ $monthselected2 = "selected";} 
				if($month2 == "03"){ $monthselected2 = "selected";} 
				if($month2 == "04"){ $monthselected2 = "selected";}
				if($month2 == "05"){ $monthselected2 = "selected";} 
				if($month2 == "06"){ $monthselected2 = "selected";} 
				if($month2 == "07"){ $monthselected2 = "selected";}
				if($month2 == "08"){ $monthselected2 = "selected";}
				if($month2 == "09"){ $monthselected2 = "selected";} 
				if($month2 == "10"){ $monthselected2 = "selected";} 
				if($month2 == "11"){ $monthselected2 = "selected";} 
				if($month2 == "12"){ $monthselected2 = "selected";} 


				if($year2 == "1930"){ $yearselected2 = "selected";}
				if($year2 == "1931"){ $yearselected2 = "selected";}
				if($year2 == "1932"){ $yearselected2 = "selected";} 
				if($year2 == "1933"){ $yearselected2 = "selected";}
				if($year2 == "1933"){ $yearselected2 = "selected";} 
				if($year2 == "1934"){ $yearselected2 = "selected";}
				if($year2 == "1935"){ $yearselected2 = "selected";}
				if($year2 == "1936"){ $yearselected2 = "selected";}
				if($year2 == "1937"){ $yearselected2 = "selected";} 
				if($year2 == "1938"){ $yearselected2 = "selected";}
				if($year2 == "1939"){ $yearselected2 = "selected";} 
				if($year2 == "1940"){ $yearselected2 = "selected";} 
				if($year2 == "1941"){ $yearselected2 = "selected";}
				if($year2 == "1942"){ $yearselected2 = "selected";}
				if($year2 == "1943"){ $yearselected2 = "selected";} 
				if($year2 == "1944"){ $yearselected2 = "selected";}
				if($year2 == "1945"){ $yearselected2 = "selected";} 
				if($year2 == "1946"){ $yearselected2 = "selected";}
				if($year2 == "1947"){ $yearselected2 = "selected";}
				if($year2 == "1948"){ $yearselected2 = "selected";}
				if($year2 == "1949"){ $yearselected2 = "selected";} 
				if($year2 == "1950"){ $yearselected2 = "selected";}
				if($year2 == "1951"){ $yearselected2 = "selected";} 
				if($year2 == "1952"){ $yearselected2 = "selected";}
				if($year2 == "1953"){ $yearselected2 = "selected";}
				if($year2 == "1954"){ $yearselected2 = "selected";}
				if($year2 == "1955"){ $yearselected2 = "selected";} 
				if($year2 == "1956"){ $yearselected2 = "selected";}
				if($year2 == "1957"){ $yearselected2 = "selected";} 
				if($year2 == "1958"){ $yearselected2 = "selected";} 
				if($year2 == "1959"){ $yearselected2 = "selected";}
				if($year2 == "1960"){ $yearselected2 = "selected";}
				if($year2 == "1961"){ $yearselected2 = "selected";} 
				if($year2 == "1962"){ $yearselected2 = "selected";}
				if($year2 == "1963"){ $yearselected2 = "selected";} 
				if($year2 == "1964"){ $yearselected2 = "selected";}
				if($year2 == "1965"){ $yearselected2 = "selected";}
				if($year2 == "1966"){ $yearselected2 = "selected";}
				if($year2 == "1967"){ $yearselected2 = "selected";} 
				if($year2 == "1968"){ $yearselected2 = "selected";}
				if($year2 == "1969"){ $yearselected2 = "selected";} 
				if($year2 == "1970"){ $yearselected2 = "selected";}
				if($year2 == "1971"){ $yearselected2 = "selected";}
				if($year2 == "1972"){ $yearselected2 = "selected";}
				if($year2 == "1973"){ $yearselected2 = "selected";} 
				if($year2 == "1974"){ $yearselected2 = "selected";}
				if($year2 == "1975"){ $yearselected2 = "selected";} 
				if($year2 == "1976"){ $yearselected2 = "selected";} 
				if($year2 == "1977"){ $yearselected2 = "selected";}
				if($year2 == "1978"){ $yearselected2 = "selected";}
				if($year2 == "1979"){ $yearselected2 = "selected";} 
				if($year2 == "1980"){ $yearselected2 = "selected";}
				if($year2 == "1981"){ $yearselected2 = "selected";} 
				if($year2 == "1982"){ $yearselected2 = "selected";}
				if($year2 == "1983"){ $yearselected2 = "selected";}
				if($year2 == "1984"){ $yearselected2 = "selected";}
				if($year2 == "1985"){ $yearselected2 = "selected";} 
				if($year2 == "1986"){ $yearselected2 = "selected";}
				if($year2 == "1987"){ $yearselected2 = "selected";} 
				if($year2 == "1988"){ $yearselected2 = "selected";}
				if($year2 == "1989"){ $yearselected2 = "selected";}
				if($year2 == "1990"){ $yearselected2 = "selected";}
				if($year2 == "1991"){ $yearselected2 = "selected";} 
				if($year2 == "1992"){ $yearselected2 = "selected";}
				if($year2 == "1993"){ $yearselected2 = "selected";} 
				if($year2 == "1994"){ $yearselected2 = "selected";} 
				if($year2 == "1995"){ $yearselected2 = "selected";}
				if($year2 == "1996"){ $yearselected2 = "selected";}
				if($year2 == "1997"){ $yearselected2 = "selected";} 
				if($year2 == "1998"){ $yearselected2 = "selected";}
				if($year2 == "1999"){ $yearselected2 = "selected";} 
				if($year2 == "2000"){ $yearselected2 = "selected";} 
				if($year2 == "2001"){ $yearselected2 = "selected";}
				if($year2 == "2002"){ $yearselected2 = "selected";}
				if($year2 == "2003"){ $yearselected2 = "selected";} 
				if($year2 == "2004"){ $yearselected2 = "selected";}
				if($year2 == "2005"){ $yearselected2 = "selected";} 
				if($year2 == "2006"){ $yearselected2 = "selected";}
				if($year2 == "2007"){ $yearselected2 = "selected";}
				if($year2 == "2008"){ $yearselected2 = "selected";}
				if($year2 == "2009"){ $yearselected2 = "selected";} 
				if($year2 == "2010"){ $yearselected2 = "selected";}
				if($year2 == "2011"){ $yearselected2 = "selected";} 
				if($year2 == "2012"){ $yearselected2 = "selected";} 
				if($year2 == "2013"){ $yearselected2 = "selected";}
				if($year2 == "2014"){ $yearselected2 = "selected";}
				if($year2 == "2015"){ $yearselected2 = "selected";} 
				if($year2 == "2016"){ $yearselected2 = "selected";}
				if($year2 == "2017"){ $yearselected2 = "selected";} 
				if($year2 == "2018"){ $yearselected2 = "selected";}
				if($year2 == "2019"){ $yearselected2 = "selected";}
				if($year2 == "2020"){ $yearselected2 = "selected";}
				if($year2 == "2021"){ $yearselected2 = "selected";} 
				if($year2 == "2022"){ $yearselected2 = "selected";}
				if($year2 == "2023"){ $yearselected2 = "selected";} 
				if($year2 == "2024"){ $yearselected2 = "selected";}
				if($year2 == "2025"){ $yearselected2 = "selected";}
				if($year2 == "2026"){ $yearselected2 = "selected";}
				if($year2 == "2027"){ $yearselected2 = "selected";} 
				if($year2 == "2028"){ $yearselected2 = "selected";}
				if($year2 == "2029"){ $yearselected2 = "selected";} 
				if($year2 == "2030"){ $yearselected2 = "selected";} 
				if($year2 == "2031"){ $yearselected2 = "selected";}
				if($year2 == "2032"){ $yearselected2 = "selected";}
				if($year2 == "2033"){ $yearselected2 = "selected";} 
				if($year2 == "2034"){ $yearselected2 = "selected";}
				if($year2 == "2035"){ $yearselected2 = "selected";} 
				if($year2 == "2036"){ $yearselected2 = "selected";}
				if($year2 == "2037"){ $yearselected2 = "selected";}
				if($year2 == "2038"){ $yearselected2 = "selected";}
				if($year2 == "2039"){ $yearselected2 = "selected";} 
				if($year2 == "2040"){ $yearselected2 = "selected";}
				if($year2 == "2041"){ $yearselected2 = "selected";} 
				if($year2 == "2042"){ $yearselected2 = "selected";}
				if($year2 == "2043"){ $yearselected2 = "selected";}
				if($year2 == "2044"){ $yearselected2 = "selected";}
				if($year2 == "2045"){ $yearselected2 = "selected";} 
				if($year2 == "2046"){ $yearselected2 = "selected";}
				if($year2 == "2047"){ $yearselected2 = "selected";} 
				if($year2 == "2048"){ $yearselected2 = "selected";} 
				if($year2 == "2049"){ $yearselected2 = "selected";}
				if($year2 == "2050"){ $yearselected2 = "selected";} 

				

				$output .= '
				
				<div class="exp-cont" style="border: 4px solid #ADD8E6;">
            
					<span class="exp-date">'.date('F Y', strtotime($experience['fstart'])).'</span><span> - </span><span class="exp-date">'.date('F Y', strtotime($experience['fend'])).'</span><br><br>
					
					<span class="company">'.$experience['fcompany_name'].'</span><br><br>
					
					<span class="exp-position">'.ucwords(strtolower($experience['fposition'])).'</span>&nbsp;
					<button class="certificate-button">View Employment Letter</button>



						<ul class="roles-and-respon">';


							foreach($roles_array as $role)
							{

								$output .= '<li>'.$role.'</li>';

							}

		
					$output .=	'</ul>
							
					<br>        
						
					<div>
						<i class="fa fa-edit w3-text-blue cursor" id="'.$experience['frecno'].'" onclick="EditExperienceForm(this.id)"></i>
						
						<i class="exp-delete fa fa-trash w3-text-red cursor delbtn" data-exp_id="'.$experience['frecno'].'"></i>
						
					</div>


				<div id="exp-edit-form-div_'.$experience['frecno'].'" class="" style="display:none";>
					<hr>
					<div class="exp-update-form-container">
						
					<form class="exp-update-form" id="update-experience-form">
						<input type="hidden" name="applicant_id" value="'.$applicant_details['fapplicant_id'].'">
						<input type="hidden" name="user_name" value="'.$applicant_details['fuser_name'].'">

						<div class="col-sm-6">
							<label class="exp-duration-label">From</label>
						</div>
						
						<div style="display: flex">

							<select class="exp-duration" style="margin-right:5px;border-radius:5px; width:100%;" name="start_month" required>
								<option value="">Month</option>
								<option value="01" '.$monthselected1a.'>January</option>
								<option value="02" '.$monthselected1b.'>February</option>
								<option value="03" '.$monthselected1c.'>March</option>
								<option value="04" '.$monthselected1d.'>April</option>
								<option value="05" '.$monthselected1e.'>May</option>
								<option value="06" '.$monthselected1f.'>June</option>
								<option value="07" '.$monthselected1g.'>July</option>
								<option value="08" '.$monthselected1h.'>August</option>
								<option value="09" '.$monthselected1i.'>September</option>
								<option value="10" '.$monthselected1j.'>October</option>
								<option value="11" '.$monthselected1k.'>November</option>
								<option value="12" '.$monthselected1l.'>December</option>
	
							</select>
						
							<select id="year1" class="exp-duration" style="border-radius:5px; width:100%;" name="start_year" required>
								<option value="">Year</option>
								<option value="1930" '.$yearselected1.'>1930</option>
								<option value="1931" '.$yearselected1.'>1931</option>
								<option value="1932" '.$yearselected1.'>1932</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
								<option value="2010" '.$yearselected1.'>2010</option>
								<option value="2011" '.$yearselected1.'>2011</option>
								<option value="2012" '.$yearselected1.'>2012</option>
								<option value="2013" '.$yearselected1.'>2013</option>
								<option value="2014" '.$yearselected1.'>2014</option>
								<option value="2015" '.$yearselected1.'>2015</option>
							</select>

						</div>
						<br>
						<div class="col-sm-6">
							<label class="exp-duration-label">Till</label>
						</div>

						<div style="display: flex">
	
							<select class="exp-duration"  style="margin-right:5px;border-radius:5px; width:100%;" name="end_month" required>
									<option value="">Month</option>
									<option value="01" '.$monthselected2.'>January</option>
									<option value="02" '.$monthselected2.'>February</option>
									<option value="03" '.$monthselected2.'>March</option>
									<option value="04" '.$monthselected2.'>April</option>
									<option value="05" '.$monthselected2.'>May</option>
									<option value="06" '.$monthselected2.'>June</option>
									<option value="07" '.$monthselected2.'>July</option>
									<option value="08" '.$monthselected2.'>August</option>
									<option value="09" '.$monthselected2.'>September</option>
									<option value="10" '.$monthselected2.'>October</option>
									<option value="11" '.$monthselected2.'>November</option>
									<option value="12" '.$monthselected2.'>December</option>
							</select>
						
							<select id="year2" class="exp-duration" style="border-radius:5px; width:100%;"name="end_year">
								<option value="">Year</option>
								<option value="2010" '.$yearselected2.'>2010</option>
								<option value="2011" '.$yearselected2.'>2011</option>
								<option value="2012" '.$yearselected2.'>2012</option>
								<option value="2013" '.$yearselected2.'>2013</option>
								<option value="2014"'.$yearselected2.'>2014</option>
								<option value="2015" '.$yearselected2.'>2015</option>
						</select>
	
						</div>
							
						
							<br>
							<label class="company-label">Company&nbsp;or&nbsp;Business</label><br>
							<input id="company-or-business" class="company-or-business"  type="text" name="ex-company-name"  value="'.$experience['fcompany_name'].'" required>
							<input type="hidden" name="frecno" value="'.$experience['frecno'].'">
							<input type="hidden" name="applicant_id" value="'.$applicant_details['fapplicant_id'].'">
							<input type="hidden" name="user_name" value="'.$applicant_details['fuser_name'].'">
							<br><br>
							
							<label class="position-label">
							Position</label><br>
							<input class="position"  type="text" name="exposition" id="positon" value="'.$experience['fposition'].'" required>
							<br>
							<button class="letter-button">Add Employment Letter</button>
						
						<br><br>
					
							
							<label class="roles-and-respon-label">Roles&nbsp;and&nbsp;Responsibilities</label>
						
						<br>';


							foreach($roles_array as $role)
							{

								$output .= '<input class="position"  type="text" name="ex-roles[]" id="positon" value="'.$role.'" required><br><br>';

							}



						
						
						$output .= '
						
						<div id="input-area2" class="row pt-2">
                  
						</div> 
						
						<br>
							 <div id="add-btn2" class="add-tag-button-div">   
								 <button type="button" class="add-tag-button" style="border: 1px solid #90EE90; color:#90EE90;background:#fff;border-radius:5px;">+ Add More</button>
							 </div> 
						
						<br>
						
						
						<br>
							
						<div class="exp-button-container">
							
								<div class="exp-button-right">
									
						<button onclick="CancelExperience()" class="exp-cancel-button" action="">Cancel</button>
									
						<button class="exp-finish-button w3-right cursor" type="submit">Update</button>
									
									</div>
							
							</div>
						
						</form> 
						
						</div> 
							
					</div> 

		
				</div> 

				<br>

				';
			}

			

		}

		$data = array(
			'experiences' =>	$output,
		);	

		return $this->response->setJSON($data);
	}



    public function addexperienceaction()
    {
      
		if (! $this->validate([
			'start_month' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Start Month is required!',
				]
			],
			'start_year' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Start Year is required!',
							]
						],
			'end_month' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'End Month is required!',
				]
			],
			'end_year' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'End Year is required!',
							]
						],
        	'exposition' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Position is required!',
						
				]
            ],
            'ex-company-name' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Company is required!',
						
				]
			],
		]))
		{
			
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Job experience not added"
			];	
		}


		$start_day = 01;
		$end_day = 01;
		$start_month = $this->request->getPost('start_month');
		$start_year = $this->request->getPost('start_year');
		$end_month = $this->request->getPost('end_month');
		$end_year = $this->request->getPost('end_year');

		$start_duration = $start_year . '-' . $start_month . '-' . $start_day;
		$end_duration = $end_year . '-' . $end_month . '-' . $end_day;
	 	$start_DT = date('Y-m-d', strtotime("$start_duration"));
		$end_DT = date('Y-m-d', strtotime("$end_duration"));

		$roles = array_filter($this->request->getPost('ex-roles'));
		$extracted_roles = implode(",", $roles);
		
        $data = [
            'fstart' => $start_DT,
            'fend' => $end_DT,
            'fposition' => $this->request->getPost('exposition'),
            'fcompany_name' => $this->request->getPost('ex-company-name'),
            'frole' => $extracted_roles,
            'fapplicant_id' => $this->request->getPost('applicant_id'),
            'fuser_name' => $this->request->getPost('user_name'),
            ];
            
		
		//var_dump($data);
	

        $experience = new ApplicantExperienceModel();
	    $experience->insert($data);
	    $inserted = $experience->affectedRows();
		if($inserted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Job experience added successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Job experience not added"
			];	
		}

		return $this->response->setJSON($response);
			
		
    }

    public function updateexperienceaction()
    {
        //var_dump($this->request->getPost());
        
		if (! $this->validate([
			'start_month' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Start Month is required!',
				]
			],
			'start_year' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Start Year is required!',
							]
						],
			'end_month' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'End Month is required!',
				]
			],
			'end_year' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'End Year is required!',
							]
						],
        	'exposition' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Position is required!',
						
				]
            ],
            'ex-company-name' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Company is required!',
						
				]
			],
		]))
		{
			
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Job experience not added"
			];	
		}


        $id = $this->request->getPost('frecno');

        $start_day = 01;
		$end_day = 01;
		$start_month = $this->request->getPost('start_month');
		$start_year = $this->request->getPost('start_year');
		$end_month = $this->request->getPost('end_month');
		$end_year = $this->request->getPost('end_year');

		$start_duration = $start_year . '-' . $start_month . '-' . $start_day;
		$end_duration = $end_year . '-' . $end_month . '-' . $end_day;
	 	$start_DT = date('Y-m-d', strtotime("$start_duration"));
		$end_DT = date('Y-m-d', strtotime("$end_duration"));

		$roles = array_filter($this->request->getPost('ex-roles'));
		$extracted_roles = implode(",", $roles);
		
        $data = [
            'fstart' => $start_DT,
            'fend' => $end_DT,
            'fposition' => $this->request->getPost('exposition'),
            'fcompany_name' => $this->request->getPost('ex-company-name'),
            'frole' => $extracted_roles,
            'fapplicant_id' => $this->request->getPost('applicant_id'),
            'fuser_name' => $this->request->getPost('user_name'),
            ];
            
		
		//var_dump($data);
	

        $experience = new ApplicantExperienceModel();
        $updated = $experience->update($id, $data);
		if($updated > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Job experience added successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Job experience added successfully"
			];
		}

		return $this->response->setJSON($response);

    }

    public function deletejobexperienceaction()
    {
		$id = $this->request->getPost('exp_id');
        $experience = new ApplicantExperienceModel();
        $experience->where('frecno', $id)->delete();
        $deleted = $experience->affectedRows();
		if($deleted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Job experience added successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Job experience added successfully"
			];
		}

		return $this->response->setJSON($response);
	}
	


	
	public function educations_container()
	{
		$username = session()->username;
		$applicant_id = session()->applicant_id;

		$applicant_education = new ApplicantEducationModel();
		$applicant_educations = $applicant_education->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();

		$applicant = new ApplicantModel();
		$applicant_details = $applicant->where('fapplicant_id', $applicant_id)->first();


		$output = "";
		$total_item = 0;
		$url = site_url();

		if(empty($applicant_educations))
		{
			$output .= '
				
			<div class="exp-cont" style="border: 4px solid #ADD8E6;">
	
			<p>Seems you have no education history yet. Add a new record to get started.</p>

		</div> 

			<br>
					';
		}
		else
		{
			
		
			foreach($applicant_educations as $education)
			{
				
				$skills_array = explode(",", $education['fskills_learned']); 


				$dateEdu1  = strtotime($education['fstart']);
				$dayEdu1   = date('d',$dateEdu1);
				$monthEdu1 = date('m',$dateEdu1);
				$yearEdu1  = date('Y',$dateEdu1);
					


				if($monthEdu1 == "01"){ $monthselected1 = "selected";} 
				if($monthEdu1 == "02"){ $monthselected1 = "selected";} 
				if($monthEdu1 == "03"){ $monthselected1 = "selected";} 
				if($monthEdu1 == "04"){ $monthselected1 = "selected";}
				if($monthEdu1 == "05"){ $monthselected1 = "selected";} 
				if($monthEdu1 == "06"){ $monthselected1 = "selected";} 
				if($monthEdu1 == "07"){ $monthselected1 = "selected";}
				if($monthEdu1 == "08"){ $monthselected1 = "selected";}
				if($monthEdu1 == "09"){ $monthselected1 = "selected";} 
				if($monthEdu1 == "10"){ $monthselected1 = "selected";} 
				if($monthEdu1 == "11"){ $monthselected1 = "selected";} 
				if($monthEdu1 == "12"){ $monthselected1 = "selected";} 

				if($yearEdu1 == "2010"){ $yearselected1 = "selected";}
				if($yearEdu1 == "2011"){ $yearselected1 = "selected";}
				if($yearEdu1 == "2012"){ $yearselected1 = "selected";} 
				if($yearEdu1 == "2013"){ $yearselected1 = "selected";}
				if($yearEdu1 == "2014"){ $yearselected1 = "selected";} 
				if($yearEdu1 == "2015"){ $yearselected1 = "selected";} 


				
				$dateEdu2  = strtotime($education['fstart']);
				$dayEdu2   = date('d',$dateEdu2);
				$monthEdu2 = date('m',$dateEdu2);
				$yearEdu2  = date('Y',$dateEdu2);

				if($monthEdu2 == "01"){ $monthselected2 = "selected";} 
				if($monthEdu2 == "02"){ $monthselected2 = "selected";} 
				if($monthEdu2 == "03"){ $monthselected2 = "selected";} 
				if($monthEdu2 == "04"){ $monthselected2 = "selected";}
				if($monthEdu2 == "05"){ $monthselected2 = "selected";} 
				if($monthEdu2 == "06"){ $monthselected2 = "selected";} 
				if($monthEdu2 == "07"){ $monthselected2 = "selected";}
				if($monthEdu2 == "08"){ $monthselected2 = "selected";}
				if($monthEdu2 == "09"){ $monthselected2 = "selected";} 
				if($monthEdu2 == "10"){ $monthselected2 = "selected";} 
				if($monthEdu2 == "11"){ $monthselected2 = "selected";} 
				if($monthEdu2 == "12"){ $monthselected2 = "selected";} 

				if($yearEdu2 == "2010"){ $yearselected2 = "selected";}
				if($yearEdu2 == "2011"){ $yearselected2 = "selected";}
				if($yearEdu2 == "2012"){ $yearselected2 = "selected";} 
				if($yearEdu2 == "2013"){ $yearselected2 = "selected";}
				if($yearEdu2 == "2014"){ $yearselected2 = "selected";} 
				if($yearEdu2 == "2015"){ $yearselected2 = "selected";} 
				

				$output .= '
				
				<div class="education-post-container">
                
                <div class="edu-cont" style="border: 4px solid #ADD8E6;">
						

						<span class="edu-date">'.date('F Y', strtotime($education['fstart'])).'</span><span> - </span><span class="edu-date">'.date('F Y', strtotime($education['fend'])).'</span><br><br>
						
						<span class="school">'.$education['fschool'].'</span><br><br>
						
						<span class="degree">'.$education['fcourse'].'</span>&nbsp;<br>
						<p class="edu-date">'.$education['fclass_of_degree'].'</span>&nbsp;
						<button class="certificate-button">View Certificate</button>
						<br><br>
						
						

						<ul class="skills-topics">';
							

							foreach($skills_array as $skill)
							{
			
								$output .= '<li>'.$skill.'</li>';
							} 

							
						$output .= '</ul>
								
						<br>        
							
					<div>
						
						<i class="fa fa-edit w3-text-blue cursor" id="'.$education['frecno'].'"  onclick="EditEducationForm(this.id)"></i>
						<i class="edu-delete fa fa-trash w3-text-red cursor" data-edu_id="'.$education['frecno'].'"></i>
						
					</div>




							
					<div id="edu-update-form-div_'.$education['frecno'].'" class="edu-update-form-div">
						<hr>
						<div class="edu-update-form-container">
							
						<form class="edu-update-form" id="update-education-form">
				
							
						<div class="col-sm-6">
						<label class="exp-duration-label">From</label>
					</div>
					
					<div style="display: flex">
					
						<select class="exp-duration" style="margin-right:5px;border-radius:5px; width:100%;" name="start_month" required>
							<option value="">Month</option>
							<option value="01" '.$monthselected1.'>January</option>
							<option value="02" '.$monthselected1.'>February</option>
							<option value="03" '.$monthselected1.'>March</option>
							<option value="04" '.$monthselected1.'>April</option>
							<option value="05" '.$monthselected1.'>May</option>
							<option value="06" '.$monthselected1.'>June</option>
							<option value="07" '.$monthselected1.'>July</option>
							<option value="08" '.$monthselected1.'>August</option>
							<option value="09" '.$monthselected1.'>September</option>
							<option value="10" '.$monthselected1.'>October</option>
							<option value="11" '.$monthselected1.'>November</option>
							<option value="12" '.$monthselected1.'>December</option>

						</select>
					
						<select id="year1" class="exp-duration" style="border-radius:5px; width:100%;" name="start_year" required>
							<option value="">Year</option>
							<option value="2010" '.$yearselected1.'>2010</option>
							<option value="2011" '.$yearselected1.'>2011</option>
							<option value="2012" '.$yearselected1.'>2012</option>
							<option value="2013" '.$yearselected1.'>2013</option>
							<option value="2014" '.$yearselected1.'>2014</option>
							<option value="2015" '.$yearselected1.'>2015</option>
						</select>

					</div>
					<br>
					<div class="col-sm-6">
						<label class="exp-duration-label">Till</label>
					</div>

					<div style="display: flex">

						<select class="exp-duration"  style="margin-right:5px;border-radius:5px; width:100%;" name="end_month" required>
								<option value="">Month</option>
								<option value="01" '.$monthselected2.'>January</option>
								<option value="02" '.$monthselected2.'>February</option>
								<option value="03" '.$monthselected2.'>March</option>
								<option value="04" '.$monthselected2.'>April</option>
								<option value="05" '.$monthselected2.'>May</option>
								<option value="06" '.$monthselected2.'>June</option>
								<option value="07" '.$monthselected2.'>July</option>
								<option value="08" '.$monthselected2.'>August</option>
								<option value="09" '.$monthselected2.'>September</option>
								<option value="10" '.$monthselected2.'>October</option>
								<option value="11" '.$monthselected2.'>November</option>
								<option value="12" '.$monthselected2.'>December</option>
						</select>
					
						<select id="year2" class="exp-duration" style="border-radius:5px; width:100%;"name="end_year">
							<option value="">Year</option>
							<option value="2010" '.$yearselected2.'>2010</option>
							<option value="2011" '.$yearselected2.'>2011</option>
							<option value="2012" '.$yearselected2.'>2012</option>
							<option value="2013" '.$yearselected2.'>2013</option>
							<option value="2014"'.$yearselected2.'>2014</option>
							<option value="2015" '.$yearselected2.'>2015</option>
					</select>

					</div>

							
							
						<br>
						<label class="school-label">School&nbsp;or&nbsp;institution</label><br>
						<input id="edu-position" class="school-or-institution"  type="text" name="school"  value="'.$education['fschool'].'" required>
						<br>
						<input type="hidden" name="frecno" value="'.$education['frecno'].'">
						<input type="hidden" id="applicant_id" name="applicant_id" value="'.$applicant_details['fapplicant_id'].'">
						<input type="hidden" id="user_name" name="user_name" value="'.$applicant_details['fuser_name'].'">
						<br>
						
						<label class="degree-label">
						Course of Study</label><br>
						<input class="degree-certificate"  type="text" name="course" value="'.$education['fcourse'].'" required>
						<br><br>
						<label class="degree-label">
						Degree&nbsp;or&nbsp;Certificate</label><br>
						<input class="degree-certificate"  type="text" name="class_of_degree" id="edu-company-name" value="'.$education['fclass_of_degree'].'" required>
						<br>
						<button class="certificate-button">Add Certificate</button>
					
					<br>
						
								
								<label class="skills-and-topics-label">Skills&nbsp;and&nbsp;Topics&nbsp;Learned</label>
							
							<br>';
							
							

							
							
							foreach($skills_array as $skill)
							{
			
								$output .= '<input class="degree-certificate"  type="text" name="course" value="'.$skill.'" required>';
							} 

	
							$output .= '<br>
								
							<div class="edu-button-container">
								
									<div class="edu-button-right">
										
							<button onclick="CancelEducation()" class="ed-cancel-button">Cancel</button>
										
							<button class="ed-finish-button w3-right" type="submit" >Update</button>
										
										</div>
								
								</div>
							
							</form> 
							
							</div> 
								
						</div> 

							
					</div>     
							
					</div>
					
				';
			}

			

		}

		$data = array(
			'educations' =>	$output,
		);	

		return $this->response->setJSON($data);
	}



    public function addeducationaction()
    {
        //var_dump($this->request->getPost());
        if (! $this->validate([
			'start_month' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Start Month is required!',
				]
			],
			'start_year' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Start Year is required!',
							]
						],
			'end_month' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'End Month is required!',
				]
			],
			'end_year' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'End Year is required!',
							]
						],
        	'school' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'School attended is required!',
						
				]
            ],
            'course' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Course studied is required!',
						
				]
            ],
            'class_of_degree' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Class Of Degree is required!',
						
				]
            ],
            
		]))
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Education Validation failed"
			];	
		}
		

		$start_day = 01;
		$end_day = 01;
		$start_month = $this->request->getPost('start_month');
		$start_year = $this->request->getPost('start_year');
		$end_month = $this->request->getPost('end_month');
		$end_year = $this->request->getPost('end_year');

		$start_duration = $start_year . '-' . $start_month . '-' . $start_day;
		$end_duration = $end_year . '-' . $end_month . '-' . $end_day;
	 	$start_DT = date('Y-m-d', strtotime("$start_duration"));
		$end_DT = date('Y-m-d', strtotime("$end_duration"));

		$skills = array_filter($this->request->getPost('skills'));
		$extracted_skills = implode(",", $skills);
        
        $data = [
            'fstart' => $start_DT,
            'fend' => $end_DT,
            'fschool' => $this->request->getPost('school'),
            'fcourse' => $this->request->getPost('course'),
            'fclass_of_degree' => $this->request->getPost('class_of_degree'),
            'fskills_learned' => $extracted_skills,
            'fapplicant_id' => $this->request->getPost('applicant_id'),
            'fuser_name' => $this->request->getPost('user_name'),
            ];
            
        //var_dump($data);

        $education = new ApplicantEducationModel();
	    $education->insert($data);
	   	$inserted = $education->affectedRows();
		   if($inserted > 0)
		   {
			   $response = [
				   'success' => true,
				   'data' => 'saved',
				   'msg' => "Education added successfully"
			   ];
		   }
		   else
		   {
			   $response = [
				   'success' => false,
				   'data' => 'failed',
				   'msg' => "Education not added"
			   ];	
		   }

		return $this->response->setJSON($response);
   
    }

    public function updateeducationaction()
    {
		if (! $this->validate([
			'start_month' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Start Month is required!',
				]
			],
			'start_year' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Start Year is required!',
							]
						],
			'end_month' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'End Month is required!',
				]
			],
			'end_year' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'End Year is required!',
							]
						],
        	'school' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'School attended is required!',
						
				]
            ],
            'course' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Course studied is required!',
						
				]
            ],
            'class_of_degree' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Class Of Degree is required!',
						
				]
            ],
            
		]))
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Education Validation failed"
			];	
		}
		

		$start_day = 01;
		$end_day = 01;
		$start_month = $this->request->getPost('start_month');
		$start_year = $this->request->getPost('start_year');
		$end_month = $this->request->getPost('end_month');
		$end_year = $this->request->getPost('end_year');

		$start_duration = $start_year . '-' . $start_month . '-' . $start_day;
		$end_duration = $end_year . '-' . $end_month . '-' . $end_day;
	 	$start_DT = date('Y-m-d', strtotime("$start_duration"));
		$end_DT = date('Y-m-d', strtotime("$end_duration"));

		$skills = array_filter($this->request->getPost('skills'));
		$extracted_skills = implode(",", $skills);

        $id = $this->request->getPost('frecno');
        
		$data = [
            'fstart' => $start_DT,
            'fend' => $end_DT,
            'fschool' => $this->request->getPost('school'),
            'fcourse' => $this->request->getPost('course'),
            'fclass_of_degree' => $this->request->getPost('class_of_degree'),
            'fskills_learned' => $extracted_skills,
            'fapplicant_id' => $this->request->getPost('applicant_id'),
            'fuser_name' => $this->request->getPost('user_name'),
            ];
            
        //var_dump($data);
            
       
        $education = new ApplicantEducationModel();
        $updated = $education->update($id, $data);
		if($updated > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Education updated successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Education not updated"
			];
		}

		return $this->response->setJSON($response);
    }

    public function deleteeducationaction()
    {
	   $id = $this->request->getPost('edu_id');
	   
        $experience = new ApplicantEducationModel();
        $experience->where('frecno', $id)->delete();
        $deleted = $experience->affectedRows();
		if($deleted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Education deleted successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Education not deleted"
			];
		}

		return $this->response->setJSON($response);
	}
	

    public function uploadportfolioaction()
    {
        if (! $this->validate([
			'fileid' => [
                'uploaded[fileid]',
                'mime_in[fileid,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[fileid,4096]',
            ],
	
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('applicant/dashboard'));
			
        }
        
        $filh = $this->request->getFile('fileid');
		$ndfgf = $filh->getRandomName();
		$PATH = getcwd();
		$filh->move($PATH .'/public/portfoliopics', $ndfgf);


		$applicant_id = $this->request->getPost('applicant_id');
		$username = $this->request->getPost('user_name');

		 $data = [

			'fimage' => $ndfgf,
			'fapplicant_id' => $this->request->getPost('applicant_id'),
			'fuser_name' => $this->request->getPost('user_name'),
		];
		
		$portfolio = new ApplicantPortfolioModel();
        
		$portfolio->insert($data);
	    $inserted = $portfolio->affectedRows();
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


		return $this->response->setJSON($response);
		

	}
	
	public function deleteportfolioaction()
	{	

		$image_id = $this->request->getPost('image_id');
		$image_name = $this->request->getPost('image_name');
		
		$portfolio = new ApplicantPortfolioModel();
		$portfolio->where('frecno', $image_id)->delete();
		$deleted = $portfolio->affectedRows();
		if($deleted > 0)
		{
			$PATH = getcwd();
			unlink($PATH .'/public/portfoliopics/'.$image_name);
			$response = [
				'success' => true,
				'data' => 'done',
				'msg' => "Image deleted"
			];
		}

		return $this->response->setJSON($response);

	}



	public function uploaddocumentaction()
    {
        if (! $this->validate([
			'fileid' => [
                'uploaded[docid]',
                'mime_in[docid,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[docid,4096]',
            ],
	
		]))
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Document not uploaded"
			];
			
        }
        
        $filh = $this->request->getFile('docid');
		$ndfgf = $filh->getRandomName();
		$PATH = getcwd();
		$filh->move($PATH .'/public/documentpics', $ndfgf);


		$applicant_id = $this->request->getPost('applicant_id');
		$username = $this->request->getPost('user_name');

		$data = [

			'ffile_name' => $ndfgf,
			'fapplicant_id' => $this->request->getPost('applicant_id'),
			'fuser_name' => $this->request->getPost('user_name'),
		];
		
		$document = new ApplicantDocumentModel();
        
		$document->insert($data);
	    $inserted = $document->affectedRows();
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

		//var_dump($this->request->getPost());

		return $this->response->setJSON($filh);
		

	}


	public function deleteducumentaction()
	{	

		$doc_id = $this->request->getPost('doc_id');
		$doc_name = $this->request->getPost('doc_name');
		
		$document = new ApplicantDocumentModel();
		$document->where('frecno', $doc_id)->delete();
		$deleted = $document->affectedRows();
		if($deleted > 0)
		{
			$PATH = getcwd();
			unlink($PATH .'/public/documentpics/'.$doc_name);
			$response = [
				'success' => true,
				'data' => 'done',
				'msg' => "Document deleted"
			];
		}

		return $this->response->setJSON($response);

	}


    public function addweblinkaction()
    {
        //var_dump($this->request->getPost());
        if (! $this->validate([
			
			'weblink' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Weblink is required!',
				]
			],
		
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('/applicant/dashboard'));
        }

        $data = [
			'fweb_link' => $this->request->getPost('weblink'),
			'fapplicant_id' => $this->request->getPost('applicant_id'),
            'fuser_name' => $this->request->getPost('user_name'),
            
            ];
            
        //var_dump($data);

        $weblink = new ApplicantWebLinkModel();
		$weblink->insert($data);
	    $inserted = $weblink->affectedRows();
		if($inserted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Web link added successfully"
			];
			
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Web Link not added"
			];
		}	

		//var_dump($this->request->getPost());

		return $this->response->setJSON($response);
        
	}
	
	public function deleteweblinkaction()
	{
		$link_id = $this->request->getPost('link_id');
		$weblink = new ApplicantWebLinkModel();
        $weblink->where('frecno', $link_id)->delete();
    	$deleted = $weblink->affectedRows();
		if($deleted > 0)
		{
            $response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Web link deleted successfully"
			];
        }
        else
        {
            $response = [
				'success' => false,
				'data' => 'saved',
				'msg' => "Error. Try again"
			];
		}
		
		return $this->response->setJSON($response);
	}

	public function addproskillaction()
    {
        //var_dump($this->request->getPost());
        if (! $this->validate([
			'pro_skill' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Skill is required!',
				]
			],
		
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('/applicant/dashboard'));
        }

        $data = [
            
			'fskill' => $this->request->getPost('pro_skill'),
			'fapplicant_id' => $this->request->getPost('applicant_id'),
            'fuser_name' => $this->request->getPost('user_name'),
            
            ];
            
        //var_dump($data);

        $pro_skill = new ApplicantProSkillModel();
		$pro_skill->insert($data);
	    $inserted = $pro_skill->affectedRows();
		if($inserted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Pro Skill added successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Pro Skill not added"
			];	
		}

		return $this->response->setJSON($response);
        
	}


	public function deleteproskillaction()
	{
		$id = $this->request->getPost('skill_id');
		$pro_skill = new ApplicantProSkillModel();
        $pro_skill->where('frecno', $id)->delete();
        $deleted = $pro_skill->affectedRows();
		if($deleted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Pro Skill deleted successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Pro Skill not deleted"
			];	
		}

		return $this->response->setJSON($response);
	}



	public function pro_skills_container()
	{
		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$pro_skill = new ApplicantProSkillModel();
		$pro_skills = $pro_skill->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();


		$applicant = new ApplicantModel();
		$applicant_details = $applicant->where('fapplicant_id', $applicant_id)->first();

		$output = "";
		$total_item = 0;
		$url = site_url();

		if(empty($pro_skills))
		{
			$output .= '
				
					<div class="text-center">
						<p class="text-center">Seems you have no professional skills yet. Add a new record to get started.</p>
					</div>
						
					';
		}
		else
		{
			
		
			foreach($pro_skills as $skill)
			{
				

				$output .= '
 
				
				<div class="skill-padding skill-padding-div" >
                 
                     <div class="skill proskill">
                         '.$skill['fskill'].'&nbsp;<button class="delete-skill-button delete-pro-skill-button cursor" data-skill_id="'.$skill['frecno'].'">x</button></div>
                 </div>
         

				';
			}

			

		}

		$data = array(
			'pro_skills' =>	$output,
		);	

		return $this->response->setJSON($data);


	}



	public function addotherskillaction()
    {
        // var_dump($this->request->getPost());
        if (! $this->validate([
			'other_skill' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Skill is required!',
				]
			],
		
		]))
		{
			session()->setFlashdata('error', $this->validator->getErrors());
			return redirect()->to(base_url('/applicant/dashboard'));
        }

        $data = [
            
			'fskill' => $this->request->getPost('other_skill'),
			'fapplicant_id' => $this->request->getPost('applicant_id'),
            'fuser_name' => $this->request->getPost('user_name'),
            
            ];
            
        //var_dump($data);

        $other_skill = new ApplicantOtherSkillModel();
		$other_skill->insert($data);
	    $inserted = $other_skill->affectedRows();
		if($inserted > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Other Skill added successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Other Skill not added"
			];	
		}

		return $this->response->setJSON($response);
        
	}
	

	public function deleteotherskillaction()
	{
		$id = $this->request->getPost('skill_id');
		$other_skill = new ApplicantOtherSkillModel();
        $other_skill->where('frecno', $id)->delete();
        $deleted = $other_skill->affectedRows();
		if($deleted > 0)
		{
            $response = [
				'success' => true,
				'data' => 'deleted',
				'msg' => "Other Skill deleted successfully"
			];
        }
        else
        {
            $response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Other Skill not deleted"
			];	
		}
		
		return $this->response->setJSON($response);
	}



	public function other_skills_container()
	{
		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$other_skill = new ApplicantOtherSkillModel();
		$other_skills = $other_skill->where('fuser_name', $username)->orderBy('frecno', 'desc')->findAll();


		$applicant = new ApplicantModel();
		$applicant_details = $applicant->where('fapplicant_id', $applicant_id)->first();

		$output = "";
		$total_item = 0;
		$url = site_url();

		if(empty($other_skills))
		{
			$output .= '
				
					<div class="">
						<p style="text-align:center">Seems you have no other skills yet. Add a new record to get started.</p>
					</div>
						
					';
		}
		else
		{
			
		
			foreach($other_skills as $skill)
			{
				

				$output .= '
 
				
				<div class="skill-padding "><div class="skill" >'.$skill['fskill'].'&nbsp;<button data-skill_id="'.$skill['frecno'].'" class="delete-skill-button delete-other-skill-button">x</button></div></div>
         

				';
			}

			

		}

		$data = array(
			'other_skills' =>	$output,
		);	

		return $this->response->setJSON($data);


	}


	public function changelocation()
	{
		$id = $this->request->getPost('id');

		$data = [

			'fstate' => $this->request->getPost('state'),
			'flga' => $this->request->getPost('lga'),	

		];


		//var_dump($id);


		$applicantmodel = new ApplicantModel();
		$updated = $applicantmodel->update($id, $data);
		if($updated > 0)
		{
			session()->setFlashdata('success', 'Location updated successfully');
			return redirect()->to(base_url('applicant/dashboard'));
		}
		else
		{
			session()->setFlashdata('error', 'Location not updated. Try again');
			return redirect()->to(base_url('applicant/dashboard'));
		}
		

	}


	public function updatebio()
	{
		$id = $this->request->getPost('id');

		if(!empty($this->request->getPost('availability_start_date2')))
		{
			$start_date = $this->request->getPost('availability_start_date2');
		}
		else
		{
			if($this->request->getPost('availability_start_date') == 'now')
			{
				$start_date = date('Y-m-d', strtotime("January 1 2000"));
			}
			else if($this->request->getPost('availability_start_date') == 'not_yet')
			{
				$start_date = null;
			}
			
		}

		$data = [

			'fgender' => $this->request->getPost('gender'),
			'fmarital_status' => $this->request->getPost('marital_status'),	
			'fdisabled' => $this->request->getPost('disabled'),
			'feducational_qualification' => $this->request->getPost('certificate'),	
			'fother_professions1' => $this->request->getPost('other_professions1'),
			'fother_professions2' => $this->request->getPost('other_professions2'),	
			'fother_professions3' => $this->request->getPost('other_professions3'),
			'fother_professions4' => $this->request->getPost('other_professions4'),	
			'flanguages1' => $this->request->getPost('languages1'),
			'flanguages2' => $this->request->getPost('languages2'),	
			'flanguages3' => $this->request->getPost('languages3'),
			'flanguages4' => $this->request->getPost('languages4'),	
			'flanguages5' => $this->request->getPost('languages5'),
			'fcurrent_employer' => $this->request->getPost('current_employer'),	
			'fstate' => $this->request->getPost('state'),
			'flga' => $this->request->getPost('lga'),	
			'femployment_type' => $this->request->getPost('employment_type'),
			'fpreferred_job1' => $this->request->getPost('preferred_job1'),	
			'fpreferred_job2' => $this->request->getPost('preferred_job2'),
			'fpreferred_job3' => $this->request->getPost('preferred_job3'),	
			'fpreferred_job4' => $this->request->getPost('preferred_job4'),
			'fpreferred_job_location_state' => $this->request->getPost('preferred_job_location_state'),	
			'fpreferred_job_location_lga' => $this->request->getPost('preferred_job_location_lga'),
			'favailability_start_date' => $start_date,
		];


		//var_dump($id);


		$applicantmodel = new ApplicantModel();
		$updated = $applicantmodel->update($id, $data);
		if($updated > 0)
		{
			$response = [
				'success' => true,
				'data' => 'deleted',
				'msg' => "Profile updated successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Not updated"
			];
		}

		return $this->response->setJSON($response);
		
	}




	public function profilesetupaction()
	{
		//var_dump($this->request->getPost());
		if (! $this->validate([

			'phone' => 'required|trim',
			'email' => 'required|trim',
			
		]))
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Profile not updated"
			];
		}
		
		$id = $this->request->getPost('id');
		
		$data = [

			'fphone'  => $this->request->getPost('phone'),
			'fminimum_salary'  => $this->request->getPost('minimum_salary') ,
			'femail'  => $this->request->getPost('email'),

			];

		//var_dump($data);

		$applicantmodel = new ApplicantModel();
		$updated = $applicantmodel->update($id, $data);
		if($updated > 0)
		{
			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Profile updated successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Other Skill not added"
			];	
		}

		return $this->response->setJSON($response);

	}


	public function changeprofilepic()
	{
		if (! $this->validate([
			'profile_pic_id' => [
                'uploaded[profile_pic_id]',
                'mime_in[profile_pic_id,image/jpg,image/jpeg,image/gif,image/png]',
                'max_size[profile_pic_id,4096]',
            ],
	
		]))
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Profile Picture not updated"
			];
			
		}

		$id = $this->request->getPost('id');
		$old_image_name = $this->request->getPost('old_image_name');
		$picd = $this->request->getFile('profile_pic_id');
		$ghka = $picd->getRandomName();
		
		$full_path = $picd->getTempName();

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
		$image->target_path = 'public/profilepics/600/'. $ghka;

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
		if (!$image->resize(600, 600, ZEBRA_IMAGE_CROP_CENTER)) {

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

			'fprofile_image' => $ghka,
		];

		$applicant = new ApplicantModel();
        $updated = $applicant->update($id, $data);
		if($updated > 0)
		{
			// $PATH = getcwd();
			// $picd->move($PATH .'/public/profilepics', $ghka);

			$PATH = getcwd();
			unlink($PATH .'/public/profilepics/600/'.$old_image_name);

			$response = [
				'success' => true,
				'data' => 'saved',
				'msg' => "Profile Picture updated successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "JProfile Picture not updated"
			];
		}

		return $this->response->setJSON($response);
	}


	public function createteamaction()
	{
		 // var_dump($this->request->getPost());
		 if (! $this->validate([
			'team_name' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Team Name is required!',
				]
			],
			'team_description' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Team Description is required!',
							]
						],
			'team_privacy' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Team Privacy Setting is required!',
				]
			],
		
		]))
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Team not added"
			];
		}
		

		$team_id = 'TM' . time();

        $data = [
            
			'fteam_name' => $this->request->getPost('team_name'),
			'fteam_id' => $team_id,
			'fdescription' => $this->request->getPost('team_description'),
			'fprivacy' => $this->request->getPost('team_privacy'),
			'fadmin' => $this->request->getPost('applicant_id'),
            
            ];
            
        //var_dump($data);

        $team = new TeamModel();
		$team->insert($data);
		$inserted = $team->affectedRows();
		
		if($inserted > 0)
		{
			//Insert owner in team member list
			$data = [
            
				'fteam_id' => $team_id,
				'fapplicant_id' => $this->request->getPost('applicant_id'),
				'fapplicant_name' => $this->request->getPost('applicant_name'),
				'fis_active' => 1,
				
				];
				
			//var_dump($data);
	
			$team_member = new TeamMemberModel();
			
			try
			{
					$team_member->insert($data);
					//$inserted = $team_member->affectedRows();
					// if($inserted > 0)
					// {
					// 	$response = [
					// 		'success' => true,
					// 		'data' => 'saved',
					// 		'msg' => "Memeber added successfully"
					// 	];
						
					// }
					// else
					// {
					// 	$response = [
					// 		'success' => false,
					// 		'data' => 'failed',
					// 		'msg' => "Member not created"
					// 	];	
						
					// }
			}
			catch (\Exception $e)
			{
				// $response = [
				// 	'success' => false,
				// 	'data' => 'failed',
				// 	'msg' => $e->getMessage()
				// ];
			}
	
		
			session()->setFlashdata('success', 'Team created successfully');
			return redirect()->to(base_url('applicant/teams/'));
		}
		else
		{
			session()->setFlashdata('error', 'Team not created');
			return redirect()->to(base_url('applicant/teams/'));
		}

		
	}


	public function jointeamaction()
	{
		//var_dump($this->request->getPost());
		
        $data = [
            
			'fteam_id' => $this->request->getPost('team_id'),
			'fapplicant_id' => $this->request->getPost('applicant_id'),
			'fapplicant_name' => $this->request->getPost('applicant_name'),
			'fis_active' => 1,
            
            ];
            
		//var_dump($data);

		$team_member = new TeamMemberModel();
		
		try
		{
				$team_member->insert($data);
				$inserted = $team_member->affectedRows();
				if($inserted > 0)
				{
					$response = [
						'success' => true,
						'data' => 'saved',
						'msg' => "Memeber added successfully"
					];
					
				}
				else
				{
					$response = [
						'success' => false,
						'data' => 'failed',
						'msg' => "Member not created"
					];	
					
				}
		}
		catch (\Exception $e)
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => $e->getMessage()
			];
		}

        
		return $this->response->setJSON($response);

	}


	public function jointeamaction2()
	{
		//var_dump($this->request->getPost());
		
        $data = [
            
			'fteam_id' => $this->request->getPost('team_id'),
			'fapplicant_id' => $this->request->getPost('applicant_id'),
			'fapplicant_name' => $this->request->getPost('applicant_name'),
			'fis_active' => 0,
            
            ];
            
		//var_dump($data);

		$team_member = new TeamMemberModel();
		
		try
		{
				$team_member->insert($data);
				$inserted = $team_member->affectedRows();
				if($inserted > 0)
				{
					$response = [
						'success' => true,
						'data' => 'saved',
						'msg' => "Memeber added successfully"
					];
					
				}
				else
				{
					$response = [
						'success' => false,
						'data' => 'failed',
						'msg' => "Member not created"
					];	
					
				}
		}
		catch (\Exception $e)
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => $e->getMessage()
			];
		}

        
		return $this->response->setJSON($response);

	}


	public function getteammembers()
	{
		$team_id = $this->request->getPost('team_id');

		$member = new TeamMemberModel();
		$team_members = $member->where('fteam_id', $team_id)->select('fapplicant_name')->findAll();
		$output = "";
		
		if(empty($team_members))
         {
             $output = '<li></li>';
         }
         else
         {
			 $output .= '<ul style="padding-left:6px;">';
            
				foreach ($team_members as $member) 
				{
					$output .= '<li style="list-style-type: none;">'.$member['fapplicant_name'].'</li>'; 
				}

			$output .= '</ul>';
			
		 }
		 
		 
         $data = array(
            'team_member_names'	=>	$output,
         );	

		return $this->response->setJSON($data);
	}

	public function searchapplicants()
	{
		$keyword = $this->request->getPost('keyword');
		$applicant_model = new ApplicantModel();
		$applicants = $applicant_model->where('fapplicant_id !=', session()->applicant_id)->where('factive', 1)->like('ffirst_name', $keyword)->findAll();
		$output = "";
		
		if(empty($applicants))
         {
             $output = '';
         }
         else
         {
			$output .= '<ul class="w3-card-2" style="padding-left:6px;">';

            foreach ($applicants as $applicant) 
            {
               $output .= '<li class="name-box cursor" data-applicant_job_title="'.$applicant['fprofession'].'" data-applicant_id="'.$applicant['fapplicant_id'].'" data-applicant_name="'.$applicant['ffirst_name']. ' ' .$applicant['flast_name'].'" style="list-style-type: none;">'.$applicant['ffirst_name']. ' ' .$applicant['flast_name']. '-'. $applicant['fcurrent_employer'].'</li>'; 
			}

			$output .= '</ul>';
			
		 }
		 
		 
         $data = array(
            'applicants'		=>	$output,
         );	

		return $this->response->setJSON($data);

	}


	public function searchteams()
	{

		$keyword = $this->request->getPost('keyword');
		$team_model = new TeamModel();
		$teams = $team_model->like('fteam_name', $keyword)->where('fprivacy', 1)->findAll();
		$output = "";
		
		if(is_null($teams))
         {
             $output = '<li>None found</li>';
         }
         else
         {
            // $output .= "<ul>";
            foreach ($teams as $team) 
            {
               $output .= '<li class="team-name-box cursor" data-team_id="'.$team['fteam_id'].'" data-team_name="'.$team['fteam_name'].'">'.$team['fteam_name'].'</li>'; 
			}
			
			// $output .= "</ul>";
		 }
		 

         $data = array(
            'teams'		=>	$output,
         );	

		return $this->response->setJSON($data);

		//var_dump($teams);
	}


	public function searchprofessions()
	{
		$textbox_no = $this->request->getPost('textbox_no');

		if(empty($this->request->getPost('keyword')))
		{	
		 	$keyword = 'hfkhfhehfjhfklhfklheklfhklfhklehf';
		}
		else
		{	
			$keyword = $this->request->getPost('keyword');
	   	}

		 $pm = new ProfessionModel();
		 $professions = $pm->like('fname', $keyword)->select('fparent_id')->where('fparent_id !=', 0)->orderBy('fname', 'RANDOM')->findAll();
		 

		$related_professions = array();

		for($i = 0; $i < count($professions); $i++) 
		{

			$related_professions[] = $pm->where('fparent_id =', $professions[$i])->findAll();
		}

		//$rp = array_unique($related_professions);
		$rp = array_map("unserialize", array_unique(array_map("serialize", $related_professions)));
		
		if(empty($rp))
         {
			$output .= '<ul class="bg-white">';
			  $output .= '<ul class="w3-ul w3-card-2 alert alert-danger">';
			 	$output .= '<li class="w3-bar">None found</li>';
			 $output .= "</ul>";
			 $output .= "</ul>";
         }
         else
         {
            $output .= '<ul class="bg-white">';
		
			foreach($rp as $lists) 
            {
				$profession_name = $pm->where('frecno', $lists[0]['fparent_id'])->select('fname')->first();
				$output .= '<br>';
				$output .= '<ul class="w3-ul w3-card-2">';
				$output .= '<button class="w3-btn w3-black">'.$profession_name['fname'].'</button>';
					
					foreach( $lists as $list)
					{
						
						$output .= '<li class="w3-bar cursor profession-name-box_'.$textbox_no.'" data-parent_name="'.$profession_name['fname'].'" data-profession_id="'.$list['frecno'].'" data-profession_name="'.$list['fname'].'">'.$list['fname'].'</li>';
						
					} 

				
				$output .= "</ul>";
				
			}

			
			
			$output .= "</ul>";
		 }
		 

         $data = array(
            'professions' =>	$output,
         );	

		return $this->response->setJSON($data);

		//var_dump($teams);
	}


	public function getjobinvitemessages()
	{
		$job_id = $this->request->getPost('job_id');
		$applicant_id = session()->applicant_id;
		$job_message = new JobInviteMessageModel();
		$job_messages = $job_message->where('fjob_id', $job_id)->where('fapplicant_id', $applicant_id)->findAll();

		//var_dump($job_messages);
	}


	public function createeventaction()
	{
		 // var_dump($this->request->getPost());
		 if (! $this->validate([
			'ffrom' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Event Start is required!',
							]
						],
			'fto' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Event End is required!',
				]
			],
			'ftitle' => [
				'rules' => 'required|trim',
				'errors' => [
						'required' => 'Event Title is required!',
				]
			],
			'fdescription' => [
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
		
		$invitees = $this->request->getPost('invitees');
		$extracted_invitees = implode(",", $invitees);

        $data = [
            
			'ffrom' => $this->request->getPost('from'),
			'fto' => $this->request->getPost('to'),
			'ftitle' => $this->request->getPost('title'),
			'finvitees' => $extracted_invitees,
			'fauthor' => $this->request->getPost('applicant_id'),
			'fevent_id' => 'EV' . time(),
			'fdescription' => $this->request->getPost('description'),
            
            ];
            
        //var_dump($data);

        $event = new EventModel();
		$event->insert($data);
		 $inserted = $event->affectedRows();
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Event created successfully');
			return redirect()->to(base_url('applicant/events/'));
		}
		else
		{

			session()->setFlashdata('error', 'Event not created');
			return redirect()->to(base_url('applicant/events/'));
		}

	}

	public function events()
	{
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		} 
		
		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
		$data['applicants'] = $applicant->where('factive', 1)->where('fapplicant_id !=', session()->applicant_id)->orderBy('ffirst_name', 'asc')->findAll();

		$applicant = new ApplicantModel();
        $data['applicant_details'] = $applicant->where('fuser_name', $username)->first();
		
		$event_model = new EventModel();
		$data['my_events'] = $event_model->where('fauthor', $applicant_id)->orderBy('frecno', 'desc')->findAll();

		$applicant = $applicant->where('fuser_name', $username)->first();
        $data['my_event_invites'] = $event_model->like('finvitees', $applicant['fapplicant_id'])->orderBy('frecno', 'desc')->findAll();
		
		return view('applicant/events', $data);
		//var_dump($data['my_events']);
	}

	public function event($id)
	{
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
        }
		
		$event_model = new EventModel();
		$data['event_details'] = $event_model->where('fevent_id', $id)->orderBy('frecno', 'desc')->first();

		$applicant = new ApplicantModel();
		$data['applicant_details'] = $applicant->where('fapplicant_id', $data['event_details']['fauthor'])->first();

		$data['first_name'] = $data['applicant_details']['ffirst_name'];

		$data['last_name'] = $data['applicant_details']['flast_name'];
		
		//var_dump($data['applicant_details']['ffirst_name']);
		
		return view('applicant/eventdetails', $data);
	}

	public function teams()
	{

		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}
		
		$applicant_id = session()->applicant_id;

		$username = session()->username;

		$applicant = new ApplicantModel();

		$data['applicants'] = $applicant->findAll();
		

		$applicant = new ApplicantModel();
		$data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

		$team = new TeamModel();
		$data['my_teams'] = $team->where('fadmin', $applicant_id)->orderBy('frecno', 'desc')->findAll();
		

		return view('applicant/teams', $data);
	}


	public function teammessages($team_id)
	{
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}

		$data['team_id'] = $team_id;

		$team = new TeamModel();
		$data['team_name'] = $team->where('fteam_id', $team_id)->select('fteam_name')->first();

		$applicant_id = session()->applicant_id;

		$username = session()->username;

		$applicant = new ApplicantModel();

		$data['applicants'] = $applicant->findAll();
		

		$applicant = new ApplicantModel();
		$data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

		

		//var_dump($data['team_name']);

		return view('applicant/teammessages', $data);
	}



	public function sendteammessageaction()
	{
		 // var_dump($this->request->getPost());
		 if (! $this->validate([
			'message' => [
						'rules'  => 'required|trim',
						'errors' => [
							'required' => 'Chat Message is required!',
							]
						],

		
		]))
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Message not sent"
			];
		}
		

        $data = [
            
			'fmessage' => $this->request->getPost('message'),
			'fsender_id' => $this->request->getPost('applicant_id'),
			'fsender_name' => $this->request->getPost('applicant_name'),
			'fsender_text_colour' => $this->request->getPost('applicant_text_colour'),
			'fteam_id' => $this->request->getPost('team_id'),
			'fmessage' => $this->request->getPost('message'),
            
            ];
            
        //var_dump($data);

        $team_message = new TeamMessageModel();
		$team_message->insert($data);
		 $inserted = $team_message->affectedRows();
		if($inserted > 0)
		{
			
			$response = [
				'success' => true,
				'data' => 'sent',
				'team_id' => $this->request->getPost('team_id'),
				'msg' => "Message sent successfully"
			];
		}
		else
		{
			$response = [
				'success' => false,
				'data' => 'failed',
				'msg' => "Message not sent"
			];	
		}

		return $this->response->setJSON($response);
	}


	public function getteammessages()
	{
		$team_id = $this->request->getPost('team_id');
		
		$team_message = new TeamMessageModel();
		$messages = $team_message->where('fteam_id', $team_id)->orderBy('created_at', 'desc')->findAll();

		$output = "";
		$total_item = 0;
		$url = site_url();

		if(empty($messages))
		{
			$output .= '

			<p></p>
						
					';
		}
		else
		{

		
			foreach($messages as $message)
			{
				
				$output .= '
						
						<p class="w3-margin w3-border w3-round-large w3-gray w3-padding">
						<span style="color:'.$message['fsender_text_colour'].'">'.$message['fsender_name'].'</span> said: <span class="float-right">'.date('F, d, Y - h:i A', strtotime($message['created_at'])).'</span>
						<br>'.$message['fmessage'].'
						</p>
						
					<br>
				';
			}

		
		}

		$data = array(
			'team_messages' =>	$output,
		);	

		return $this->response->setJSON($data);

	}

	
	public function jobdash()
	{

		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
        }

		$applicant_id = session()->applicant_id;

		$username = session()->username;

		$applicant = new ApplicantModel();

		$data['applicants'] = $applicant->findAll();
		

		$applicant = new ApplicantModel();
		//$data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

		$job_model = new JobInviteMessageModel();
		$data['jobs'] = $job_model->where('fapplicant_id', $applicant_id)->orderBy('frecno', 'desc')->findAll();
		
		//var_dump($applicant_id);

		return view('applicant/jobdash', $data);
	}

	public function jobdashmessages($job_id)
	{

		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
        }
		//echo $id;
		$applicant_id = session()->applicant_id;

		$username = session()->username;

		$applicant = new ApplicantModel();

		$data['applicants'] = $applicant->findAll();
		

		$applicant = new ApplicantModel();
		$data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

		$job_invite_message_model = new JobInviteMessageModel();
		$data['job_messages'] = $job_invite_message_model->where('fapplicant_id', $applicant_id)->where('fjob_id', $job_id)->findAll();

		$data['job_messages_count'] = $job_invite_message_model->where('fapplicant_id', $applicant_id)->where('fjob_id', $job_id)->countAllResults();

		//var_dump($data['job_messages']);
		return view('applicant/jobdashmessages', $data);
	}


	public function sendjobdashmessage()
	{
		
        $data = [

			'fjob_id' => $this->request->getPost('job_id'),
            'fjob_title' => $this->request->getPost('job_title'),
			'fmessage' => $this->request->getPost('message'),
			'fsender_id' => $this->request->getPost('applicant_id'),
			'freceiver_id' => $this->request->getPost('employer_id'),
			'fapplicant_id' => $this->request->getPost('applicant_id'),
			'femployer_id' => $this->request->getPost('employer_id'),
			'fsubject' => $this->request->getPost('subject'),
            
            ];
            
		//var_dump($data);
		$job_invite_message_model = new JobInviteMessageModel();
		$job_invite_message_model->insert($data);
		$inserted = $job_invite_message_model->affectedRows();
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Message sent successfully');
			return redirect()->to(base_url('applicant/jobdashmessages/'. $this->request->getPost('job_id')));
		}
		else
		{
			session()->setFlashdata('error', 'Message not added');
			return redirect()->to(base_url('applicant/jobdashmessages/'. $this->request->getPost('job_id')));
		}
		
	}



	public function allaboutyou()
	{
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}

		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
		$data['applicants'] = $applicant->findAll();

		$applicant = new ApplicantModel();
        $data['applicant_details'] = $applicant->where('fuser_name', $username)->first();
		
		return view('applicant/allaboutyou');
	}

	public function jobs()
	{
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}

		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
		$data['applicants'] = $applicant->findAll();

		$applicant = new ApplicantModel();
        $data['applicant_details'] = $applicant->where('fuser_name', $username)->first();
		
		return view('applicant/jobs');
	}


	public function recommendations()
	{

		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}

		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
		$data['applicants'] = $applicant->findAll();

		$applicant = new ApplicantModel();
		$data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

		$applicant_experience = new ApplicantExperienceModel();
        $data['applicant_experiences'] = $applicant_experience->where('fapplicant_id', $applicant_id)->orderBy('frecno', 'desc')->findAll();
		
		$recommendation = new RecommendationRequestModel();
		$data['sent_recommendation_requests'] = $recommendation->where('fsender_id', $applicant_id)->findAll();

		$recommendation = new RecommendationRequestModel();
		$data['received_recommendation_requests'] = $recommendation->where('freceiver_id', $applicant_id)->findAll();

		$recommendation = new RecommendationOfferModel();
		$data['sent_recommendation_offers'] = $recommendation->where('fsender_id', $applicant_id)->findAll();

		$recommendation = new RecommendationOfferModel();
		$data['received_recommendation_offers'] = $recommendation->where('freceiver_id', $applicant_id)->findAll();
		
		return view('applicant/recommendations', $data);
	}

	public function recommendationrequest()
	{
		//var_dump($this->request->getPost());
		if(!empty($this->request->getPost('receiver_id')))
		{
			$applicant = new ApplicantModel();
			$receiver = $applicant->where('fapplicant_id', $this->request->getPost('receiver_id'))->first();
			$receiver['fprofession'];

			$data = [

				'freceiver_id' => $this->request->getPost('receiver_id'),
				'freceiver_name' => $receiver['ffirst_name']. ' ' . $receiver['flast_name'],
				'freceiver_job_title' => $receiver['fprofession'],
				'fsender_id' => session()->applicant_id,
				'fsender_name' => $this->request->getPost('sender_name'),
				'fsender_job_title' => $this->request->getPost('sender_job_title'),
				'fmessage' => $this->request->getPost('message'),
				'fsubject' => "I Will Like To Request A Recommendation From You",
				'frelationship' => $this->request->getPost('relationship'),
				'frelationship-position' => $this->request->getPost('relationship-position'),
				];
				
			//var_dump($data);

			$recommendation_request_model = new RecommendationRequestModel();
			$recommendation_request_model->insert($data);
			$inserted = $recommendation_request_model->affectedRows();
			if($inserted > 0)
			{
				session()->setFlashdata('success', 'Recommendation Request sent successfully');
				return redirect()->to(base_url('applicant/recommendations'));
			}
			else
			{
				session()->setFlashdata('error', 'Request not sent');
				return redirect()->to(base_url('applicant/recommendations'));
			}
		}
		else
		{
			session()->setFlashdata('error', 'The receiver you selected is not a registered user on the platform. You can ask them to register a Kokoruns account');
			return redirect()->to(base_url('applicant/recommendations'));
		}
	}

	public function recommendationoffer()
	{
		
		if(!empty($this->request->getPost('receiver_id')))
		{
			//var_dump($this->request->getPost());
			$applicant = new ApplicantModel();
			$receiver = $applicant->where('fapplicant_id', $this->request->getPost('receiver_id'))->first();
			$receiver['fprofession'];

			$data = [

			'freceiver_id' => $this->request->getPost('receiver_id'),
			'freceiver_name' => $receiver['ffirst_name']. ' ' . $receiver['flast_name'],
			'freceiver_job_title' => $receiver['fprofession'],
			'fsender_id' => $this->request->getPost('sender_id'),
			'fsender_name' => $this->request->getPost('sender_name'),
			'fsender_job_title' => $this->request->getPost('sender_job_title'),
			'fmessage' => $this->request->getPost('message'),
			'fsubject' => "I Will Like To Recommend You",
			'frelationship' => $this->request->getPost('relationship'),
			'frelationship-position' => $this->request->getPost('relationship-position'),
            
		   ];
		   
		   //var_dump($data);
            
			//var_dump($applicant_details['fprofession']);
			$recommendation_offer_model = new RecommendationOfferModel();
			$recommendation_offer_model->insert($data);
			$inserted = $recommendation_offer_model->affectedRows();
			if($inserted > 0)
			{

				if(!empty($this->request->getPost('honesty')))
				{
					$honesty = $this->request->getPost('honesty');
					
				}
				else
				{
					$honesty = 0;
				}

				if(!empty($this->request->getPost('proactive')))
				{
					$proactive = $this->request->getPost('proactive');
					
				}
				else
				{
					$proactive = 0;
				}

				if(!empty($this->request->getPost('adaptable')))
				{
					$adaptable = $this->request->getPost('adaptable');
					
				}
				else
				{
					$adaptable = 0;
				}

				if(!empty($this->request->getPost('team_oriented')))
				{
					$team_oriented = $this->request->getPost('team_oriented');
					
				}
				else
				{
					$team_oriented = 0;
				}

				if(!empty($this->request->getPost('respectful')))
				{
					$respectful = $this->request->getPost('respectful');
					
				}
				else
				{
					$respectful = 0;
				}

				$data = [
					'freceiver_id' => $this->request->getPost('receiver_id'),
					'fsender_id' => $this->request->getPost('sender_id'),
					'fgeneral_impression' => $this->request->getPost('impression'),
					'fhonesty_integrity' => $honesty,
					'fproactive_dedicated' => $proactive,
					'fadaptable' => $adaptable,
					'fteam_oriented' => $team_oriented,
					'frespectable' => $respectful,
				];


				$ptm = new PersonalityTraitModel();
				$ptm->insert($data);


				session()->setFlashdata('success', 'Recommendation Offer sent successfully');
				return redirect()->to(base_url('applicant/recommendations'));

			}
			else
			{
				session()->setFlashdata('error', 'Offer not sent');
				return redirect()->to(base_url('applicant/recommendations'));
			}
		}
		else
		{
			session()->setFlashdata('error', 'The receiver you selected is not a registered user on the platform. You can ask them to register a Kokoruns account');
			return redirect()->to(base_url('applicant/recommendations'));
		}
	}

	public function RecommendationRequestDetails($id)
	{
		$recommendation = new RecommendationRequestModel();
		$data['recommendation_request'] = $recommendation->where('frecno', $id)->first();
		return view('applicant/recommendation_request_details', $data);
	}

	public function RecommendationRequestAccept($id)
	{
		$recommendation = new RecommendationRequestModel();
		$data['recommendation_request'] = $recommendation->where('frecno', $id)->first();
		return view('applicant/recommendation_request_details2', $data);
	}

	public function RecommendationRequestAcceptAction()
	{

		if(!empty($this->request->getPost('honesty')))
		{
			$honesty = $this->request->getPost('honesty');
		}
		else
		{
			$honesty = 0;
		}

		if(!empty($this->request->getPost('proactive')))
		{
			$proactive = $this->request->getPost('proactive');
		}
		else
		{
			$proactive = 0;
		}

		if(!empty($this->request->getPost('adaptable')))
		{
			$adaptable = $this->request->getPost('adaptable');	
		}
		else
		{
			$adaptable = 0;
		}

		if(!empty($this->request->getPost('team_oriented')))
		{
			$team_oriented = $this->request->getPost('team_oriented');	
		}
		else
		{
			$team_oriented = 0;
		}

		if(!empty($this->request->getPost('respectful')))
		{
			$respectful = $this->request->getPost('respectful');	
		}
		else
		{
			$respectful = 0;
		}
		
			$data = [
				'freceiver_id' => $this->request->getPost('receiver_id'),
				'fsender_id' => $this->request->getPost('sender_id'),
				'fgeneral_impression' => $this->request->getPost('impression'),
				'fhonesty_integrity' => $honesty,
				'fproactive_dedicated' => $proactive,
				'fadaptable' => $adaptable,
				'fteam_oriented' => $team_oriented,
				'frespectable' => $respectful,
			];


		$pt = new PersonalityTraitModel();
		$pt->insert($data);

		$inserted = $pt->affectedRows();
		if($inserted > 0)
		{
			$data = [
			'faccepted' => 1,
			];

			$recommendation = new RecommendationRequestModel();
			$updated = $recommendation->update($this->request->getPost('id'), $data);


			session()->setFlashdata('success', 'Recommendation Request accepted successfully');
			return redirect()->to(base_url('applicant/recommendations'));
		}
		else
		{
			session()->setFlashdata('error', 'Error occurred!');
			return redirect()->to(base_url('applicant/recommendations'));
		}
	}


	public function recommendationrequestreject($id)
	{
		$data = [
			'faccepted' => -1,
			];

			$recommendation = new RecommendationRequestModel();
			$updated = $recommendation->update($id, $data);
			if($updated > 0)
			{
				session()->setFlashdata('success', 'Recommendation Request rejected successfully');
				return redirect()->to(base_url('applicant/recommendations'));
			}
			else
			{
				session()->setFlashdata('error', 'Error occurred!');
				return redirect()->to(base_url('applicant/recommendations'));
			}

	}


	public function RecommendationOfferDetails($id)
	{
		$recommendation = new RecommendationOfferModel();
		$data['recommendation_offer'] = $recommendation->where('frecno', $id)->first();
		return view('applicant/recommendation_offer_details', $data);
	}

	public function RecommendationOfferAccept($id)
	{
		$recommendation = new RecommendationRequestModel();
		$data['recommendation_request'] = $recommendation->where('frecno', $id)->first();
		return view('applicant/recommendation_request_details2', $data);
	}

	public function RecommendationOfferAcceptAction($id)
	{
		$data = [
		  'faccepted' => 1,
		];

		$recommendation = new RecommendationOfferModel();
		$updated = $recommendation->update($id, $data);

		if($updated > 0)
		{
			session()->setFlashdata('success', 'Recommendation Offer accepted successfully');
			return redirect()->to(base_url('applicant/recommendations'));
		}
		else
		{
			session()->setFlashdata('error', 'Error occurred!');
			return redirect()->to(base_url('applicant/recommendations'));
		}
	}


	public function recommendationofferreject($id)
	{
			$data = [
				'faccepted' => -1,
			];

			$recommendation = new RecommendationOfferModel();
			$updated = $recommendation->update($id, $data);
			if($updated > 0)
			{
				session()->setFlashdata('success', 'Recommendation Offer rejected successfully');
				return redirect()->to(base_url('applicant/recommendations'));
			}
			else
			{
				session()->setFlashdata('error', 'Error occurred!');
				return redirect()->to(base_url('applicant/recommendations'));
			}

	}

	public function recommendationacceptancerevoke($id)
	{
			$data = [
				'faccepted' => -2,
			];

			$recommendation = new RecommendationOfferModel();
			$updated = $recommendation->update($id, $data);
			if($updated > 0)
			{
				session()->setFlashdata('success', 'Acceptance revoked successfully');
				return redirect()->to(base_url('applicant/recommendations'));
			}
			else
			{
				session()->setFlashdata('error', 'Error occurred!');
				return redirect()->to(base_url('applicant/recommendations'));
			}

	}

	public function settings()
	{
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}

		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
		$data['applicants'] = $applicant->findAll();

		$applicant = new ApplicantModel();
        $data['applicant_details'] = $applicant->where('fuser_name', $username)->first();
		
		return view('applicant/settings', $data);
	}


	public function search()
	{
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}

		return view('applicant/search');
	}

	public function messagesinbox()
	{
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}

		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
		$data['applicants'] = $applicant->findAll();

		$applicant = new ApplicantModel();
		$data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

		$message = new MessageModel();
		$data['inbox'] = $message->where('freceiver_id', $applicant_id)->findAll();
		$data['inbox_count'] = count($data['inbox']);

		$data['sent'] = $message->where('fsender_id', $applicant_id)->findAll();
		$data['sent_count'] = count($data['sent']);

		
		//var_dump($data['inbox']);
		return view('applicant/messagesinbox', $data);
	}


	public function messagessent()
	{
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}

		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
		$data['applicants'] = $applicant->findAll();

		$applicant = new ApplicantModel();
		$data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

		$applicant_message = new MessageModel();
		$data['inbox'] = $applicant_message->where('freceiver_id', $applicant_id)->findAll();
		$data['inbox_count'] = count($data['inbox']);

		$data['sent'] = $applicant_message->where('fsender_id', $applicant_id)->findAll();
		$data['sent_count'] = count($data['sent']);

		
		//var_dump($data['inbox']);
		return view('applicant/messagessent', $data);
	}


	public function message($message_id)
	{
		if(!session()->username)
        {
            return redirect()->to(base_url('/login'));
		}
		
		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
		$data['applicants'] = $applicant->findAll();

		$data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

		//var_dump($this->request->getPost());
	
		$applicant_message = new MessageModel();
		$data['message'] = $applicant_message->where('fmessage_id', $message_id)->first();

		$data['inbox'] = $applicant_message->where('freceiver_id', $applicant_id)->findAll();
		$data['inbox_count'] = count($data['inbox']);

		$data['sent'] = $applicant_message->where('fsender_id', $applicant_id)->findAll();
		$data['sent_count'] = count($data['sent']);

		//var_dump($data['message']);

		return view('applicant/messagedetails', $data);
	}


	public function createmessageaction()
	{
		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
		$data['applicants'] = $applicant->findAll();

		$applicant = new ApplicantModel();
		$data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

		//var_dump($this->request->getPost());
	
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
		   
		  // var_dump($data);
            
		
		$applicant_message = new MessageModel();
		$applicant_message->insert($data);
		$inserted = $applicant_message->affectedRows();
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Message sent successfully');
			return redirect()->to(base_url('applicant/messages/inbox'));
		}
		else
		{
			session()->setFlashdata('error', 'Message not sent');
			return redirect()->to(base_url('applicant/messages/inbox'));
		}
	}



	public function replymessageaction()
	{
		// var_dump($this->request->getPost());
		$username = session()->username;

		$applicant_id = session()->applicant_id;

		$applicant = new ApplicantModel();
		$data['applicants'] = $applicant->findAll();

		$applicant = new ApplicantModel();
		$data['applicant_details'] = $applicant->where('fuser_name', $username)->first();

		$data = [

			'freceiver_id' => $this->request->getPost('receiver_id'),
			'freceiver_name' => $this->request->getPost('receiver_name'),
			'fsender_id' => $this->request->getPost('sender_id'),
			'fsender_name' => $this->request->getPost('sender_name'),
			'fmessage_id' => 'MG' . time(),
			'fparent_message_id' => $this->request->getPost('parent_message_id'),
			'fcontent' => $this->request->getPost('content'),
			'fsubject' => $this->request->getPost('subject'),
            
		   ];
		   
		  // var_dump($data);

		$applicant_message = new MessageModel();
		$applicant_message->insert($data);
		$inserted = $applicant_message->affectedRows();
		if($inserted > 0)
		{
			session()->setFlashdata('success', 'Message sent successfully');
			return redirect()->to(base_url('applicant/messages/inbox'));
		}
		else
		{
			session()->setFlashdata('error', 'Message not sent');
			return redirect()->to(base_url('applicant/messages/inbox'));
		}
	}

	public function getapplicantdetails()
	{
		$applicant_id = $this->request->getPost('applicant_id'); 

		$applicant = new ApplicantModel();
		$applicant_details = $applicant->where('fapplicant_id', $applicant_id)->first();

		//var_dump($this->request->getPost())


	
		$data = array(
			'applicant_details' =>	$applicant_details,
		);	

		return $this->response->setJSON($data);

			
	}


    public function logout()
	{
		session()->destroy();
		return redirect()->to(base_url('/'));
	}

}
	