<?php declare(strict_types=1);
use Pasha234\TimeDiff\TimeDiff;
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testDiffOneDayAgo(): void
    {
        $timeDiff = new TimeDiff(DateTime::createFromFormat("d-m-Y H:i:s", "10-10-2020 00:00:00"));
        $this->assertEquals("1 day ago", $timeDiff->get('2020-10-11 00:00:00'));
    }

    public function testDiffTwoDaysAgo(): void
    {
        $timeDiff = new TimeDiff(DateTime::createFromFormat("d-m-Y H:i:s", "09-10-2020 00:00:00"));
        $this->assertEquals("2 days ago", $timeDiff->get('2020-10-11 00:00:00'));
    }

    public function testDiffOneHourAgo(): void
    {
        $timeDiff = new TimeDiff(DateTime::createFromFormat("d-m-Y H:i:s", "10-10-2020 00:00:00"));
        $this->assertEquals("1 hour ago", $timeDiff->get('2020-10-10 01:00:00'));
    }

    public function testDiffTwoHourAgo(): void
    {
        $timeDiff = new TimeDiff(DateTime::createFromFormat("d-m-Y H:i:s", "10-10-2020 00:00:00"));
        $this->assertEquals("2 hours ago", $timeDiff->get('2020-10-10 02:00:00'));
    }

    public function testDiffOneMinuteAgo(): void
    {
        $timeDiff = new TimeDiff(DateTime::createFromFormat("d-m-Y H:i:s", "10-10-2020 00:00:00"));
        $this->assertEquals("1 minute ago", $timeDiff->get('2020-10-10 00:01:00'));
    }

    public function testDiffTwoMinutesAgo(): void
    {
        $timeDiff = new TimeDiff(DateTime::createFromFormat("d-m-Y H:i:s", "10-10-2020 00:00:00"));
        $this->assertEquals("2 minutes ago", $timeDiff->get('2020-10-10 00:02:00'));
    }

    public function testDiffOneSecondAgo(): void
    {
        $timeDiff = new TimeDiff(DateTime::createFromFormat("d-m-Y H:i:s", "10-10-2020 00:00:00"));
        $this->assertEquals("1 second ago", $timeDiff->get('2020-10-10 00:00:01'));
    }

    public function testDiffTwoSecondsAgo(): void
    {
        $timeDiff = new TimeDiff(DateTime::createFromFormat("d-m-Y H:i:s", "10-10-2020 00:00:00"));
        $this->assertEquals("2 seconds ago", $timeDiff->get('2020-10-10 00:00:02'));
    }
}
