<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 15/3/2561
 * Time: 4:16 น.
 */

namespace Suilven\Cricket\Models;


class BowlingFigures
{
    /** @var init */
    public $overs;

    /** @var int The number of balls in the over, e.g. 2 in 4.2 means 2 deliveries bowled */
    public $ballsInOver;

    /** @var int The number of maidens */
    public $maidens;

    /** @var int the number of runs */
    public $runs;

    /** @var int the number of wickets */
    public $wickets;

    /** @var int number of wides */
    public $wides;

    /** @var int number of noballs */
    public $noballs;

    /** @var int number of fours */
    public $fours;

    /** @var int number of sixes */
    public $sixes;

}