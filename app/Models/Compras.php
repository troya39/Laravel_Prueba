<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Compras extends Model
{
    use HasFactory, SoftDeletes;

    public $timestamps = false;
    
    protected $dates = ['deleted_at'];
    
    protected $table = "compras";

    protected $fillable = ['user_id', 'producto_id', 'precio', 'impuesto', 'status','created_at','update_at','deleted_at'];

    public function productos(){
    	return $this->belongsTo(productos::class, 'producto_id');
    }

    public function user(){
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function facturas(){
        return $this->belongsTo(Factura::class, 'id');
    }

}
