<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class entries extends Model
{
    protected $fillable = ['entries'];

    public function wallet(){
        return $this->belongsTo(wallet::class);
    }
}
