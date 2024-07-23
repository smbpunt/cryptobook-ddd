<?php

namespace App\Entity;

class Wallet
{
    private ?int $id;
    private string $name;

    public function __construct(string $name = 'default')
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}