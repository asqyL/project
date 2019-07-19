<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //Get children category
    public function children() {
        return $this->hasMany(self::class, 'parent_id');

    }
}
