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
    public function selectAll() :array
    {
        return $this->pdoConnection->query('SELECT * FROM '.$this->table , \PDO::FETCH_ASSOC)->fetchAll();
    }

    /**
     * Get one row from database by ID.
     *
     * @param  int $id
     *
     * @return array
     */
    public function selectOneById(int $id)
    {
        // prepared request
        $statement = $this->pdoConnection->prepare("
SELECT $this->table.id, $this->table.name, size, area, planet.name as planet, movie.name as movie 
FROM $this->table INNER JOIN movie ON id_movie=movie.id 
INNER JOIN planet ON id_planet = planet.id WHERE $this->table.id=:id");
        //$statement = $this->pdoConnection->prepare("SELECT * FROM $this->table WHERE id=:id");
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }
}
