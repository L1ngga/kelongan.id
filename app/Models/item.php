<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    use HasFactory;

    protected $fillable = [
        'id', 
        'nama_items', 
        'picture', 
        'type', 
        'deskription',
        'price',
        'stock'
    ];
    protected $table = "items";
    protected $primaryKey = "id"; 

    public function item(){
        return $this->belongsTo('App\Models\Merchant', 'id', 'id_merchant');
    }
}