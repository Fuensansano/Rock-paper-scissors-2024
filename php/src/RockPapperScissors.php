<?php declare(strict_types=1);

namespace Kata;

class RockPapperScissors
{
    public function move($player1Movement, $player2Movement): Players
    {

        if ($this->hasPlayer1Win($player1Movement, $player2Movement)) {
            return Players::Player1;
        }

        if (($this->isADraw($player1Movement, $player2Movement))) {
            return Players::Draw;
        }

        return Players::Player2;
    }

    private function hasPlayer1Win($movementPlayer1, $movementPlayer2): bool
    {
        $winnerMovements = [
            Movements::ROCK->value => Movements::SCISSORS,
            Movements::SCISSORS->value => Movements::PAPER,
            Movements::PAPER->value => Movements::ROCK,
        ];

        return $this->isADraw($winnerMovements[$movementPlayer1->value], $movementPlayer2);
    }

    public function isADraw($player1Movement, $player2Movement): bool
    {
        return $player1Movement === $player2Movement;
    }
}
