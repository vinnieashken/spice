<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
    protected $table = 'radio_videos';
    public $timestamps = false;
    protected $keyType = 'string';
    public $incrementing = false;
}
