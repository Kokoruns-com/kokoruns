<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicantModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tapplicants';
   
    protected $allowedFields = ['ffirst_name', 'flast_name', 'fapplicant_id', 'femail', 'fpass_word','fuser_name', 'ftoken', 'fphone', 'femail', 'fdob', 'faddress', 'fgender', 'fmarital_status', 'fdisabled', 'feducational_qualification', 'fother_professions1', 'fother_professions2', 'fother_professions3', 'fother_professions4', 'flanguages1', 'flanguages2', 'flanguages3', 'flanguages4', 'flanguages5', 'fcurrent_employer', 'fpreferred_job1', 'fpreferred_job2', 'fpreferred_job3', 'fpreferred_job4', 'fpreferred_job_location_state', 'fpreferred_job_location_lga', 'fprofession', 'favailability_start_date', 'fminimum_salary', 'femployment_type', 'feducational_qualification', 'factive', 'fstate', 'flga', 'fprofile_image', 'fbackground_image', 'ftext_colour', 'fcookie'];

}