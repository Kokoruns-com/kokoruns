<?php namespace App\Models;

use CodeIgniter\Model;

class LGAModel extends Model
{
    protected $primaryKey = 'id';

    protected $table      = 'local_governments';
   
    //protected $allowedFields = ['ffirst_name', 'flast_name', 'femail', 'fpass_word','fuser_name', 'ftoken'];

}