<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class profile extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','title'
    ];
    public function userp(){
        return $this->belongsTo(userp::class);
    }
}
