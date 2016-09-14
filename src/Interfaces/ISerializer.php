<?php
/**
 * Created by PhpStorm.
 * User: fanat
 * Date: 08.07.2016
 * Time: 17:13
 */


namespace CrazyFactory\Core\Interfaces;

interface ISerializer
{

    /**
     * @param $input
     *
     * @return mixed
     */
    public function serialize($input);

    /**
     * @param $input
     *
     * @return mixed
     */
    public function restore($input);

    /**
     * @param $list
     *
     * @return mixed
     */
    public function serializeEach($list);

    /**
     * @param $list
     *
     * @return mixed
     */
    public function restoreEach($list);
}
