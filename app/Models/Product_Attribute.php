<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product_Attribute extends Model
{
    use HasFactory;
    protected $fillable=['name','vender_id','updated_by'];
}
