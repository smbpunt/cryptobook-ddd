<?php

namespace App\Tests\User;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class NewUserTest extends TestCase
{
    private ?User $user;

    protected function setUp(): void
    {
        $this->user = new User();
    }

    public function testNewUserHasDefaultWallet(): void
    {
        $this->assertSame(1, count($this->user->getWallets()));
        $this->assertSame('default', $this->user->getWallets()[0]->getName());
    }
}