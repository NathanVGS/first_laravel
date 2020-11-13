<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    protected $fillable = [
        'content'
    ];

    public function author()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function ticket()
    {
        return $this->belongsTo('App\Model\Ticket');
    }
}
