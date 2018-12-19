<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class File extends Model
{
    protected $fillable = ['file'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
    public function file()
    {
        return $this->belongsTo('App\File');
    }
}
