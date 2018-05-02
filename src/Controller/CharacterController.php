<?php
/**
* Created by PhpStorm.
* User: wcs
* Date: 11/10/17
* Time: 16:07
* PHP version 7
*/

namespace Controller;

use Model\CharacterManager;

/**
* Class ItemController
*/
class CharacterController extends AbstractController
{

  /**
  * Display item listing
  *
  * @return string
  */
    public function list()
    {
        $charactersManager = new CharacterManager();
        $characters = $charactersManager->selectAll();
        return $this->twig->render('Character/list.html.twig', ['characters' => $characters]);
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
      // TODO : A page which displays all details of a specific characters.

        return $this->twig->render('Character/details.html.twig');
    }

  /**
  * Display item creation page
  *
  * @return string
  */
    public function add()
    {
      // TODO : A creation page where your can add a new character.

        return $this->twig->render('Character/add.html.twig');
    }
}
