<?php namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tevents';
   
    protected $allowedFields = ['ffrom', 'fto', 'ftitle', 'finvitees', 'fauthor', 'fdescription', 'fevent_id'];

}