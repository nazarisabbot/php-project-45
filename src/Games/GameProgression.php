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
        $length = rand(5, 10); // Гарантируем минимум 5 элементов
        $step = rand(2, 4);

        $arr = getProgression($start, $length, $step);
        $index = rand(0, count($arr) - 1); // Выбираем случайный элемент

        $correctAnswer = (string)$arr[$index];
        $arr[$index] = '..';

        $question = implode(" ", $arr);

        return [$question, $correctAnswer];
    };

    engine('What number is missing in the progression?', $generateRound);
}
