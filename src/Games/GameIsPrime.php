<?php

namespace Hexlet\Code;

function isPrime(int $n): bool
{
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}

function brainIsPrime(): void
{
    $generateRound = function (): array {
        $question = rand(0, 150);
        $correctAnswer = isPrime($question) === true ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    engine('Answer "yes" if given number is prime. Otherwise answer "no".', $generateRound);
}
