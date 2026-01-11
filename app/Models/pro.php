<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pro extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','title'
    ];
    public function u(){
        return $this->belongsTo(u::class);
    }
}
