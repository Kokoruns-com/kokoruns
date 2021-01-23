<?php namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $primaryKey = 'frecno';

    protected $table      = 'tevents';
   
    protected $allowedFields = ['ffrom', 'fto', 'ftitle', 'finvitees', 'fauthor', 'fdescription', 'fevent_id', 'fevent_address', 'fevent_state', 'fevent_lga', 'fevent_price1', 'fevent_price2', 'fevent_image1', 'fevent_image2', 'fevent_image3', 'fevent_image4', 'fevent_image5', 'fevent_image6'];

}