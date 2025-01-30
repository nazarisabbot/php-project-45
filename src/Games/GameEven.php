<?php

namespace Hexlet\Code;

function brainEvenGame()
{
    $generateRound = function () {
        $question = rand(0, 100);
        $correctAnswer = $question % 2 === 0 ? 'yes' : 'no';
        return [$question, $correctAnswer];
    };

    engine('Answer "yes" if the number is even, otherwise answer "no".', $generateRound);
}
