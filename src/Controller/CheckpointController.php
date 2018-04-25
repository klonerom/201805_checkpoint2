<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 11/10/17
 * Time: 16:07
 * PHP version 7
 */

namespace Controller;

/**
 * Class CheckpointController
 */
class CheckpointController extends AbstractController
{


    /**
     * Display checkpoint listing
     *
     * @return string
     */
    public function index()
    {
        return $this->twig->render('Checkpoint/index.html.twig');
    }//end index()
}//end class
