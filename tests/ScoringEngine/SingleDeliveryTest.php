<?php
/**
 * Created by PhpStorm.
 * User: gordon
 * Date: 15/3/2561
 * Time: 4:00 น.
 */

namespace Suilven\Cricket\Tests\ScoringEngine;


use PHPUnit\Framework\TestCase;
use Suilven\Cricket\Tests\FixturesHelper;

class SingleDeliveryTest extends TestCase
{
    private $match;

    public function setUp()
    {
        $helper = new FixturesHelper();
        $this->match = $helper->getMatchSituation();
    }

    public function tearDown()
    {
        $this->match = null;
    }

    public function test_one_run()
    {
        
    }
}