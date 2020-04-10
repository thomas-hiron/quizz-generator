<?php

namespace App\Game;

class SoireeEnigmes extends AbstractGame
{
    private const DEFIS_DENFER = "Défis d'enfer";
    private const DEFIS_MATHEMATIQUES = 'Défis mathématiques';
    private const ENIGMES_DIABOLIQUES = 'Énigmes diaboliques';
    private const QUESTIONS_LOGIQUE = 'Questions de logique';

    public static function getAvailableQuestions(): array
    {
        return [
            self::DEFIS_DENFER,
            self::DEFIS_MATHEMATIQUES,
            self::ENIGMES_DIABOLIQUES,
            self::QUESTIONS_LOGIQUE,
        ];
    }

    public function getName(): string
    {
        return 'Soirée énigmes';
    }
}
