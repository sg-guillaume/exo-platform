<?php
declare(strict_types=1);



namespace App\Domain\Models;

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;

/**
 * Class Exercise
 * @package App\Domain\Models
 */
class Exercise
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
    private $lastreview;

    /**
     * Exercise constructor.
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
     * @param string $content
     * @param string $answer
     */
    public function updateExercise(
        string $content,
        string $answer
    )   {
        $this->content = $content;
        $this->answer = $answer;
        $this->lastreview = time();
    }


}