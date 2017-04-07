<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tranfer extends Model
{
    protected $fillable = ['product_id','department_id','status'];
    public function product(){
        return $this->belongsTo(Product::class);
    }
    public function department(){
        return $this->belongsTo(Department::class);
    }
}
