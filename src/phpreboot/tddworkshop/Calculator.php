<?php
/**
 * Created by PhpStorm.
 * User: nitesh
 * Date: 21/6/18
 * Time: 4:17 PM
 */

namespace phpreboot\tddworkshop;

/**
 * Class Calculator
 * @package phpreboot\tddworkshop
 */
class Calculator
{
    /**
     * @param string $numbers
     * @return int
     */
    public function add($numbers = '')
    {
        if (empty($numbers)) {
            return 0;
        }
        $numbersArray = explode(",", $numbers);
        return array_sum($numbersArray);
    }

}