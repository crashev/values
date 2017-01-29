<?php

use GW\Value\Strings;

$text = Strings::create('You are looking good! Really!');

$replacer = function(array $matches): string {
    $vowel = $matches[0];

    switch ($vowel) {
        case 'a':
            return 'o';

        case 'o':
            return 'a';

        default:
            return 'i';
    }
};

echo $text->replacePatternCallback('/[aeiouy]/', $replacer)->toString();
