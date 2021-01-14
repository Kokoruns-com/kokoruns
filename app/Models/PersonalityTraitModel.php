<?php namespace App\Models;

use CodeIgniter\Model;

class PersonalityTraitModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table  = 'tpersonality_traits';
   
    protected $allowedFields = ['freceiver_id', 'fsender_id', 'fgeneral_impression', 'fhonesty_integrity', 'fproactive_dedicated', 'fadaptable', 'fteam_oriented', 'frespectable'];

}

