<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function medicRecord(){
        return $this->hasMany(MedicRecord::class);
    }
    public function registration(){
        return $this->hasMany(Registration::class);
    }
    public function practiceSchedule(){
        return $this->hasMany(PracticeSchedule::class);
    }
}
