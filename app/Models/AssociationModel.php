<?php namespace App\Models;

use CodeIgniter\Model;

class   AssociationModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tassociations';
   
    protected $allowedFields = ['fassociation_name', 'fassociation_id', 'fbranch_name', 'fassociation_address', 'fassociation_email', 'fphone', 'fpass_word', 'fwebsite', 'fstate', 'flga', 'fabout', 'flocations', 'fsocials', 'ftags'];

}