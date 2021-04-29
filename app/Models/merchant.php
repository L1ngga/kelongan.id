<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class merchant extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'nama_merchant', 
        'address', 
        'id_users'
    ];
    
    protected $table = "merchant";
    protected $primaryKey = 'id';

    public function merchant(){
        return $this->belongsTo('App\Models\User', 'id', 'id_user');
    }
}
