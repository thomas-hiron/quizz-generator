<?php

namespace App\Game;

use App\Game\Question\BasicQuestion;

class ScienceEtVie extends AbstractGame
{
    private const CIEL_ESPACE = 'Ciel & espace';
    private const NATURE_ENVIRONNEMENT = 'Nature & environnement';
    private const CORPS_SANTE = 'Corps & santé';
    private const TECHNOLOGIE_FUTUR = 'Technologie & futur';
    private const SCIENCE = 'Science & culture';
    private const CERVEAU_INTELLIGENCE = 'Cerveau & intelligence';

    private const AVAILABLE_QUESTIONS = [
        self::CIEL_ESPACE,
        self::NATURE_ENVIRONNEMENT,
        self::CORPS_SANTE,
        self::TECHNOLOGIE_FUTUR,
        self::SCIENCE,
        self::CERVEAU_INTELLIGENCE,
    ];

    public function initGame(): AbstractGame
    {
        $questions = self::AVAILABLE_QUESTIONS;
        shuffle($questions);

        foreach (array_splice($questions, 0, $this->nbQuestions) as $question) {
            $this->questions[] = new BasicQuestion($question);
        }

        return $this;
    }

    public function getName(): string
    {
        return 'Science & Vie';
    }
}
