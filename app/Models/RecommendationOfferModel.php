<?php namespace App\Models;

use CodeIgniter\Model;

class RecommendationOfferModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'trecommendation_offers';
   
    protected $allowedFields = ['freceiver_id', 'freceiver_name', 'freceiver_job_title', 'fsender_id' , 'fsender_name', 'fsender_job_title', 'fmessage', 'fsubject', 'frelationship-position', 'frelationship', 'faccepted'];

}