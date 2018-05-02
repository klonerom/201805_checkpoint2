<?php
/**
 * Created by PhpStorm.
 * User: sylvain
 * Date: 07/03/18
 * Time: 18:20
 * PHP version 7
 */

namespace Model;

/**
 * Class CharacterManager
 * @package Model
 */
class CharacterManager extends AbstractManager
{
    const TABLE = 'character';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }
}
