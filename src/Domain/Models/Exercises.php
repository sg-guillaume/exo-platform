<?php

declare(strict_types=1);

namespace App\Domain\Models;

use App\Domain\Models\Interfaces\ExercisesInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Exercises
 * @package App\Domain\Models
 */
class Exercises implements ExercisesInterface
{
    /**
     * @var UuidInterface
     */
    private $id;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $author;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $answer;

    /**
     * @var int
     */
    private $creationDate;


    /**
     * @var int
     */
    private $lastReview;

    /**
     * Exercises constructor.
     * @param $title
     * @param $author
     * @param $content
     * @param $answer
     */
    public function __construct(
        string $title,
        string $author,
        string $content,
        string $answer
    ) {
        $this->id = Uuid::uuid4();
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
        $this->answer = $answer;
        $this->creationDate = time();
    }

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->answer;
    }

    /**
     * @return int
     */
    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    /**
     * @return int
     */
    public function getLastReview(): int
    {
        return $this->lastReview;
    }

    /**
     * @param string $content
     */
    public function updateExercise(string $content)
    {
        $this->content = $content;
        $this->lastreview = time();
    }

    /**
     * @param string $answer
     */
    public function updateSolution(string $answer)
    {
        $this->answer = $answer;
        $this->lastReview = time();
    }
}