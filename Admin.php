<?php


namespace flipnstyle;

use Illuminate\Database\Eloquent\Model;


class Admin extends Model
{
    protected $table = 'admins';
    protected $primaryKey =  'adminid';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'adminid', 'email', 'password','first_name','last_name'
    ];

    // public function getAvatarUrl()
    // {
    //     return "http://www.gravatar.com/avatar/" . md5(strtolower(trim($this->email))) . "?d=mm&s=40";
    // }

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
