<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false; //disable Eloquent from using timestamp
    protected $table = 'orders';
    protected $fillable = ['tax','service_charge', 'reference_no', 'is_walkin', 'status'];
}
