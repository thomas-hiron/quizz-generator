<?php

namespace App\Game;

class GameManager
{
    private $ttmc = false;
    private $combatDeCoqs = false;
    private $scienceEtVie = false;

    /** @var GameInterface[] */
    private $games = [];

    public function generateGame(array $formData): void
    {
        $this->ttmc = isset($formData['ttmc']);
        $this->combatDeCoqs = isset($formData['cc']);
        $this->scienceEtVie = isset($formData['sv']);

        if ($this->ttmc) {
            $this->games[] = (new Ttmc())->initGame();
        }

        if ($this->combatDeCoqs) {
            $this->games[] = (new CombatDeCoqs())->initGame();
        }

        if ($this->scienceEtVie) {
            $this->games[] = (new ScienceEtVie())->initGame();
        }
    }

    /**
     * Renvoie tous les jeux pour afficher les questions
     */
    public function getGames(): array
    {
        return $this->games;
    }
}
