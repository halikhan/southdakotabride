<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\book_Coach;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $fillable = [
        'name',
        'last_name',
        'email',
        'contact',
        'message',
        'bussinessCategory',
        'company',
        'password',
        'show_password',
        'type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];



    public function get_vednorbusinesscategory()
    {
        return $this->belongsTo(service::class, 'bussinessCategory');
    }

    public function get_user_rating()
    {
        return $this->hasMany(Rating::class,'vendor_id');
    }


    public function get_about_vendor()
    {
        return $this->hasMany(AboutVendor::class,'user_id');
    }

    public function get_user_ratingbyEvaluatoronprofile()
    {
        return $this->hasMany(ratinByEvaluator::class,'user_id');
    }






}
