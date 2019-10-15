<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
     protected $table ='galeri';

    	protected $fillable = ['id','nama', 'keterangan', 'path','users_id' ];
}
