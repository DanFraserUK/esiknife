<?php

use \Carbon\Carbon;

if (!function_exists('age')) {
    function age(Carbon $start, Carbon $end)
    {
        $difference = $start->diff($end);
        $results = "";

        if ($difference->y != 0) {
            if ($difference->y > 1) {
                $results .= $difference->y."ys ";
            } else {
                $results .= $difference->y."y ";
            }
        }
        if ($difference->m != 0) {
            if ($difference->m > 1) {
                $results .= $difference->m."ms ";
            } else {
                $results .= $difference->m."m ";
            }
        }
        if ($difference->d != 0) {
            if ($difference->d > 1) {
                $results .= $difference->d."ds ";
            } else {
                $results .= $difference->d."d ";
            }
        }
        if ($results === "") {
            if ($difference->h != 0) {
                if ($difference->h > 1) {
                    $results .= $difference->h."hs ";
                } else {
                    $results .= $difference->h."h ";
                }
            }
            if ($difference->i != 0) {
                if ($difference->i > 1) {
                    $results .= $difference->i."ms ";
                } else {
                    $results .= $difference->i."m ";
                }
            }
            if ($difference->s != 0) {
                if ($difference->s > 1) {
                    $results .= $difference->s."ss ";
                } else {
                    $results .= $difference->s."s ";
                }
            }
        }
        return trim($results);
    }
}


if (!function_exists('num2rom')) {
    /**
    * Takes in a number and returns a roman numeral.
    *
    * Stole it from https://stackoverflow.com/questions/14994941/numbers-to-roman-numbers-with-php
    *
    * @param int $number
    * @return string $number
    */
    function num2rom(int $number) {
        $map = array('M' => 1000, 'CM' => 900, 'D' => 500, 'CD' => 400, 'C' => 100, 'XC' => 90, 'L' => 50, 'XL' => 40, 'X' => 10, 'IX' => 9, 'V' => 5, 'IV' => 4, 'I' => 1);
        $numeral = '';
        while ($number > 0) {
            foreach ($map as $roman => $int) {
                if($number >= $int) {
                    $number -= $int;
                    $numeral .= $roman;
                    break;
                }
            }
        }
        return $numeral;
    }
}
