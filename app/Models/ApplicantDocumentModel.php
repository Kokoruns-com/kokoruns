<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicantDocumentModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tapplicant_documents';
   
    protected $allowedFields = ['ffile_name', 'fapplicant_id', 'fuser_name'];

}