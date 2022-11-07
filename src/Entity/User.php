<?php
namespace App\Entity;

class User {

    private int $id;
    private string $fullname;
    private string $email;
    private string $password;
    private string $phone_number;
    private int $status;
    private bool $admin;
    private string $created_at;
    private string $updated_at;

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getFullName(): string
    {
        return $this->fullname;
    }

    public function setFullName(string $fullname)
    {
        $this->fullname = $fullname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    public function getPhoneNumber(): string
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(string $phone_number)
    {
        $this->phone_number = $phone_number;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status)
    {
        $this->status = $status;
    }

    public function getAdmin(): string
    {
        return $this->admin;
    }

    public function setAdmin(string $admin)
    {
        $this->admin = $admin;
    }

    public function getCreated_at(): string
    {
        return $this->created_at;
    }

    public function setCreated_at(string $created_at)
    {
        $this->created_at = $created_at;
    }
    public function getUpdated_at(): string
    {
        return $this->updated_at;
    }

    public function setUpdated_at(string $updated_at)
    {
        $this->updated_at = $updated_at;
    }
}