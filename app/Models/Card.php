<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'title', 'url', 'rate', 'img', 'flag', 'description'];

    protected $hidden = ['created_at', 'updated_at'];
}
