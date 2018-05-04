<?php
/**
* Created by PhpStorm.
* User: wcs
* Date: 11/10/17
* Time: 16:07
* PHP version 7
*/

namespace Controller;

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
      $beast = [];

      if (!empty($_POST)) {
          $beast = [
              'name' => $_POST['name'],
              'picture' => $_POST['picture'],
              'size' => (int) $_POST['size'],
              'area' => $_POST['area'],
              'id_movie' => (int) $_POST['movies'][0], //Only the 1 selected
              'id_planet' => (int) $_POST['planet'],
          ];

          $beastManager = new BeastManager();
          $beastManager->insert($beast);

//      header('Location: /');
//      die;
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
    ]);
  }
  /**
  * Display item creation page
  *
  * @return string
  */
  public function edit()
  {
    // TODO : An edition page where your can add a new beast.
    return $this->twig->render('Beast/edit.html.twig');
  }
}
