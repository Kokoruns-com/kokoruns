<?php namespace App\Models;

use CodeIgniter\Model;

class JobFinalChoiceModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tjob_selected_candidates';
   
    protected $allowedFields = ['fjob_id', 'fjob_title', 'fapplicant_id', 'femployer_id', 'fapplicant_name', 'femployer_name', 'fstatus', 'fsender_id', 'freceiver_id'];

}