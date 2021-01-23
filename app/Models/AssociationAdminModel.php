<?php namespace App\Models;

use CodeIgniter\Model;

class AssociationAdminModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tassociation_admins';
   
    protected $allowedFields = ['fassociation_id', 'fsubadmin_id', 'fsubadmin_name'];

}