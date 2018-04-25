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
 *
 */
class MovieManager extends AbstractManager
{
    const TABLE = 'movies';
    const CLASSE = 'Movie';

    /**
     *  Initializes this class.
     */
    public function __construct()
    {
        parent::__construct(self::TABLE, self::CLASSE);
    }
}
