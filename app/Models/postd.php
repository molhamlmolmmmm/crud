<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postd extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','title','userd_id'
    ];
    public function userd(){
        return $this->belongsTo(userd::class);
    }
}
