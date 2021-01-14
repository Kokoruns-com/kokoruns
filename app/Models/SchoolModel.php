<?php namespace App\Models;

use CodeIgniter\Model;

class SchoolModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tschools';
   
    protected $allowedFields = ['fschool_name', 'fschool_id', 'fbranch_name', 'fschool_address', 'fschool_email', 'fphone', 'fpass_word', 'fwebsite', 'fstate', 'flga', 'fabout', 'flocations', 'fsocials', 'ftags'];

}