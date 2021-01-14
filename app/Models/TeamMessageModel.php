<?php namespace App\Models;

use CodeIgniter\Model;

class TeamMessageModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tteam_messages';
   
    protected $allowedFields = ['fteam_id', 'fsender_id', 'fsender_name', 'fsender_text_colour', 'fmessage'];

}