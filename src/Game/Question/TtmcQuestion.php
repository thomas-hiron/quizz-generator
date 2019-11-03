<?php

namespace App\Game\Question;

class TtmcQuestion extends AbstractQuestion
{
    private $level;

    public function __construct(string $label, int $level)
    {
        parent::__construct($label);

        $this->level = $level;
    }

    public function getLabel(): string
    {
        return parent::getLabel().' - '.$this->getLevel();
    }

    public function getLevel(): int
    {
        return $this->level;
    }
}
