<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;
    protected $table = 'Menu';
    protected $primaryKey = 'id';
    protected $fillable = ['kantin_id','name', 'price'];

    public function kantins(){
        return $this->belongsTo(Kantin::class, 'kantin_id', 'id');
    }
}
