<?php

namespace flipnstyle;

// use App\Scrapbook;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $primaryKey =  'id';

    protected $fillable = [
        'email', 'password','first_name','last_name'
    ];

    // *
    //  * The attributes that should be hidden for arrays.
    //  *
    //  * @var array
     
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_scrapbooks()
    {
        return $this->hasMany(UserScrapbook::class,'user_scrapbookid');
    }

}
