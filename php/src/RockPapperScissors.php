<?php declare(strict_types=1);

namespace Kata;

class RockPapperScissors
{
    public function move($player1Movement, $player2Movement)
    {
        if ($player1Movement === 'rock') {
            return 'player1';
        }

        if ($player1Movement === 'papper') {
            return 'player1';
        }

        return 'player2';
    }
}
