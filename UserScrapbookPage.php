<?php

namespace flipnstyle;

use Illuminate\Database\Eloquent\Model;

class UserScrapbookPage extends Model
{
    protected $table = 'user_scrapbookpages';
    protected $primaryKey =  'user_scrapbookpagesid';


     public function user_scrapbooks()
    {
		 return $this->belongsTo(UserScrapbook::class, 'user_scrapbookid');
    }

	 public function user_scrapbookpages()
    {
		 return $this->hasMany(UserPageElement::class, 'user_scrapbookpagesid');
    }



}
