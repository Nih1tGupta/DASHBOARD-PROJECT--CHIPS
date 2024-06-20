<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Create extends Model
{
    use HasFactory;
    protected $table='creates';
    protected $fillable=[
        'name',
        'email',
        'mobile',
        'password'];
    
}
