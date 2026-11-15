<?php declare(strict_types=1);
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmail(): void
    {
        $address = 'user@example.com';

        $email = Email::fromString($address);

        $this->assertInstanceOf(Email::class, $email);
        $this->assertSame($address, $email->asString());
        $this->assertStringContainsString('@', $email->asString());
    }
        #[DataProvider('validEmailProvider')]
    public function testCanBeCreatedFromVariousValidEmails(string $address): void
    {
        $email = Email::fromString($address);

        $this->assertSame($address, $email->asString());
    }

    public static function validEmailProvider(): array
    {
        return [
            'titik di nama' => ['andi.resti@example.com'],
            'angka'         => ['user123@example.com'],
            'subdomain'     => ['user@mail.example.com'],
            'tanda plus'    => ['andi+resti@example.com'],
        ];
    }
}