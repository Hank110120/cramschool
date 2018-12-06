<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_license', 'user_id', 'name', 'phone', 'slogan', 'address', 'url',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];
}
