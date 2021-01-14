<?php namespace App\Models;

use CodeIgniter\Model;

class JobInviteMessageModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tjob_invite_messages';
   
    protected $allowedFields = ['fjob_id', 'fjob_title', 'fapplicant_id', 'femployer_id', 'fapplicant_name', 'femployer_name', 'fmessage', 'fsubject', 'fsender_id', 'freceiver_id'];

}