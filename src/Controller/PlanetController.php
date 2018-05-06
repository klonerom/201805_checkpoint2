<?php
/**
* Created by PhpStorm.
* User: wcs
* Date: 11/10/17
* Time: 16:07
* PHP version 7
*/

namespace Controller;

use A\B;
use Model\Beast;
use Model\BeastManager;
use Model\MovieManager;
use Model\PlanetManager;

/**
* Class PlanetController
*/
class PlanetController extends AbstractController
{

    /**
    * Display planet listing
    *
    * @return string
    */
    public function list()
    {
        $planetManager = new PlanetManager();
        $planets = $planetManager->selectAll();
        return $this->twig->render('Planet/list.html.twig', ['planets' => $planets]);
    }
}
