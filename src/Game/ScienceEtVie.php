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

    public static function getAvailableQuestions(): array
    {
        return [
            self::CIEL_ESPACE,
            self::NATURE_ENVIRONNEMENT,
            self::CORPS_SANTE,
            self::TECHNOLOGIE_FUTUR,
            self::SCIENCE,
            self::CERVEAU_INTELLIGENCE,
        ];
    }


    public function getName(): string
    {
        return 'Science & Vie';
    }
}
