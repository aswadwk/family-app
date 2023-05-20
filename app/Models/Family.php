<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;

    // protected $with = ['parent'];

    protected $fillable = [
        'name',
        'gender',
        'parent_id',
    ];

    public function parent()
    {
        return $this->belongsTo(Family::class, 'parent_id');
    }
}
