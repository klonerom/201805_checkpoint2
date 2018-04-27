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

  /**
  * Display checkpoint listing
  *
  * @return string
  */
  public function error(int $error)
  {
    return $this->twig->render('Checkpoint/error.html.twig', ['error' => $error]);
  }//end index()
}//end class
