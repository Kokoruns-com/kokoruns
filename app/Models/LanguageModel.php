<?php namespace App\Models;

use CodeIgniter\Model;

class LanguageModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tlanguages';
   
    protected $allowedFields = ['fname'];

}