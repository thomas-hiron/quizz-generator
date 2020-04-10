<?php

namespace App\Game;

class GameManager
{
    private $ttmc = false;
    private $trivialPursuit = false;
    private $combatDeCoqs = false;
    private $scienceEtVie = false;
    private $franceEnQuestions = false;
    private $aperoEnigmes = false;
    private $soireeEnigmes = false;

    /** @var GameInterface[] */
    private $games = [];
    private $players = [];

    public function generateGame(array $formData): void
    {
        $this->ttmc = isset($formData['ttmc']);
        $this->trivialPursuit = isset($formData['tp']);
        $this->combatDeCoqs = isset($formData['cc']);
        $this->scienceEtVie = isset($formData['sv']);
        $this->franceEnQuestions = isset($formData['fq']);
        $this->aperoEnigmes = isset($formData['ae']);
        $this->soireeEnigmes = isset($formData['se']);

        $this->players = array_filter([
            $formData['player_one'] ?? null,
            $formData['player_two'] ?? null,
            $formData['player_three'] ?? null,
            $formData['player_four'] ?? null,
            $formData['player_five'] ?? null,
            $formData['player_six'] ?? null,
        ]);

        $nbQuestions = $formData['nb_questions'];

        if ($this->ttmc) {
            $this->games[] = (new Ttmc($nbQuestions))->initGame();
        }

        if ($this->trivialPursuit) {
            $this->games[] = (new TrivialPursuit($nbQuestions))->initGame();
        }

        if ($this->combatDeCoqs) {
            $this->games[] = (new CombatDeCoqs($nbQuestions))->initGame();
        }

        if ($this->scienceEtVie) {
            $this->games[] = (new ScienceEtVie($nbQuestions))->initGame();
        }

        if ($this->franceEnQuestions) {
            $this->games[] = (new FranceEnQuestions($nbQuestions))->initGame();
        }

        if ($this->aperoEnigmes) {
            $this->games[] = (new AperoEnigmes($nbQuestions))->initGame();
        }

        if ($this->soireeEnigmes) {
            $this->games[] = (new SoireeEnigmes($nbQuestions))->initGame();
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
