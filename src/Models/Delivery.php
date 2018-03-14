<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 15/3/2561
 * Time: 3:50 น.
 */

namespace Suilven\Cricket\Models;


class Delivery
{
    /** @var int Number of runs off the delivery */
    public $runs = 0;

    /** @var Batsman */
    public $striker;

    /** @var Batsman */
    public $nonStriker;

    /** @var Bowler */
    public $bowler;

    /** @var int Timestamp in UTC */
    public $timestamp;
}