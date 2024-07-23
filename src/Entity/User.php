<?php

namespace App\Entity;

class User
{
    private ?int $id;
    private array $wallets = [];

    public function __construct()
    {
        $this->wallets[] = new Wallet();
    }

    public function getWallets(): array
    {
        return $this->wallets;
    }

    public function addWallet(Wallet $walletToAdd): self
    {
        $this->wallets[] = $walletToAdd;

        return $this;
    }
}