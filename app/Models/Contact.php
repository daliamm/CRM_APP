<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact  extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'image', 'firstname','lastname', 'email', 'phone','job',  'education', 'address','city',
         'language', 'user_id',  'is_approved',];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}