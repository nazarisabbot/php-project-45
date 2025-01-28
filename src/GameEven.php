<?php

namespace Hexlet\Code;

use function cli\line;
use function cli\prompt;

function brainEvenGame()
{
    $name = greeting();
    line('Answer "yes" if the number is even, otherwise answer "no".');

    $score = 0;

    while ($score < 3) {
        $randomDigit = rand(0, 100);
        line('Question: %s', $randomDigit);
        $answer = prompt('Your answer');

        // Проверка на некорректный ввод
        if ($answer !== 'yes' && $answer !== 'no') {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $answer, $randomDigit % 2 === 0 ? 'yes' : 'no');
            line('Let\'s try again, %s!', $name);
            break;
        }

        // Проверка правильности ответа
        $correctAnswer = $randomDigit % 2 === 0 ? 'yes' : 'no';

        if ($answer === $correctAnswer) {
            line('Correct!');
            $score++;

            if ($score === 3) {
                line('Congratulations, %s!', $name);
            }
        } else {
            line('"%s" is wrong answer ;(. Correct answer was "%s".', $answer, $correctAnswer);
            line('Let\'s try again, %s!', $name);
            break;
        }
    }
}
