<?php

class StringCalculator
{
    public function calculate($expression)
    {

        $splittedMultiplyExpression = explode("*", $expression);
        $result = 1;

        if (count($splittedMultiplyExpression)>1) {
            foreach ($splittedMultiplyExpression as $number) {
                $result *= intval($number);
            }

            return $result;
        }

        $splittedPlusExpression = explode("+", $expression);
        $result = 0;

        if (count($splittedPlusExpression)>1) {
            foreach ($splittedPlusExpression as $number) {
                $result += intval($number);
            }

            return $result;
        }

        $splittedMinusExpression = explode("-", $expression);

        if (count($splittedMinusExpression)>1) {
            $result = $splittedMinusExpression[0];
            unset($splittedMinusExpression[0]);
            foreach ($splittedMinusExpression as $number) {
                $result -= intval($number);
            }

            return $result;
        }

        $splittedDivisionExpression = explode("/", $expression);

        if (count($splittedDivisionExpression)>1) {
            $result = $splittedDivisionExpression[0];
            unset($splittedDivisionExpression[0]);
            foreach ($splittedDivisionExpression as $number) {
                $result /= intval($number);
            }

            return $result;
        }

        return intval($expression);
    }
}
