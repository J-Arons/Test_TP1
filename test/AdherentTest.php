<?php

declare(strict_types=1);

use PHPUnit\Framework\TestCase;

class AdherentTest extends TestCase
{
    public function testCanBeCreatedFromValidMaterials(): void
    {
        $this->assertInstanceOf(
            Adherent::class,
            new Adherent('Jean','Dupont',new DateTime('2000-01-01'))
        );
    }

    public function testIsIdConcatenated(): void
    {
        $this->assertEquals(
            'JEANDUPONT2000-01-01',
            Adherent::concatenateId('Jean','Dupont',new DateTime('2000-01-01'))
        );
    }

    public function testIsAccentSkipped(): void
    {
        $this->assertEquals(
            'Helene',
            Adherent::skip_accents('Hélène')
        );
    }

}
