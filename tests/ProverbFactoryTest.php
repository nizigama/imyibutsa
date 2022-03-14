<?php

declare(strict_types=1);

namespace Nizigama\Imyibutsa\Tests;

use Nizigama\Imyibutsa\ProverbFactory;
use PHPUnit\Framework\TestCase;

class ProverbFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_proverb()
    {

        $proverbs = [
            "Uwushaka umuce acika ijoro.",
            "Uwushaka umubira abira akuya.",
            "Akari kure karya nyene amaguru.",
            "Uwushaka akeza aragahebera."
        ];

        $factory = new ProverbFactory();

        $proverb = $factory->getRandomProverb();

        $this->assertContains($proverb, $proverbs);
    }
}
