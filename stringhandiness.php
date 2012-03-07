<?php

/**
 * Here you can put in a list of strings, and they will be analyzed if they are written with left and or right hand.
 * You can also provide a parameter on CLI like this:
 *   # php handiness.php MySuperPassword
 * or
 *   # php handiness.php strings.txt
 * with a file path, one string per line.
 *
 *
 * @author Michael Kliewe
 * @copyright 2012 Michael Kliewe
 * @license http://www.opensource.org/licenses/bsd-license.php BSD License
 * @link http://www.phpgangsta.de/
 */

$strings = array(
    'password',
    '123456',
    'facebook1',
    'PHPGangsta',
    'passwort',
    '12345678',
    'Michael',
    'Kliewe',
    'Z13mL1chKr455esPa55W0rT'
);

if ($argc == 2 && !empty($argv[1])) {
    if (is_file($argv[1])) {
        $strings = file($argv[1], FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    } else {
        $strings = array($argv[1]);
    }
}

$leftHand = '123456qwertasdfgyxcvb^°!"§$%&<>';
$rightHand = '7890ߴzuiopü+hjklöä#nm,.-/()=?`\'_:;@';

echo "\nThis is a small script to calculate the handiness of strings.\n1 means left hand only, -1 means right hand only.\n\n";
echo str_pad('String', 30) . "\tValue\n";
echo str_repeat('=', 40) . "\n";

foreach ($strings as $string) {
    $string = strtolower($string);

    $leftCharacters = 0;
    $rightCharacters = 0;

    $characters = str_split($string);

    foreach ($characters as $char) {
        if (strpos($leftHand, $char) !== false) {
            $leftCharacters++;
        } elseif (strpos($rightHand, $char) !== false) {
            $rightCharacters++;
        } else {
            echo "Unknown character found: $char\n";
        }
    }

    echo str_pad($string, 30) . "\t" . round(($leftCharacters-$rightCharacters)/strlen($string), 2) . "\n";
}

echo "\nDone. (C) by Michael Kliewe\n";