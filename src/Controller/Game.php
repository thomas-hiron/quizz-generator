<?php

namespace App\Controller;

use App\Game\GameManager;

class Game extends AbstractController
{
    public function new(): void
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $_SESSION['game'] = $_POST;

            header('Location: /game/play');
            return;
        }

        $this->render('game/new.html.twig');
    }

    public function play(): void
    {
        if (!isset($_SESSION['game'])) {
            header('Location: /game/new');

            return;
        }

        $gameManager = new GameManager();
        $gameManager->generateGame($_SESSION['game']);

        $this->render('game/play.html.twig', [
            'games' => $gameManager->getGames(),
            'players' => $gameManager->getPlayers(),
        ]);
    }
}
