<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productos extends Model
{
    use HasFactory;

    protected $table = "productos";

    protected $fillable = ['nombre','precio','impuesto','imagen','cantidad','create_at',];

    public function compras(){
    	return $this->belongsTo(Compras::class, 'id');
    }

    public function users(){
    	return $this->belongsTo(User::class, 'id');
    }
}
