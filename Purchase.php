<?php

namespace flipnstyle;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    protected $table = 'purchases';
    protected $primaryKey =  'purchase_id';
}
