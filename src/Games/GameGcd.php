<?php

namespace Hexlet\Code;

function getGcd(int $a, int $b): int
{
    if ($b === 0) {
        return $a;
    }

    return getGcd($b, $a % $b);
}

function braingcd(): void
{
    $generateRound = function (): array {
        $firstNumber = rand(1, 50);
        $secondNumber = rand(1, 50);

        $question = "{$firstNumber} {$secondNumber}";
        $correctAnswer = (string)(getGcd($firstNumber, $secondNumber));

        return [$question, $correctAnswer];
    };

    engine('Find the greatest common divisor of given numbers.', $generateRound);
}
