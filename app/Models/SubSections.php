<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubSections extends Model
{
    use HasFactory;
    
    protected $connection = 'mysql2';

    public $fillable = ['title', 'body', 'comments'];

    public function section() 
    {
        return $this->belongsTo(Sections::class);
    }
}
