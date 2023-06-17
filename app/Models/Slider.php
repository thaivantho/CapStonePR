<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Slider extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $guarded = [];

    public function getProduct(): HasOne
    {
        return $this->hasOne(Product::class, 'id');
    }
}
