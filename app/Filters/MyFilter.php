<?php namespace App\Filters;

use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
use App\Models\ApplicantVerificationEmailModel;

class MyFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Do something here
        $check_verification = new ApplicantVerificationEmailModel();
		$check_details = $check_verification->where('fcookie', $_COOKIE["_krs"])->where('fverified', 0)->orderBy('frecno', 'desc')->first();

		if(!empty($check_details))
		{
			return redirect()->to(base_url('/register/verify/email'));
		}
    }

    //--------------------------------------------------------------------

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}