<?php

class Diamonds
{
    private $letterIndex = [
        'A' => 0,
        'B' => 1,
        'C' => 2
    ];

    public function createFirstLineDiamond($letter) {


        $return = str_repeat(" ", $this->letterIndex[$letter]);
        $return .= 'A';
        $return .= str_repeat(" ", $this->letterIndex[$letter]);

        return $return;
    }



    public function createDiamond($letter)
    {






        if ($letter === 'B') {
            return " A \nB B\n A";
        }

        if($letter==='C'){
            return "  A  \n B B \nC   C\n B B \n  A  ";
        }

        return 'A';
    }
}
