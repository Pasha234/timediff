<?php

declare(strict_types=1);

namespace Pasha234\TimeDiff;

use DateTime;
use DateInterval;
use DateTimeInterface;

class TimeDiff {
    private $currentTime;

    public function __construct(DateTimeInterface $currentTime = null) {
      $this->currentTime = $currentTime ?: new DateTime();
    }


    public function get($datetime) {
        if (!$datetime instanceof DateTimeInterface) {
            $datetime = new DateTime($datetime);
        }
        $interval = $this->currentTime->diff($datetime);

        $seconds = $this->getSeconds($interval);

        if ($seconds < 60) {
            if ($seconds == 1) {
                return $seconds . ' second ago';
            } else {
                return $seconds . ' seconds ago';
            }
        } elseif ($seconds < 3600) {
            $minutes = round($seconds / 60);
            if ($minutes == 1) {
                return $minutes . ' minute ago';
            } else {
                return $minutes . ' minutes ago';
            }
        } elseif ($seconds < 86400) {
            $hours = round($seconds / 3600);
            if ($hours == 1) {
                return $hours . ' hour ago';
            } else {
                return $hours . ' hours ago';
            }
        } else {
            $days = round($seconds / 86400);
            if ($days == 1) {
                return $days . ' day ago';
            } else {
                return $days . ' days ago';
            }
        }
    }

    private function getSeconds(DateInterval $interval): int
    {
        return ($interval->format('%a') * 24 * 60 * 60) +
            ($interval->format('%h') * 60 * 60) +
            ($interval->format('%i') * 60) +
            $interval->format('%s');
    }
}