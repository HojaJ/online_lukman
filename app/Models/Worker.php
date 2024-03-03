<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'category_id',
        'working_hours_start',
        'working_hours_end',
        'image'
    ];

    public function category() {
        return $this->belongsTo(Category::class);
    }
}
