<?php

namespace App\Tests\Iterator;

use DateTimeImmutable;

class PersonModel
{
    public function __construct(
        private string $name,
        private DateTimeImmutable $birthday
    ) {}

    /**
     * Get the value of name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of birthday
     */
    public function getBirthday(): DateTimeImmutable
    {
        return $this->birthday;
    }

    /**
     * Set the value of birthday
     */
    public function setBirthday(DateTimeImmutable $birthday): self
    {
        $this->birthday = $birthday;

        return $this;
    }
}
