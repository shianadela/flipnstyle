<?php

namespace flipnstyle;

use Illuminate\Database\Eloquent\Model;


class Designer extends Model
{
    protected $table = 'designers';
    protected $primaryKey =  'designer_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'designerid', 'email', 'password','first_name','last_name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
