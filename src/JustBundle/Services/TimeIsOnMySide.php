<?php
namespace JustBundle\Services;
//use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Created by PhpStorm
 * User: Whorthy
 * Date: O
 */

class TimeIsOnMySide
{
    public function getAge(\DateTime $dateTime)
    {
        $interval = $dateTime->diff(new \DateTime('now'));
        return $interval->y;
    }
}