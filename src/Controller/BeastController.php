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
* Class ItemController
*/
class BeastController extends AbstractController
{

    /**
    * Display item listing
    *
    * @return string
    */
    public function list()
    {
        $beastsManager = new BeastManager();
        $beasts = $beastsManager->selectAll();
        return $this->twig->render('Beast/list.html.twig', ['beasts' => $beasts]);
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
        $beastManager = new BeastManager();
        $beast = $beastManager->selectOneBeastById($id);

        return $this->twig->render('Beast/details.html.twig', [
            'beast' => $beast,
        ]);
    }

    /**
    * Display item creation page
    *
    * @return string
    */
    public function add()
    {
        $message = null; //error message

        //Beast is transform to object because Twig wait an object in this case
        $beast = new Beast();

        if (!empty($_POST)) {
            //Fill in beast object with $_POST info
            //$_POST array transform to Beast object
            $beast->hydrate($_POST);

            if (!empty($beast->getName()) && !empty($beast->getArea()) && !empty($beast->getSize()) && !empty($beast->getIdPlanet()) && !empty($beast->getIdMovie())) {
                $beastManager = new BeastManager();
                //toArray for transform object to array
                $beastManager->insert($beast->toArray());

                header('Location: /beasts');
                die;

            } else {
                $_SESSION['message'] = 'Some fields are empty, please fill in !'; //all fields are not filled in
            }
        }

        //display error message when form is bad filled in
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            unset($_SESSION['message']);
        }

        //List of movies
        $movieManager = new MovieManager();
        $movies = $movieManager->selectAll();

        //List of planets
        $planetManager = new PlanetManager();
        $planets = $planetManager->selectAll();

        return $this->twig->render('Beast/add.html.twig', [
            'beast' => $beast,
            'movies' => $movies,
            'planets' => $planets,
            'message' => $message,
        ]);
    }

    /**
    * Display item creation page
    *
    * @return string
    */
    public function edit(int $id)
    {
        $message = null; //error message

        //beast object
        $beastManager = new BeastManager();
        $beast = $beastManager->selectOneById($id);

        if (!empty($_POST)) {

            //Update object with $_POST info
            $beast->hydrate($_POST);

            if (!empty($beast->getName()) && !empty($beast->getArea()) && !empty($beast->getSize()) && !empty($beast->getIdPlanet()) && !empty($beast->getIdMovie())) {
                $beastManager = new BeastManager();
                //toArray for transform object to array
                $beastManager->update($id, $beast->toArray());

                header('Location: /beasts');
                die;

            } else {
                $_SESSION['message'] = 'Some fields are empty, please fill in !'; //all fields are not filled in
            }
        }

        //display error message when form is bad filled in
        if (isset($_SESSION['message'])) {
            $message = $_SESSION['message'];
            unset($_SESSION['message']);
        }

        if ($beast) {
            //civility object
            $movieManager = new MovieManager();
            $movies = $movieManager->selectAll(); //Complete list of civilities (for select in twig)

            //List of planets
            $planetManager = new PlanetManager();
            $planets = $planetManager->selectAll();

            return $this->twig->render('Beast/edit.html.twig', [
                'beast' => $beast,
                'movies' => $movies,
                'planets' => $planets,
                'message' => $message,
            ]);
        }
    }

    /**
     * Delete Beast
     * @param int $id
     */
    public function delete(int $id)
    {
        $id = (int) $id;
        $beastManager = new BeastManager();
        $beast = $beastManager->deleteById($id);

        header('Location: /beasts');
        die;
    }
}
