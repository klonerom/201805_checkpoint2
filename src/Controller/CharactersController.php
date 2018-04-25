<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

use Model\Character;
use Model\CharacterManager;

/**
 * Class ItemController
 *
 */
class charactersController extends AbstractController
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
     * @param  int $id
     *
     * @return string
     */
    public function details(int $id)
    {
        $charactersManager = new CharacterManager();
        $character = $charactersManager->selectOneById($id);

        return $this->twig->render('Character/details.html.twig', ['character' => $character]);
    }

    /**
     * Display item creation page
     *
     * @return string
     */
    public function add()
    {
        // TODO : add a new item
        return $this->twig->render('Character/add.html.twig');
    }

}
