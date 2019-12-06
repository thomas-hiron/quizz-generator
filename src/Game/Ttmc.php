<?php

namespace App\Game;

use App\Game\Question\TtmcQuestion;

class Ttmc extends AbstractGame
{
    private const IMPROBABLE = 'Improbable';
    private const MATURE = 'Mature';
    private const PLAISIR = 'Plaisir';
    private const SCOLAIRE = 'Scolaire';
    private const HESITE_PAS_A_GAGNER = 'Hésite pas à gagner';

    private const AVAILABLE_QUESTIONS = [
        self::IMPROBABLE,
        self::MATURE,
        self::PLAISIR,
        self::SCOLAIRE,
        self::HESITE_PAS_A_GAGNER,
    ];

    public function initGame(): AbstractGame
    {
        $availableQuestions = self::AVAILABLE_QUESTIONS;
        shuffle($availableQuestions);
        $availableQuestions = array_splice($availableQuestions, 0, $this->nbQuestions);

        foreach ($availableQuestions as $question) {
            $this->questions[] = new TtmcQuestion(
                $question,
                $this->getLevel()
            );
        }

        return $this;
    }

    /**
     * 60% de niveau 4, 30% de niveau 5 et 10% de niveau 6
     */
    public function getLevel(): int
    {
        $rand = rand(0, 100);

        if ($rand < 60) {
            return 4;
        }

        if ($rand < 90) {
            return 5;
        }

        return 6;
    }

    public function getName(): string
    {
        return 'Tu te mets combien ?';
    }
}
