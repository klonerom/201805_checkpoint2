<?php
/**
* This file hold all routes definitions.
*
* PHP version 7
*
* @author   WCS <contact@wildcodeschool.fr>
*
* @link     https://github.com/WildCodeSchool/simple-mvc
*/

$routes = [
  'Checkpoint' => [ // Controller
    ['index', '/', 'GET'], // action, url, method
    ['error', '/error/{error:\d+}', 'GET'], // action, url, method
  ],
  'Character' => [ // Controller
    ['list', '/characters', 'GET'], // action, url, method
    ['details', '/characters/{id:\d+}', 'GET'], // action, url, method
    ['add', '/characters/add', ['GET', 'POST']], // action, url, method
  ],
  'Planet' => [ // Controller
    ['list', '/planets', 'GET'], // action, url, method
  ],
  'Movie' => [ // Controller
    ['list', '/movies', 'GET'], // action, url, method
  ],
];
