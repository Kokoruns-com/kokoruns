<?php namespace App\Models;

use CodeIgniter\Model;

class ApplicantPortfolioModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tapplicant_portfolios';
   
    protected $allowedFields = ['fimage', 'fapplicant_id', 'fuser_name'];

}