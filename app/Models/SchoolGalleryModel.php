<?php namespace App\Models;

use CodeIgniter\Model;

class SchoolGalleryModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tschool_gallery';
   
    protected $allowedFields = ['fimage', 'fimage_id', 'fschool_id'];

}