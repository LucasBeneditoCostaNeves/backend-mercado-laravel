<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carts extends Model
{
    use HasFactory;
    use HasUuids;

    protected $table = 'carts';

    protected $fillable = [
        'id',
        'name',
        'email',
        'image',
        'category',
        'price',
        'user_id'
    ];
}
