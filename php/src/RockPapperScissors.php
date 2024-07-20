<?php declare(strict_types=1);

namespace Kata;

class RockPapperScissors
{
    public function move($player1Movement, $player2Movement): Players
    {
        if ($player1Movement === 'rock') {
            return Players::Player1;
        }

        if ($player1Movement === 'paper') {
            return Players::Player1;
        }

        return Players::Player2;

    }
}
