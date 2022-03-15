<?php

declare(strict_types=1);

namespace Nizigama\Imyibutsa;

class ProverbFactory{

    /** @var string[] */
    protected $proverbs = [
        "Uwushaka umuce acika ijoro.",
        "Uwushaka umubira abira akuya.",
        "Akari kure karya nyene amaguru.",
        "Uwushaka akeza aragahebera."
    ];

    public function getRandomProverb(): string{
        return $this->proverbs[array_rand($this->proverbs)];
    }
}
