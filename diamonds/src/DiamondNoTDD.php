<?php

class DiamondNoTDD
{
    private $alphabetValues;

    public function __construct()
    {
        $this->alphabetValues = array_flip(range('A', 'Z'));
    }

    /**
     * @param string $letter
     * @return string
     */
    public function createDiamond($letter)
    {
        $halfDiamond = [];

        foreach ($this->alphabetValues as $alphabetLetter => $value) {
            $line = '';
            $line .= str_repeat(' ', ($value - $this->alphabetValues[$letter]) * (-1));
            $line .= $alphabetLetter;

            if ($alphabetLetter !== 'A') {
                $line .= str_repeat(' ', $value * 2 - 1);
                $line .= $alphabetLetter;
            }

            $halfDiamond[] = $line;

            if ($alphabetLetter === $letter) {
                break;
            }
        }

        $reverseHalfDiamond = array_reverse($halfDiamond);
        unset($reverseHalfDiamond[key($reverseHalfDiamond)]);

        return join(PHP_EOL, $halfDiamond) . PHP_EOL . join(PHP_EOL, $reverseHalfDiamond) . PHP_EOL;
    }
}
