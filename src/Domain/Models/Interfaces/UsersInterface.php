<?php

declare(strict_types=1);

namespace App\Domain\Models\Interfaces;


use Ramsey\Uuid\UuidInterface;

interface UsersInterface
{
    public function __construct(
        string $firstname,
        string $lastname,
        string $email,
        string $password
    );

    /**
     * @return UuidInterface
     */
    public function getId(): UuidInterface;

    /**
     * @return string
     */
    public function getFirstname(): string;

    /**
     * @return string
     */
    public function getLastname(): string;

    /**
     * @return string
     */
    public function getRole(): string;

    /**
     * @return int
     */
    public function getCreationDate(): int;

    /**
     * @return string
     */
    public function getEmail(): string;

    /**
     * @return string
     */
    public function getPassword(): string;

    /**
     * @param string $email
     */
    public function updateEmail(string $email);

    /**
     * @param string $role
     */
    public function updateRole(string $role);

    /**
     * @param string $password
     */
    public function updatePassword(string $password);
}