<?php

namespace App\Game;

use App\Game\Question\BasicQuestion;

class CombatDeCoqs extends AbstractGame
{
    private const MUSIQUE = 'Musique';
    private const CINEMA = 'Cinéma';
    private const SPORT = 'Sport';
    private const MEDIA = 'Média';
    private const MODE = 'Mode';
    private const GASTRONOMIE = 'Gastronomie';

    private const HISTOIRE = 'Histoire';
    private const GEO = 'Géographie';
    private const LANGUE = 'Langue française';
    private const LITTERATURE = 'Littérature';
    private const ECONOMIE = 'Économie';
    private const ART = 'Art';

    public static function getAvailableQuestions(): array
    {
        return [
            self::MUSIQUE,
            self::CINEMA,
            self::SPORT,
            self::MEDIA,
            self::MODE,
            self::GASTRONOMIE,

            self::HISTOIRE,
            self::GEO,
            self::LANGUE,
            self::LITTERATURE,
            self::ECONOMIE,
            self::ART,
        ];
    }

    public function getName(): string
    {
        return 'Combat de Coqs';
    }
}
