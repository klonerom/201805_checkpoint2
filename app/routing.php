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
  'Characters' => [ // Controller
    ['list', '/characters', 'GET'], // action, url, method
    ['details', '/characters/{id:\d+}', 'GET'], // action, url, method
    ['add', '/characters/add', 'GET'], // action, url, method
    ['add', '/characters/add', 'POST'], // action, url, method
  ],
  'Planets' => [ // Controller
    ['list', '/planets', 'GET'], // action, url, method
    ['details', '/planets/{id:\d+}', 'GET'], // action, url, method
    ['add', '/planets/add', 'GET'], // action, url, method
    ['add', '/planets/add', 'POST'], // action, url, method
  ],
  'Movies' => [ // Controller
    ['list', '/movies', 'GET'], // action, url, method
    ['details', '/movies/{id:\d+}', 'GET'], // action, url, method
    ['add', '/movies/add', 'GET'], // action, url, method
    ['add', '/movies/add', 'POST'], // action, url, method
  ],
];
