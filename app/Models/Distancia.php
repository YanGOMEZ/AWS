<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distancia extends Model
{
    use HasFactory;
    protected $table='distancia';
    public $timestamps=true;
    protected $fillable=['id','created_at','updated_at','distancia','usuario_id'];


    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
