<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 15/3/2561
 * Time: 4:01 น.
 */

namespace Suilven\Cricket\Tests;


use Suilven\Cricket\Models\Match;

class FixturesHelper
{
    public function getMatchSituation()
    {
        $match = new Match();
        return $match;
    }
}