<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicantProSkillModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tapplicant_pro_skills';
   
    protected $allowedFields = ['fskill', 'fapplicant_id', 'fuser_name'];

}