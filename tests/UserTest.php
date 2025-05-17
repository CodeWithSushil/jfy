<?php declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;
use App\User;

#[CoversClass(User::class)]
class UserTest extends TestCase
{
    private User $user;
    protected function setUp(): void
    {
        $this->user = new User();
    }

    #[Test]
    public function testName(): void
    {
        $this->assertSame('sk', $this->user->name('sk'));
    }
}
