<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patien extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function medicRecord(){
        return $this->hasMany(MedicRecord::class);
    }
    public function registration(){
        return $this->hasMany(Registration::class);
    }
}
