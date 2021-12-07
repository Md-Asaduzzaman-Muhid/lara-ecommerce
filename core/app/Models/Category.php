<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id'];
    public function subcategories()
    {
        return $this->hasMany(SubCategory::class)->orderBy('id','desc');
    }
}
