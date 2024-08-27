<?php

namespace App\Entity;

class User
{
    private ?int $id;
    private array $wallets = [];

    public const EXCEPTION_MESSAGE_CANNOT_REMOVE_LAST_WALLET = 'Cannot remove the last wallet';

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

    public function removeWallet(Wallet $walletToRemove): self
    {
        if (count($this->wallets) === 1) {
            throw new \Exception(self::EXCEPTION_MESSAGE_CANNOT_REMOVE_LAST_WALLET);
        }

        $key = array_search($walletToRemove, $this->wallets, true);

        if ($key !== false) {
            unset($this->wallets[$key]);
        }

        return $this;
    }
}