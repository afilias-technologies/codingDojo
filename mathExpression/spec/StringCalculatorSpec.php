<?php

namespace spec;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class StringCalculatorSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('StringCalculator');
    }

    function it_should_return_0_when_i_pass_0()
    {
        $this->calculate("0")->shouldReturn(0);
    }

    function it_should_return_1_when_i_pass_1()
    {
        $this->calculate("1")->shouldReturn(1);
    }

    function it_should_return_2_when_i_pass_2()
    {
        $this->calculate("2")->shouldReturn(2);
    }

    function it_should_return_2_when_i_pass_1_plus_1()
    {
        $this->calculate("1+1")->shouldReturn(2);
    }

    function it_should_return_4_when_i_pass_2_plus_2()
    {
        $this->calculate("2+2")->shouldReturn(4);
    }

    function it_should_return_6_when_i_pass_3_plus_3()
    {
        $this->calculate("3+3")->shouldReturn(6);
    }

    function it_should_return_3_when_i_pass_1_plus_1_plus_1()
    {
        $this->calculate("1+1+1")->shouldReturn(3);
    }

    function it_should_return_6_when_i_pass_2_plus_2_plus_2()
    {
        $this->calculate("2+2+2")->shouldReturn(6);
    }

    function it_should_return_9_when_i_pass_3_plus_3_plus_3()
    {
        $this->calculate("3+3+3")->shouldReturn(9);
    }

    function it_should_return_4_when_i_pass_1_plus_1_plus_1_plus_1()
    {
        $this->calculate("1+1+1+1")->shouldReturn(4);
    }

    function it_should_return_1_when_i_pass_1_times_1()
    {
        $this->calculate("1*1")->shouldReturn(1);
    }

    function it_should_return_4_when_i_pass_2_times_2()
    {
        $this->calculate("2*2")->shouldReturn(4);
    }

    function it_should_return_9_when_i_pass_3_times_3()
    {
        $this->calculate("3*3")->shouldReturn(9);
    }

    function it_should_return_16_when_i_pass_4_times_4()
    {
        $this->calculate("4*4")->shouldReturn(16);
    }

    function it_should_return_0_when_i_pass_1_minus_1()
    {
        $this->calculate("1-1")->shouldReturn(0);
    }

    function it_should_return_1_when_i_pass_2_minus_1()
    {
        $this->calculate("2-1")->shouldReturn(1);
    }

    function it_should_return_2_when_i_pass_3_minus_1()
    {
        $this->calculate("3-1")->shouldReturn(2);
    }

    function it_should_return_0_when_i_pass_2_minus_2()
    {
        $this->calculate("2-2")->shouldReturn(0);
    }

    function it_should_return_2_when_i_pass_4_minus_2()
    {
        $this->calculate("4-2")->shouldReturn(2);
    }

    function it_should_return_1_when_i_pass_1_over_1()
    {
        $this->calculate("1/1")->shouldReturn(1);
    }

    function it_should_return_1_when_i_pass_2_over_2()
    {
        $this->calculate("2/2")->shouldReturn(1);
    }



}
