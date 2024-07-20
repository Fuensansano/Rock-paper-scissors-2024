<?php declare(strict_types=1);

namespace KataTests;

use Kata\Movements;
use Kata\Players;
use Kata\RockPapperScissors;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\Attributes\Test;
use PHPUnit\Framework\TestCase;

class RockPaperScissorsTest extends TestCase
{
    private RockPapperScissors $game;

    protected function setUp(): void
    {
        $this->game = new RockPapperScissors();
    }

    public static function gameProvider() :\Generator
    {
        yield 'given_player_1_have_chosen_rock_when_player_2_chooses_scissors_then_player_1_win' => [Movements::ROCK, Movements::SCISSORS, Players::Player1];
        yield 'given_player_1_have_chosen_paper_when_player_2_chooses_rock_then_player_1_win' => [Movements::PAPER, Movements::ROCK, Players::Player1];
        yield 'given_player_1_have_chosen_rock_when_player_1_chooses_paper_then_player_2_win' => [Movements::ROCK, Movements::PAPER, Players::Player2];
        yield 'given_player_1_have_chosen_scissors_when_player_2_chooses_rock_then_player_2_win' => [Movements::SCISSORS, Movements::ROCK, Players::Player2];
        yield 'given_player_1_have_chosen_scissors_when_player_2_chooses_paper_then_player_1_win' => [Movements::SCISSORS, Movements::PAPER, Players::Player1];
    }

    #[Test]
    #[DataProvider('gameProvider')]
    public function given_the_player1_movement_and_the_player2_movement_one_of_them_should_win(Movements $movementPlayer1, Movements $movementPlayer2, Players $winner): void
    {
        self::assertEquals($winner, $this->game->move($movementPlayer1,$movementPlayer2));
    }

}
