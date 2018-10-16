<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
    public $table = 'category';

    public function products(){
    	return $this->hasToMany('App\Products');
    }
}
