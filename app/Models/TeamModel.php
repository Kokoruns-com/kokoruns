<?php namespace App\Models;

use CodeIgniter\Model;

class TeamModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tteams';
   
    protected $allowedFields = ['fteam_name', 'fteam_id', 'fdescription', 'fprivacy', 'fadmin'];

}