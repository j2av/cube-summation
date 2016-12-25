<?php

use App\Summation;

class SummationTest extends TestCase
{

    public function testEval()
    {
        $summation = new Summation();
        $input = array("2", "4 5", "UPDATE 2 2 2 4", "QUERY 1 1 1 3 3 3",
         "UPDATE 1 1 1 23", "QUERY 2 2 2 4 4 4", "QUERY 1 1 1 3 3 3", "2 4",
         "UPDATE 2 2 2 1", "QUERY 1 1 1 1 1 1", "QUERY 1 1 1 2 2 2",
         "QUERY 2 2 2 2 2 2");
        $result = $summation->eval($input);
        $this->assertEquals(6, count($result));
        $expected = array(4, 4, 27, 0, 1, 1);
        for ($i = 0; $i < 6; $i++) {
            $this->assertEquals($result[$i], $expected[$i]);
        }
    }
}
