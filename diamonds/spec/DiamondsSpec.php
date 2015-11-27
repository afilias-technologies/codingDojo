<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DiamondsSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Diamonds');
    }

    function it_should_return_A_when_i_pass_A()
    {
        $this->createDiamond('A')->shouldReturn('A');
    }

    function it_should_return_ABBA_diamond_when_i_pass_B()
    {
        $this->createDiamond('B')->shouldReturn(" A \nB B\n A");
    }

    function it_should_return_ABBCCBBA_diamond_when_i_pass_C()
    {
        $this->createDiamond('C')->shouldReturn("  A  \n B B \nC   C\n B B \n  A  ");
    }

    function it_should_return_A_when_we_put_A_in_first_line(){
        $this->createFirstLineDiamond('A')->shouldReturn("A");
    }

    function it_should_return_a_when_we_put_b_in_first_line(){
        $this->createFirstLineDiamond('B')->shouldReturn(" A ");
    }

    function it_should_return_SSASS_in_the_first_line_when_we_put_C(){
        $this->createFirstLineDiamond('C')->shouldReturn("  A  ");
    }
    function it_should_return_BsB_in_the_second_line_when_we_put_B(){
        $this->createSecondLineDiamond('C')->shouldReturn("  A  ");
    }

}
