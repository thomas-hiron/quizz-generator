<?php

namespace App\Game;

class GameManager
{
    private $ttmc = false;
    private $combatDeCoqs = false;
    private $scienceEtVie = false;

    /** @var GameInterface[] */
    private $games = [];
    private $players = [];

    public function generateGame(array $formData): void
    {
        $this->ttmc = isset($formData['ttmc']);
        $this->combatDeCoqs = isset($formData['cc']);
        $this->scienceEtVie = isset($formData['sv']);

        $this->players = array_filter([
            $formData['player_one'] ?? null,
            $formData['player_two'] ?? null,
            $formData['player_three'] ?? null,
            $formData['player_four'] ?? null,
        ]);

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

    public function getPlayers(): array
    {
        return $this->players;
    }
}
