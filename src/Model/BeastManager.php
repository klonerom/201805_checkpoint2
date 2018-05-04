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
 * Class BeastManager
 * @package Model
 */
class BeastManager extends AbstractManager
{
    const TABLE = 'beast';

    public function __construct()
    {
        parent::__construct(self::TABLE);
    }

    /**
     * Get one row from database by ID JOIN to planet and movie tables.
     *
     * @param int $id
     *
     * @return array
     */
    public function selectOneBeastById(int $id)
    {
        // prepared request
        $statement = $this->pdoConnection->prepare("SELECT beast.id, beast.name, beast.picture, beast.size, beast.area, planet.name  as planetName, movie.title as movieTitle FROM beast JOIN planet ON beast.id_planet = planet.id JOIN movie ON movie.id = beast.id_movie WHERE beast.id = :id");
        $statement->setFetchMode(\PDO::FETCH_CLASS, $this->className);
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetch();
    }

    /**
     * INSERT one row in database
     *
     * @param Array $data
     */
    public function insert(array $data)
    {
        $statement = $this->pdoConnection->prepare("INSERT INTO $this->table (name, picture, size, area, id_movie, id_planet) VALUES (:name, :picture, :size, :area, :id_movie, :id_planet)");
        $statement->bindValue('name', $data['name'], \PDO::PARAM_STR);
        $statement->bindValue('picture', $data['picture'], \PDO::PARAM_STR);
        $statement->bindValue('size', $data['size'], \PDO::PARAM_INT);
        $statement->bindValue('area', $data['area'], \PDO::PARAM_STR);
        $statement->bindValue('id_movie', $data['id_movie'], \PDO::PARAM_INT);
        $statement->bindValue('id_planet', $data['id_planet'], \PDO::PARAM_INT);
        $statement->execute();
    }

    /**
     * @param int   $id   Id of the row to update
     * @param array $data $data to update
     */
    public function update(int $id, array $data)
    {
        //var_dump($data);die;
        $statement = $this->pdoConnection->prepare("UPDATE $this->table SET name = :name, picture = :picture, size = :size, area = :area, id_movie = :id_movie, id_planet = :id_planet WHERE id = :id");
        $statement->bindValue('id', $id, \PDO::PARAM_INT);
        $statement->bindValue('name', $data['name'], \PDO::PARAM_STR);
        $statement->bindValue('picture', $data['picture'], \PDO::PARAM_STR);
        $statement->bindValue('size', $data['size'], \PDO::PARAM_INT);
        $statement->bindValue('area', $data['area'], \PDO::PARAM_STR);
        $statement->bindValue('id_movie', $data['id_movie'], \PDO::PARAM_INT);
        $statement->bindValue('id_planet', $data['id_planet'], \PDO::PARAM_INT);
        $statement->execute();
    }
}
