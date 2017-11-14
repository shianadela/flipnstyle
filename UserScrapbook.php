<?php

namespace flipnstyle;

use Auth;

use Illuminate\Database\Eloquent\Model;

class UserScrapbook extends Model
{
    protected $table = 'user_scrapbooks';
    protected $primaryKey =  'user_scrapbookid';
    

    public function users()
    {
		 return $this->belongsToMany(User::class, 'user_scrapbookid');
    }

    public function scrapbookpages()
    {

    	return $this->hasMany(UserScrapbookPage::class, 'scrapbookpagesid');
    }
}
