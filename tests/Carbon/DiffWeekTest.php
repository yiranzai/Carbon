<?php


namespace Tests\Carbon;


use Carbon\Carbon;
use Tests\AbstractTestCase;

class DiffWeekTest extends AbstractTestCase

{
    public function testDiffWeekTest()
    {
        $dtOne = Carbon::createFromDate(2020, 1, 7);
        $dtTwo = Carbon::createFromDate(2019, 12, 24);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo), 3);

        $dtOne = Carbon::createFromDate(2010, 1, 7);
        $dtTwo = Carbon::createFromDate(2009, 12, 29);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo), 2);

        $dtOne = Carbon::createFromDate(2010, 1, 7);
        $dtTwo = Carbon::createFromDate(2009, 12, 29);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 2), 3);

        $dtOne = Carbon::createFromDate(2010, 1, 7);
        $dtTwo = Carbon::createFromDate(2009, 12, 29);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 3), 3);

        $dtOne = Carbon::createFromDate(2010, 1, 7);
        $dtTwo = Carbon::createFromDate(2009, 12, 29);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 4), 3);

        $dtOne = Carbon::createFromDate(2010, 1, 7);
        $dtTwo = Carbon::createFromDate(2009, 12, 29);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 5), 2);

        $dtOne = Carbon::createFromDate(2010, 1, 7);
        $dtTwo = Carbon::createFromDate(2009, 12, 29);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 6), 2);

        $dtOne = Carbon::createFromDate(2010, 1, 7);
        $dtTwo = Carbon::createFromDate(2009, 12, 29);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 7), 2);



        $dtOne = Carbon::createFromDate(2010, 1, 13);
        $dtTwo = Carbon::createFromDate(2009, 12, 31);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo), 3);

        $dtOne = Carbon::createFromDate(2010, 1, 13);
        $dtTwo = Carbon::createFromDate(2009, 12, 31);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 2), 3);

        $dtOne = Carbon::createFromDate(2010, 1, 13);
        $dtTwo = Carbon::createFromDate(2009, 12, 31);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 3), 3);

        $dtOne = Carbon::createFromDate(2010, 1, 13);
        $dtTwo = Carbon::createFromDate(2009, 12, 31);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 4), 2);

        $dtOne = Carbon::createFromDate(2010, 1, 13);
        $dtTwo = Carbon::createFromDate(2009, 12, 31);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 5), 3);

        $dtOne = Carbon::createFromDate(2010, 1, 13);
        $dtTwo = Carbon::createFromDate(2009, 12, 31);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 6), 3);

        $dtOne = Carbon::createFromDate(2010, 1, 13);
        $dtTwo = Carbon::createFromDate(2009, 12, 31);
        $this->assertSame($dtOne->diffInSpanWeeks($dtTwo, 7), 3);
    }
}
