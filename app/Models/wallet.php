<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class wallet extends Model
{
    protected $table = 'wallets';
    //relation one many
    public function entries(){
        return $this->hasOne(entries::class);
    }
}
