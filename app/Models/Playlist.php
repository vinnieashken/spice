<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    //
    protected $table = 'radio_playlists';
    public $timestamps = false;
    protected $keyType = 'string';
    public $incrementing = false;
}
