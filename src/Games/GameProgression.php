<?php

namespace Hexlet\Code;

function getProgression(int $start, int $end): array
{
    $resArr = [];
    $separator = rand(2, 4);

    if (($end - $start) < 10) {
        $start = 0;
        $end = 15;
    }

    for ($i = $start; $i <= $end; $i += $separator) {
        $resArr[] = $i;
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
