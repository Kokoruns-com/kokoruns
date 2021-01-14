<?php namespace App\Models;

use CodeIgniter\Model;

class JobModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tjobs';
   
    protected $allowedFields = ['fjob_id', 'fjob_title', 'femployer_name', 'femployer_id', 'fjob_group', 'flocation_state', 'flocation_lga', 'fworkdays', 'fwork_time_start', 'fwork_time_end', 'femployment_type', 'feducational_qualification', 'fjob_description'];

}