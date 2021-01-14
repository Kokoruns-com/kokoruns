<?php namespace App\Models;

use CodeIgniter\Model;

class AssociationGalleryModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tassociation_gallery';
   
    protected $allowedFields = ['fimage', 'fimage_id', 'fassociation_id'];

}