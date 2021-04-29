<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{
    use HasFactory;

    protected $fillable = [
        'id_items', 
        'nama_items', 
        'qty', 
        'total_price', 
        'id_merchant',
        'name_merchant'
    ];
    protected $table = "transaksi";
    protected $primaryKey = "id"; 

    public function item(){
        return $this->belongsTo('App\Models\User', 'id', 'id_user');
    }
}