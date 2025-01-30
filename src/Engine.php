<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function engine(string $conditions, callable $generateRound): void
{
    $name = greeting();
    line($conditions);

    $score = 0;

    while ($score < 3) {
        [$question, $correctAnswer] = $generateRound();

        line('Question: %s', $question);
        $answer = prompt('Your answer');

        if ($answer === $correctAnswer) {
            line('Correct!');
            $score++;

            if ($score === 3) {
                line('Congratulations, %s!', $name);
            }
        }

        if ($correctAnswer !== $answer) {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $answer, $correctAnswer);
            line('Let\'s try again, %s!', $name);
            break;
        }
    }
}
