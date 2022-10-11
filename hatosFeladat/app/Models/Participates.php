<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participates extends Model
{
    use HasFactory;

    protected $primaryKey='participate_id';

    protected $fillable = [
        'user_id',
        'event_id',
        'present'
    ];

}
