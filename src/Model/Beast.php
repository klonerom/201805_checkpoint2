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
class Beast
{
    private $id;

    private $name;

    private $picture;

    private $size;

    private $area;

    private $id_movie;

    private $id_planet;

    /**
     * @return mixed
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * @param mixed $picture
     * @return Beast
     */
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     * @return Beast
     */
    public function setSize($size)
    {
        $this->size = $size;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getArea()
    {
        return $this->area;
    }

    /**
     * @param mixed $area
     * @return Beast
     */
    public function setArea($area)
    {
        $this->area = $area;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdMovie()
    {
        return $this->id_movie;
    }

    /**
     * @param mixed $id_movie
     * @return Beast
     */
    public function setIdMovie($id_movie)
    {
        $this->id_movie = $id_movie;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getIdPlanet()
    {
        return $this->id_planet;
    }

    /**
     * @param mixed $id_planet
     * @return Beast
     */
    public function setIdPlanet($id_planet)
    {
        $this->id_planet = $id_planet;

        return $this;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Beast
     */
    public function setId($id): Beast
    {
        $this->id = $id;

        return $this;
    }

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

    /**
     * Return object to array
     * @return array
     */
    public function toArray()
    {
        return [
            'name' => $this->name,
            'picture' => $this->picture,
            'size' =>  $this->size,
            'area' =>  $this->area,
            'id_movie' =>  $this->id_movie,
            'id_planet' => $this->id_planet,
        ];
    }

    /**
     * @param array $data
     */
    public function hydrate($data = [])
    {
        if (!empty($data)) {
            $this->name = $data['name'];
            $this->picture = $data['picture'];
            $this->size = $data['size'];
            $this->area = $data['area'];
            $this->id_movie = $data['movie'];
            $this->id_planet = $data['planet'];
        }
    }
}
