<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicantVerificationEmailModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tapplicant_verification_codes';
   
    protected $allowedFields = ['femail', 'ftoken', 'fcookie', 'fdevice'];

}