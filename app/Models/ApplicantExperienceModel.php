<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicantExperienceModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tapplicant_experiences';
   
    protected $allowedFields = ['fapplicant_id', 'fuser_name','fposition', 'fstart', 'fend', 'fcompany_name','frole'];

}