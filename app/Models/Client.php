<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'cliente';

   // public $timestamps = false;

    protected $guarded = [];

    protected $attributes = [
        'state' => 1,
    ];
}
