<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\Planet;
use Model\PlanetManager;

/**
 * Class PlanetController
 */
class PlanetController extends AbstractController
{

    /**
     * Display item listing
     *
     * @return string
     */
    public function list()
    {
        //TODO : A page which display all planets from database.

        return $this->twig->render('Planet/list.html.twig');
    }

    /**
     * Display item informations specified by $id
     *
     * @param int $id
     *
     * @return string
     */
    public function details(int $id)
    {
        $planetManager = new PlanetManager();
        $planet = $planetManager->selectOneById($id);

        return $this->twig->render('Planet/details.html.twig', ['planet' => $planet]);
    }

    /**
     * Display item creation page
     *
     * @return string
     */
    public function add()
    {
        // TODO : A creation page where you can add a planet.
        return $this->twig->render('Planet/add.html.twig');
    }
}
