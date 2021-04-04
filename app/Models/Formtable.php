<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formtable extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'formtable';
    protected $fillable = ['name','surname','email','photo'];
}
