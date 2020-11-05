<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    use HasFactory;

    private string $content;
    private \DateTimeImmutable $creationTime;
    private \DateTimeImmutable $lastModified;
    private User $author;

    public function author()
    {
        return $this->belongsTo('App\Model\User');
    }

    public function ticket()
    {
        return $this->belongsTo('App\Model\Ticket');
    }
}
