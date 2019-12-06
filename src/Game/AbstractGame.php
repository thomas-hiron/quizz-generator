<?php

namespace App\Game;

use App\Game\Question\BasicQuestion;
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
     * Generate all basic questions. Can be overriden.
     */
    public function initGame(): AbstractGame
    {
        $questions = static::getAvailableQuestions();
        shuffle($questions);

        foreach (array_splice($questions, 0, $this->nbQuestions) as $question) {
            $this->questions[] = new BasicQuestion($question);
        }

        return $this;
    }

    /**
     * @return QuestionInterface[]
     */
    public function getQuestions(): array
    {
        return $this->questions;
    }

    public abstract static function getAvailableQuestions(): array;

    public abstract function getName(): string;
}
