<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    private string $content;
    private string $title;
    private \DateTimeImmutable $creationTime;
    private \DateTimeImmutable $lastModified;
    private User $author;

    public function replies()
    {
        return $this->hasMany('App\Model\Reply');
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getCreationTime(): \DateTimeImmutable
    {
        return $this->creationTime;
    }

    /**
     * @param \DateTimeImmutable $creationTime
     */
    public function setCreationTime(\DateTimeImmutable $creationTime): void
    {
        $this->creationTime = $creationTime;
    }

    /**
     * @return \DateTimeImmutable
     */
    public function getLastModified(): \DateTimeImmutable
    {
        return $this->lastModified;
    }

    /**
     * @param \DateTimeImmutable $lastModified
     */
    public function setLastModified(\DateTimeImmutable $lastModified): void
    {
        $this->lastModified = $lastModified;
    }

    /**
     * @return User
     */
    public function getAuthor(): User
    {
        return $this->author;
    }

    /**
     * @param User $author
     */
    public function setAuthor(User $author): void
    {
        $this->author = $author;
    }

}
