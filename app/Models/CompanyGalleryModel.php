<?php namespace App\Models;

use CodeIgniter\Model;

class CompanyGalleryModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tcompany_gallery';
   
    protected $allowedFields = ['fimage', 'fimage_id', 'fcompany_id'];

}