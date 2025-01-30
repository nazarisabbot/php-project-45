<?php

namespace Hexlet\Code;

function calc(int $a, string $o, int $b)
{
    return match ($o) {
        '+' => (string)($a + $b),
        '-' => (string)($a - $b),
        '*' => (string)($a * $b),
        default => 'Error: Unknown operator',
    };
}

function brainCalcGame()
{
    $generateRound = function () {

        $operators = ['+', '-', '*'];
        $firstNum = rand(1, 5);
        $secondNum = rand(1, 5);
        $operator = $operators[array_rand($operators)];


        $question = "{$firstNum} {$operator} {$secondNum}";
        $correctAnswer = calc($firstNum, $operator, $secondNum);

        return [$question, $correctAnswer];
    };

    engine('What is the result of the expression?', $generateRound);
}
