<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicantOtherSkillModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tapplicant_other_skills';
   
    protected $allowedFields = ['fskill', 'fapplicant_id', 'fuser_name'];

}