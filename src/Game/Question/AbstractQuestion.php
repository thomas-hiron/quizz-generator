<?php


namespace App\Game\Question;


abstract class AbstractQuestion implements QuestionInterface
{
    private $label;
    private $id;

    public function __construct(string $label)
    {
        $this->label = $label;
        $this->id = rand(0, 100000);
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function getId(): int
    {
        return $this->id;
    }
}
