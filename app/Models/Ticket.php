<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    //private string $content;
    //private string $title;
    //private \DateTimeImmutable $creationTime;
    //private \DateTimeImmutable $lastModified;
    //private User $author;
    protected $fillable = [
        'title', 'content'
    ];

    public function replies()
    {
        return $this->hasMany('App\Model\Reply');
    }

    public function author()
    {
        return $this->belongsTo('App\Model\User');
    }
}
