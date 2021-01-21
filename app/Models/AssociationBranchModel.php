<?php namespace App\Models;

use CodeIgniter\Model;

class   AssociationBranchModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tassociation_branches';
   
    protected $allowedFields = ['fassociation_id', 'fbranch_id', 'fbranch_name', 'fbranch_manager', 'fbranch_address', 'fbranch_email', 'fbranch_phone'];

}