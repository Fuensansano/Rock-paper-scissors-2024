<?php declare(strict_types=1);

namespace Kata;

class RockPapperScissors
{
    public function move($player1Movement, $player2Movement): Players
    {
        if (($player1Movement === Movements::SCISSORS && $player2Movement === Movements::SCISSORS)) {
            return Players::Draw;
        }

        if ($this->hasPlayer1Win($player1Movement, $player2Movement)) {
            return Players::Player1;
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

        return $winnerMovements[$movementPlayer1->value] === $movementPlayer2;
    }
}
