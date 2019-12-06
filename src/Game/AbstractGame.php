<?php

namespace App\Game;

use App\Game\Question\QuestionInterface;

abstract class AbstractGame
{
    protected $nbQuestions;

    /** @var QuestionInterface[] */
    protected $questions = [];

    public function __construct(int $nbQuestions)
    {
        $this->nbQuestions = $nbQuestions;
    }


    /**
     * @return QuestionInterface[]
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    public abstract function getName(): string;
}
