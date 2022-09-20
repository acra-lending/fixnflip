<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TurnTimes extends Model
{
    use HasFactory;

    protected $connection = 'mysql2';

    public function section()
    {
        return $this->hasMany(Sections::class, 'turn_time_id');
    }

    public function subSection()
    {
        return $this->hasManyThrough(
            SubSection::class,
            Section::class,
            'turn_time_id',
            'section_id',
            'id',
            'id'
        );
    }
}
