<?php

namespace App\Game;

class TrivialPursuit extends AbstractGame
{
    private const HISTOIRE = 'Histoire';
    private const GEOGRAPHIE = 'Géographie';
    private const ARTS_ET_LITTERATURE = 'Arts et littérature';
    private const SPORTS_ET_LOISIRS = 'Sports et loisirs';
    private const DIVERTISSEMENTS = 'Divertissements';
    private const SCIENCES_ET_NATURE = 'Sciences et nature';

    public static function getAvailableQuestions(): array
    {
        return [
            self::HISTOIRE,
            self::GEOGRAPHIE,
            self::ARTS_ET_LITTERATURE,
            self::SPORTS_ET_LOISIRS,
            self::DIVERTISSEMENTS,
            self::SCIENCES_ET_NATURE,
        ];
    }


    public function getName(): string
    {
        return 'Trivial Pursuit';
    }
}
