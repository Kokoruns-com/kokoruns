<?php namespace App\Models;

use CodeIgniter\Model;

class CompanyVerificationEmailModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tcompany_verification_codes';
   
    protected $allowedFields = ['femail', 'ftoken', 'fcookie'];

}