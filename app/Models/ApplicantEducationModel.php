<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicantEducationModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tapplicant_educations';
   
    protected $allowedFields = ['fapplicant_id', 'fuser_name','fschool', 'fstart', 'fend', 'fcourse','fclass_of_degree', 'fskills_learned'];

}