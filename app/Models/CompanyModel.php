<?php namespace App\Models;

use CodeIgniter\Model;

class CompanyModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tcompanies';
   
    protected $allowedFields = ['fcompany_name', 'fcompany_id', 'fbranch_name', 'fcompany_address', 'fcompany_email', 'fphone', 'fpass_word', 'fwebsite', 'fstate', 'flga', 'fabout', 'flocations', 'fsocials', 'ftags'];

}