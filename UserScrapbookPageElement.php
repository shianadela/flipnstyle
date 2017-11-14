<?php

namespace flipnstyle;

use Illuminate\Database\Eloquent\Model;

class UserScrapbookPageElement extends Model
{
    protected $table = 'user_scrapbookpageelements';
    protected $primaryKey =  'user_scrapbookpageelementid';
    
     public function user_scrapbookpages()
    {
         return $this->belongsTo(UserScrapbookPage::class, 'user_scrapbookpageid');
    }
}
