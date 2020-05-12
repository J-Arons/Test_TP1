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


}
