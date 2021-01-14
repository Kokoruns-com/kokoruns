<?php namespace App\Models;

use CodeIgniter\Model;

class TeamMemberModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tteam_members';
   
    protected $allowedFields = ['fapplicant_id', 'fapplicant_name', 'fteam_id', 'fis_active'];

}