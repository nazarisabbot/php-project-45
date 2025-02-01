<?php

namespace Hexlet\Code;

function getProgression(int $start, int $length, int $step): array
{
    $resArr = [];
    for ($i = 0; $i < $length; $i++) {
        $resArr[] = $start + $i * $step;
    }
    return $resArr;
}

function branProgression()
{
    $generateRound = function (): array {
        $start = rand(0, 12);
        $end = rand($start, 22);

        $arr = getProgression($start, $end);
        $index = rand(1, count($arr) - 1);

        $correctAnswer = (string)($arr[$index]);
        $arr[$index] = '..';

        $question = implode(" ", $arr);

        return [$question, $correctAnswer];
    };

    engine('What number is missing in the progression?', $generateRound);
}
