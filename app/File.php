<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    protected $fillable = ['path', 'name'];

    public function challenge()
    {
        return $this->belongsTo('App\Challenge');
    }
}
