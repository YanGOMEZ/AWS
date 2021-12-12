<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    use HasFactory;
    protected $table='movimiento';
    public $timestamps=true;
    protected $fillable=['id','created_at','updated_at','movimiento','usuario_id'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

}
