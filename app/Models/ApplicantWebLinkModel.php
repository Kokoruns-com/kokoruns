<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicantWebLinkModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tapplicant_weblinks';
   
    protected $allowedFields = ['ftitle', 'fweb_link', 'fapplicant_id', 'fuser_name'];

}