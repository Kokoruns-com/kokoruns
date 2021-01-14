<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicantMessageModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tapplicant_messages';
   
    protected $allowedFields = ['fsender_id', 'fsender_name', 'freceiver_id', 'freceiver_name', 'fsubject', 'fparent_message_id', 'fmessage_id', 'fcontent'];

}