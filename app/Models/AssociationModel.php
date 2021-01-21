<?php namespace App\Models;

use CodeIgniter\Model;

class   AssociationModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tassociations';
   
    protected $allowedFields = ['fassociation_name', 'fassociation_id', 'fcac', 'fbranch_name', 'fassociation_address', 'fassociation_email', 'fassociation_contact_email', 'fphone', 'fpass_word', 'fwebsite', 'fstate', 'flga', 'fabout', 'flocations', 'fmain_office_location_state', 'fmain_office_location_lga', 'ffacebook', 'flinkedin', 'finstagram', 'ftags', 'ffield', 'fverified'];

}