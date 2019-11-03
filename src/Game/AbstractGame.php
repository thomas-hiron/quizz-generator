<?php

namespace App\Game;

use App\Game\Question\QuestionInterface;

abstract class AbstractGame
{
    /** @var QuestionInterface[] */
    protected $questions = [];

    /**
     * @return QuestionInterface[]
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    public abstract function getName(): string;
}
