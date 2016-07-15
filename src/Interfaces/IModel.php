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

	const PRIMARY_KEY = "id";

	/**
	 * @param string $name
	 * @param mixed  $value
	 *
	 * @throws PropertyNotFoundException
	 * @return mixed
	 */
	function setPropertyValue($name, $value);

	/**
	 * @param string $name
	 *
	 * @throws PropertyNotFoundException
	 * @return mixed
	 */
	function getPropertyValue($name);

	/**
	 * @param string $name
	 * @param mixed  $value
	 *
	 * @throws PropertyNotFoundException
	 * @throws OutOfRangeException
	 * @return mixed
	 */
	function isValidPropertyValue($name, $value);

	/**
	 * @param bool $dirtyOnly
	 *
	 * @return array
	 */
	function extractData($dirtyOnly);

	/**
	 * @param array $data
	 *
	 * @throws OutOfRangeException
	 * @throws PropertyNotFoundException
	 * @return void
	 */
	function applyData($data);

	/**
	 * @return bool
	 */
	function isDirty();

	/**
	 * @return bool
	 */
	function isValidated();

	/**
	 * @param bool|null $bool
	 *
	 * @return bool
	 */
    function isValidatedOnChange($bool = null);

	/**
	 * @return void
	 */
	function resetDirtyState();

	/**
	 * @return void
	 */
	function resetInvalidationState();

	/**
	 * @throws OutOfRangeException
	 * @return void
	 */
	function validate();

	/**
	 * @return bool
	 */
	function tryValidate();
}