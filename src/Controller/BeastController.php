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

      if (!empty($_POST)) {
          $beast = new Beast();
          //Fill in beast object with $_POST info
          $beast->hydrate($_POST);

          $beastManager = new BeastManager();
          $beastManager->insert($beast->toArray());

          header('Location: /beasts');
          die;
      } else {
          $beast = new Beast();
          $beast->hydrate($_POST);
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
  public function edit(int $id)
  {

      if (!empty($_POST)) {
          $beast = new Beast();
          //Fill in beast object with $_POST info
          $beast->hydrate($_POST);

          $beastManager = new BeastManager();
          //toArray for transform object to array
          $beastManager->update($id, $beast->toArray());

          header('Location: /beasts');
          die;
      }

      //List of beasts
      $beastManager = new BeastManager();
      $beast = $beastManager->selectOneById($id);

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
          ]);
      }
  }
}
