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
    const TABLE = '`character`';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    /**
     * @return array
     */
    public function selectAll(): array
    {
        //TODO : Select all characters
    }

    /**
     * Get one row from database by ID.
     *
     * @param int $id
     *
     * @return array
     */
    public function selectOneById(int $id)
    {
        //TODO : Select one character by Id
    }
}
