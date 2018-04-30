<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\Movie;
use Model\MovieManager;

/**
 * Class MovieController
 */
class MovieController extends AbstractController
{

    /**
     * Display item listing
     *
     * @return string
     */
    public function list()
    {
        //TODO : A page which display all movies from database.

        return $this->twig->render('Movie/list.html.twig', ['movies' => $movies]);
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
        $movieManager = new MovieManager();
        $movies = $movieManager->selectOneById($id);

        return $this->twig->render('Movie/details.html.twig', ['movie' => $movies]);
    }

    /**
     * Display item creation page
     *
     * @return string
     */
    public function add()
    {
        // TODO : A creation page where you can add a movie.
        return $this->twig->render('Movie/add.html.twig');
    }
}
