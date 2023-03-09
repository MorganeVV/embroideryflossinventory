<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dmc extends Model
{
    // use HasFactory;

    protected $table = "dmc_floss";
    protected $primaryKey = "number";
    protected $keyType = "string";

    public $timestamps = false;
}
