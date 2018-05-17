<?php

declare(strict_types=1);

namespace App\Domain\Models;

use App\Domain\Models\Interfaces\UsersInterface;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\UuidInterface;


/**
 * Class Users
 * @package App\Domain\Models
 */
class Users implements UsersInterface
{
    /**
     * @var UuidInterface
     */
    private $id;

    /**
     * @var string
     */
    private $firstname;

    /**
     * @var string
     */
    private $lastname;

    /**
     * @var string
     */
    private $role;

    /**
     * @var int
     */
    private $creationDate;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;


    /**
     * Users constructor.
     * @param string $firstname
     * @param string $lastname
     * @param string $email
     * @param string $password
     */
    public function __construct(
        string $firstname,
        string $lastname,
        string $email,
        string $password
    )  {
        $this->id = Uuid::uuid4();
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->password = $password;
        $this->role;
        $this->creationDate = time();
        $this->email = $email;
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
    public function getFirstname(): string
    {
        return $this->firstname;
    }

    /**
     * @return string
     */
    public function getLastname(): string
    {
        return $this->lastname;
    }

    /**
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }

    /**
     * @return int
     */
    public function getCreationDate(): int
    {
        return $this->creationDate;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $email
     */
    public function updateEmail(string $email)
    {
        $this->email = $email;
    }

    /**
     * @param string $role
     */
    public function updateRole(string $role)
    {
        $this->role = $role;
    }

    /**
     * @param string $password
     */
    public function updatePassword(string $password)
    {
        $this->password = $password;
    }

}