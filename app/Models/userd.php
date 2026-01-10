<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class userd extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','email',
    ];
    public function postds(){
        return $this->hasMany(postd::class);
    }
}
