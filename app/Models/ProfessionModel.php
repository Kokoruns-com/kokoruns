<?php namespace App\Models;

use CodeIgniter\Model;

class ProfessionModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tprofessions';
   
    protected $allowedFields = ['fname'];

}