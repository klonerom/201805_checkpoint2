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
use Model\MovieManager;

/**
* Class MovieController
*/
class MovieController extends AbstractController
{

    /**
    * Display Movie listing
    *
    * @return string
    */
    public function list()
    {
        $movieManager = new MovieManager();
        $movies = $movieManager->selectAll();
        return $this->twig->render('Movie/list.html.twig', ['movies' => $movies]);
    }
}
