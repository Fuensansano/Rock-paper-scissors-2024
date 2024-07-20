<?php declare(strict_types=1);

namespace Kata;

class RockPapperScissors
{
    public function move($player1Movement, $player2Movement): Players
    {

        if ($player2Movement === Movements::PAPER) {
            return Players::Player2;
        }

        if ($player1Movement === Movements::ROCK) {
            return Players::Player1;
        }

        if ($player1Movement === Movements::PAPER) {
            return Players::Player1;
        }

        return Players::Player2;

    }
}
