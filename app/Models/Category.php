<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    // sambungkan model ini dengan table categories
    protected $table = "categories";

    protected $fillable = [
        'user_id',
        'name', // Tinggi Fundus Uteri
    ];

    public function user()
    {
        $this->belongsTo('App\Models\User', 'user_id');
    }
}
