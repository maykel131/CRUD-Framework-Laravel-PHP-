<?php

namespace sistema\Model;

use Illuminate\Database\Eloquent\Model;

class pruevaModel extends Model
{
    protected $table = "usuario";
    public $primaryKey = "id";
    
     protected $fillable = ['nombre', 'apellido'];

     public $timestamps = false;
}
