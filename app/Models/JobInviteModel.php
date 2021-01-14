<?php namespace App\Models;

use CodeIgniter\Model;

class JobInviteModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tjob_invites';
   
    protected $allowedFields = ['fjob_id', 'fjob_title', 'fapplicants_id', 'femployer_id', 'femployer_name'];

}