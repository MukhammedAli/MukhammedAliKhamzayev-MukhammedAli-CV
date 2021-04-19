<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactResponse extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'contact_responses';
    protected $fillable = ['id_new','contactEmail','contactSubject','contactMessage','contactImage'];
    public function info()
    {
        return $this->belongsTo('App\ContactInfo');
    }
}
