<?php
/**
 * Created by PhpStorm.
 * User: Wolf
 * Date: 7/8/2016
 * Time: 14:26
 */


namespace CrazyFactory\Core\Interfaces;

use CrazyFactory\Core\Interfaces\Base\IClassBase;
use OutOfRangeException;
use CrazyFactory\Core\Exceptions\PropertyNotFoundException;

interface IModel extends IClassBase
{

    const PRIMARY_KEY = 'id';

    /**
     * @param string $name
     * @param mixed  $value
     *
     * @throws PropertyNotFoundException
     * @return mixed
     */
    public function setPropertyValue($name, $value);

    /**
     * @param string $name
     *
     * @throws PropertyNotFoundException
     * @return mixed
     */
    public function getPropertyValue($name);

    /**
     * @param string $name
     * @param mixed  $value
     *
     * @throws PropertyNotFoundException
     * @throws OutOfRangeException
     * @return mixed
     */
    public function isValidPropertyValue($name, $value);

    /**
     * @param bool $dirtyOnly
     *
     * @return array
     */
    public function extractData($dirtyOnly);

    /**
     * @param array $data
     *
     * @throws OutOfRangeException
     * @throws PropertyNotFoundException
     * @return void
     */
    public function applyData($data);

    /**
     * @return bool
     */
    public function isDirty();

    /**
     * @return bool
     */
    public function isValidated();

    /**
     * @param bool|null $bool
     *
     * @return bool
     */
    public function isValidatedOnChange($bool = null);

    /**
     * @return void
     */
    public function resetDirtyState();

    /**
     * @return void
     */
    public function resetInvalidationState();

    /**
     * @throws OutOfRangeException
     * @return void
     */
    public function validate();

    /**
     * @return bool
     */
    public function tryValidate();
}
