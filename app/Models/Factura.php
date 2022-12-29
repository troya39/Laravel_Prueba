<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Factura extends Model
{
    use HasFactory, SoftDeletes;
    
    public $timestamps = false;
    
    protected $dates = ['deleted_at'];

    protected $table = "facturas";

    protected $fillable = ['user_id', 'compra_id', 'factura', 'status', 'created_at', 'update_at', 'deleted_at'];

    
    public function user(){
    	return $this->belongsTo(User::class, 'user_id');
    }

    public function compras(){
    	return $this->belongsTo(Compras::class, 'compra_id');
    }
}
