<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicRecord extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function doctor(){
        return $this->belongsTo(Doctor::class);
    }
    public function patien(){
        return $this->belongsTo(Patien::class);
    }
}
