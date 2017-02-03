<?php
namespace AppBundle\Service;
/**
 * Class UppercaseService
 * @author Yann Le Scouarnec <yann.le-scouarnec@hetic.net>
 * @package AppBundle\Service
 */
class UppercaseService
{
    public function ucase($string)
    {
        return strtoupper($string);
    }
}