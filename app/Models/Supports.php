<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supports extends Model
{
    use HasFactory;

    public function users(){
        return $this->hasMany(User::class, 'id');
    }

    protected $fillable = ['title', 'body', 'user_id', 'status'];
}
