<?php

namespace App\Game;

class AperoEnigmes extends AbstractGame
{
    private const QUELLE_FAMILLE = 'Quelle famille !';
    private const CASSE_TETE = 'Casse-tête';
    private const MOT_MYSTERE = 'Mot mystère';
    private const SPECIAL_CALCULS = 'Spécial calculs';
    private const CEST_LOGIQUE = "C'est logique !";

    public static function getAvailableQuestions(): array
    {
        return [
            self::QUELLE_FAMILLE,
            self::CASSE_TETE,
            self::MOT_MYSTERE,
            self::SPECIAL_CALCULS,
            self::CEST_LOGIQUE,
        ];
    }

    public function getName(): string
    {
        return 'Apéro énigmes';
    }
}
