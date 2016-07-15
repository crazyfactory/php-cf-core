<?php
/**
 * Created by PhpStorm.
 * User: fanat
 * Date: 15.07.2016
 * Time: 09:56
 */

namespace CrazyFactory\Core\Interfaces\Base;

interface IClassBase
{
    /**
     * @return string The fully qualified name of the class
     */
    static function className();
}