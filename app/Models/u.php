<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class u extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','email'
    ];
    public function pro(){
        return $this->hasOne(pro::class,'u_id','id');
    }
}
