<?php

declare(strict_types=1);

namespace App\Domain\Models\Interfaces;

use Ramsey\Uuid\UuidInterface;

interface ExercisesInterface
{
    public function __construct(
        string $title,
        string $author,
        string $content,
        string $answer
    );

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface;

    /**
     * @return string
     */
    public function getTitle(): string;

    /**
     * @return string
     */
    public function getAuthor(): string;

    /**
    * @return string
    */
    public function getContent(): string;

    /**
     * @return string
     */
    public function getAnswer(): string;

    /**
     * @return int
     */
    public function getCreationDate(): int;

    /**
     * @return int
     */
    public function getLastReview(): int;

    /**
     * @param string $content
     */
    public function updateExercise(string $content);

    /**
     * @param string $answer
     */
    public function updateSolution(string $answer);
}