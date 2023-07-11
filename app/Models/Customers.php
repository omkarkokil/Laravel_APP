<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Customers extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "table_customers";
    protected $primaryKey = "customer_id";

    // Mutator 
    public function setNameAttribute($value)
    {
        $this->attributes['name'] = ucwords($value);
    }

    // Accessor 
    // public function getDOBAttribute($value)
    // {
    //     return date("M d,Y", strtotime($value));
    // }
}
