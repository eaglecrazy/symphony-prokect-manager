<?php

declare(strict_types=1);

namespace App\Tests\Unit\Model\User\Entity\User\SIgnUp;

use App\Model\User\Entity\User\User;
use DateTimeImmutable;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class RequestTest extends TestCase
{
    public function testSuccess(): void
    {
        $user = new User(
            $id = Uuid::uuid4()->toString(),
            $date = new DateTimeImmutable(),
            $email = 'test@app.test',
            $hash = 'hash'
        );

        self::assertEquals($id, $user->getId());
        self::assertEquals($date, $user->getDate());
        self::assertEquals($email, $user->getEmail());
        self::assertEquals($hash, $user->getPasswordHash());
    }
}
