<?php

namespace flipnstyle;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $table = 'cards';
    protected $primaryKey =  'cardnumber';
}
