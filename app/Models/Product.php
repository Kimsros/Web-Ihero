<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable=['name','qty','price_in','price_out','product_attribute_id','product_low_quatity','product_expire_date','categories_id','vender_id','updated_by'];
}
