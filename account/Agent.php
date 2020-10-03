<?php

class Agent
{
    private $user_id = 0;
    private $email = "";
    private $first_name = "";
    private $last_name = "";
    private $phone = "";
    private $address = "";
    private $city = "";

    public function __construct(int $user_id, string $email, string $first_name, string $last_name, string $phone, string $address, string $city)
    {
        $this->user_id = $user_id;
        $this->email = $email;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->phone = $phone;
        $this->address = $address;
        $this->city = $city;
    }
    public function getUserId(): int
    {
        return $this->user_id;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

}