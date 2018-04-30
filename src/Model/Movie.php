<?php
/**
 * Created by PhpStorm.
 * User: wcs
 * Date: 23/10/17
 * Time: 10:57
 * PHP version 7
 */

namespace Model;

/**
 * Class Item
 */
class Movie
{

    private $id;

    private $name;


    /**
     * @return integer
     */
    public function getId(): int
    {
        return $this->id;
    }//end getId()


    /**
     * @param mixed $id
     *
     * @return Item
     */
    public function setId($id): Item
    {
        $this->id = $id;

        return $this;
    }//end setId()


    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}
