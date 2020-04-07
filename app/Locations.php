<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Locations extends Model
{
    //
    protected $fillable = [
        'atm_id', 'longitude', 'latitude', 'title', 'atm_type', 'kiosk_id', 'name', 'country', 'region', 'state', 'city', 'street', 'zip', 'location_image', 'slider_image_1', 'slider_image_2', 'slider_image_3', 'slider_image_4', 'slider_image_5', 'slider_image_6', 'zoom_level', 'monday_opening', 'monday_closing', 'tuesday_opening', 'tuesday_closing', 'wednesday_opening', 'wednesday_closing', 'thursday_opening', 'thursday_closing', 'friday_opening', 'friday_closing', 'saturday_opening', 'saturday_closing', 'sunday_opening', 'sunday_closing'
    ];
}
