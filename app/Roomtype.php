<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Roomtype extends Model
{
    //
    protected $fillable = [
        'type_name', 'type_description', 'type_price','type_img1','type_img2','type_img3','type_img4','type_img5','type_adult','type_child','type_beds',
    ];
}
