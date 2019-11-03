<?php

namespace App\Game\Question;

interface QuestionInterface
{
    public function getLabel(): string;

    public function getId(): int;
}
