<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function get_popular_vendors()
    {
        return $this->belongsTo(User::class,'vendor_id');
    }
}
