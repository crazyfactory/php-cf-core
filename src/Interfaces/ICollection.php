<?php

namespace CrazyFactory\Core\Interfaces;

use CrazyFactory\Core\Interfaces\Base\IClassBase;

interface ICollection extends IClassBase
{

    /**
     * @param IModel|IModel[] $listOrModel
     *
     * @return mixed The primary key of the last added object.
     */
    public function add($listOrModel);

    /**
     * @param IModel|IModel[] $listOrModel
     *
     * @return int Amount of actually updated items.
     */
    public function update($listOrModel);

    /**
     * @param IModel|IModel[] $listOrModel
     *
     * @return mixed Amount of actually removed items.
     */
    public function remove($listOrModel);


    /**
     * @return int Number of matching items.
     */
    public function count();
}
