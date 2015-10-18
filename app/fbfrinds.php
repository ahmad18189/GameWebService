<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fbfrinds extends Model
{
    protected $fillable = ['fb_id'];

    public function scopeFirst3($query)
    {
        $query->where('id','<=',3);
    }
}
