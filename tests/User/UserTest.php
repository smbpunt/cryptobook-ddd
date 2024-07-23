<?php

namespace App\Tests\User;

use App\Entity\User;
use App\Entity\Wallet;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    private ?User $user;

    protected function setUp(): void
    {
        $this->user = new User();
    }

    public function testCanAddNewWallet(): void
    {
        $walletName = 'wallet1';
        $walletToAdd = new Wallet($walletName);
        $nbWalletsBeforeAdd = count($this->user->getWallets());

        $this->user->addWallet($walletToAdd);

        $this->assertSame($nbWalletsBeforeAdd + 1, count($this->user->getWallets()));
        $this->assertSame($walletName, $this->user->getWallets()[count($this->user->getWallets()) - 1]->getName());
    }
}