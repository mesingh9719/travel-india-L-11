<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DLVerify extends Model
{
    use HasFactory;
     
    protected $fillable = [
        'user_id',
        'dl_number',
        'dl_image'
    ];
}
