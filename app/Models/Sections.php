<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sections extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    public $fillable = ['title', 'body', 'comments'];

    public function subSection() 
    {
        return $this->hasMany(SubSections::class, 'section_id', 'id');
    }

    public function turntime()
    {
        return $this->belongsTo(TurnTimes::class);
    }
}
