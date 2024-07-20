<?php declare(strict_types=1);

namespace KataTests;

use Kata\RockPapperScissors;
use PHPUnit\Framework\TestCase;

class RockPaperScissorsTest extends TestCase
{
    /** @test */
    public function given_player_1_have_chosen_rock_when_player_2_chooses_scissors_then_player_1_win(): void
    {
        $game = new RockPapperScissors();

        self::assertEquals('player1', $game->move('rock','scissors'));
    }

    /** @test */
    public function given_player_2_have_chosen_rock_when_player_1_chooses_scissors_then_player_2_win(): void
    {
        $game = new RockPapperScissors();

        self::assertEquals('player2', $game->move('scissors','rock'));
    }

    /** @test */
    public function given_player_1_have_chosen_papper_when_player_2_chooses_rock_then_player_1_win(): void
    {
        $game = new RockPapperScissors();

        self::assertEquals('player1', $game->move('papper','rock'));
    }
}
