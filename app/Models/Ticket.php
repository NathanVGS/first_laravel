<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    private string $content;
    private \DateTimeImmutable $creationTime;
    private \DateTimeImmutable $lastModified;
    private User $author;

}
